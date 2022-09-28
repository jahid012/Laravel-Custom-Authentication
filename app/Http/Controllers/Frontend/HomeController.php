<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Admin\User;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        if(isset($_COOKIE['UID'])){
            $data['userInfo'] = User::where('id' , '=', $_COOKIE['UID'])->first();
        return view('user.pages.home',$data);
        }else{
            return view('user.pages.home');
        }
        
    }
}
