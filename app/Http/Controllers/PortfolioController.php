<?php

namespace App\Http\Controllers;

use App\Models\MediaLibrary;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Admin\User;
use App\Models\UserPortfolio;
use Illuminate\Support\Facades\Session;
class PortfolioController extends Controller
{
    /**
     * insert and update User
     *
     * @return \Illuminate\Http\Response
     */
    public function update_user_portfolio( Request $request){
        $request->validate([
            'title' => 'required',
            'portfolio_desc' => 'required',
            'portfolio_upload'=> 'required',
          ]);
        $result = DB::table('personal_access_tokens')->where(['tokenable_id'=>$_COOKIE['UID'],'token'=>$_COOKIE['JSSTKN']])->get();
        
        if(isset($result[0])){
            if($request->post('portfolio_id')>0){
                $portfolio_model = UserPortfolio::where(['user_id'=> $result[0]->tokenable_id])->first();
                $media_library = MediaLibrary::where(['user_id'=> $result[0]->tokenable_id])->get();
                
                $msg = 'Portfolio Updated Successfully!';
            }else{
                $portfolio_model = new UserPortfolio();
                $media_library = new MediaLibrary();
                $msg = 'Portfolio Inserted Successfully!';
            }
         $portfolio_model->user_id = $result[0]->tokenable_id;
         $portfolio_model->title = $request->post('title');
         $portfolio_model->desc = $request->post('portfolio_desc');
         

         if ($request->has('portfolio_upload')) {

            foreach($request->file('portfolio_upload') as $file) {
                $path = time().rand(1,30).'.'.$file->extension();

                $media_library->user_id = $result[0]->tokenable_id;
                $media_library->media_name = $file->getClientOriginalName();
                $media_library->type = "portfolio";
                $media_library->size = $file->getSize();
                $media_library->media_path = $path;

                $file->move(public_path('media_storage'), $path);
                $media_library->save();
            }
         }
        

         
         $portfolio_model->save();
         Session::flash('message', $msg);
         return redirect('manage-profile');
        }else{
            $msg = 'Something Went Wrong!';
        }
        Session::flash('message', $msg);
        return redirect('manage-profile');
    }
}
