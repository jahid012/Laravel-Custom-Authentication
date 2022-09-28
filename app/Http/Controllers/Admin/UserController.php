<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Laravel\Socialite\Facades\Socialite;
use Nette\Utils\Random;


class UserController extends Controller
{
    /**
     * Display the user list
     *
     * @return \Illuminate\Http\Response
     */
    public function userlist()
    {
        $result['data'] = User::all();
        return view("admin.partials.userlist",$result);
    }

    /**
     * Delete User;
     *
     * @return \Illuminate\Http\Response
     */
    public function deleteuser(Request $request,$id)
    {
        $model = User::find($id);
        $model->delete();
        Session::flash('message', 'Data Deleted Successfully!');
         return redirect('admin/category/list');
    }



    //User Dashboard
    public function dashboard(){
        $data['userInfo'] = User::where('id' , '=', $_COOKIE['UID'])->first();
        return view('user.pages.dashboard.dashboard',$data);
    }

    //User Profile Management
    public function view_profile(){
        $data['userInfo'] = User::where('id' , '=', $_COOKIE['UID'])->first();
        return view('user.pages.profile',$data);
    }

    //User Profile Management
    public function manage_user_profile(){
        $data['userInfo'] = Db::table('users')
        ->join('user_portfolios', 'users.id', '=', 'user_portfolios.user_id')
         ->select('users.*', 'user_portfolios.*')
        ->get();
        dd($data);
        return view('user.pages.dashboard.manageprofile', compact('data'));
    }

    /**
     * insert and update User
     *
     * @return \Illuminate\Http\Response
     */
    public function update_user_profile( Request $request){
        $user_id = $_COOKIE['UID'];
        $result = DB::table('personal_access_tokens')->where(['tokenable_id'=>$user_id,'token'=>$_COOKIE['JSSTKN']])->get();
        if(isset($result[0])){
         $model = User::find($result[0]->tokenable_id);
         $model->first_name = $request->post('first_name');
         $model->last_name = $request->post('last_name');
         $model->profile_image = $request->post('profile_image');
         $model->nid_number = $request->post('nid_number');
         $model->gig_category = $request->post('gig_category');
         $model->short_description = $request->post('short_description');
         $model->full_description = $request->post('full_description');
         $model->ip_address = $request->post('ip_address');
         $model->city = $request->post('city');
         $model->state = $request->post('state');
         $model->zip = $request->post('zip');
         $model->country = $request->post('country');
         $model->updated_at = $request->post('updated_at');
         $model->save();
         $msg = 'User Updated Successfully!';
         Session::flash('message', $msg);
         return redirect('manage-profile');
        }else{
            $msg = 'Something Went Wrong!';
        }
        Session::flash('message', $msg);
        return redirect('manage-profile');
    }



}
