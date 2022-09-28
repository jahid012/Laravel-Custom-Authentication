<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function adminlogin()
    {
        if( Session::has('ADMIN_LOGIN')){
           return redirect('admin/dashboard');
        }else{
            return view("admin.auth");
        }
    }

    /**
     * Authenticate the Admoin
     *
     * @return \Illuminate\Http\Response
     */
    public function loginsubmit( Request $request)
    {
        $email = $request->post('email');
        $result = Admin::where(['email'=>$email])->first();

        

        if(isset($result)){
            if(Hash::check($request->post('password'),$result->password)){
                $request->session()->put('ADMIN_LOGIN', true);
                $request->session()->put('ADMIN_ID',$result->id);
                return redirect('admin/dashboard');
            }else{
                Session::flash('error','SomeThing Error! Please Enter A Valid Information.');
                return redirect('admin');
            }
        }else{
            Session::flash('error','SomeThing Error! Please Enter A Valid Information');
            return redirect('admin');
           
        }
    }




    /**
     * Display the admin dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        return view("admin.dashboard");
    }


  
}
