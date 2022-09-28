<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Laravel\Socialite\Facades\Socialite;
use Nette\Utils\Random;
use Illuminate\Http\Request;

class AuthController extends Controller
{    /**
    * Register a User.
    *
    * @return \Illuminate\Http\Response
    */
   public function user_registration(Request $request)
   {
       $valid= Validator::make($request->all(),[
           "email" => 'required|email|unique:users,email',
           "mobile" => 'required|unique:users,mobile|numeric',
           "password"=> 'required',
       ]);
       if($valid->fails()){
           return response()->json([
               'status'=>'error',
               'error' => $valid->errors()->toArray(),
           ]);
       }else{
           $rand_id = rand(111111111,999999999);
           $arr=[
               "email" => $request->email,
               "mobile" => $request->mobile,
               "password" => Crypt::encrypt($request->password),
               "primary_verification_method"=> 'email',
               "is_varified" => 0,
               "rand_id" => $rand_id,
           ];
           $query = DB::table('users')->insert($arr);
           if($query){
               // $data=['name'=>"Hallow", "random_id"=>$rand_id];
               // $user["to"]= $request->email;
               // Mail::send('user.templates.email_verification',$data,function($message)use($user){
               //     $message->to($user["to"]);
               //     $message->subject("Please Verify Your Email To EliteWorker.");
               // });
               return response()->json(['status'=>'success', 'msg'=>'Registration Successfull! Please Login To Your Account']);
           }
       }
   }

       /**
    * login a User.
    *
    * @return \Illuminate\Http\Response
    */
   public function user_login(Request $request)
   {
   
       $result = DB::table('users')->where(['email'=>$request->email])->get();

       if(isset($result[0])){

           $pass = Crypt::decrypt($result[0]->password);
           if($pass === $request->password){
               $token_value = Random::generate(50);
               $arr = [
                   "tokenable_type" => "web",
                   "tokenable_id" => $result[0]->id,
                   "name" => "authtoken",
                   "token" => $token_value,
                   "abilities" => "user",
                   "last_used_at" => date('Y-m-d H:i:s'),
               ];
               $query = DB::table('personal_access_tokens')->insert($arr);
           if($query){
               //Delete old sessions Upto Four Times.
               $oldsessions =  DB::table('personal_access_tokens')->where(['tokenable_id'=>$result[0]->id,'abilities'=>'user'])->get();
               if(count($oldsessions) > 4){
                  $deletequery = DB::table('personal_access_tokens')->where(['tokenable_id'=>$result[0]->id,'abilities'=>'user'])->orderBy('id', 'asc')->limit(1);
                  $deletequery->delete();
               }
               $request->session()->put('USER_LOGIN',true);
               $request->session()->put('USER_ID',$result[0]->id);
               setcookie('UID',$result[0]->id,time()+60*60*24*30);
               setcookie('JSSTKN',$token_value,time()+60*60*24*30);
               $status = 'success';
               $msg = 'Login Successfully';
       
               }
           }else{
               $status = 'error';
               $msg = 'Please Enter Valid Password';
           }
           
       }else{
           $status = 'error';
           $msg = 'Please Enter Valid Email';
       }
      
       return response()->json(['status'=>$status, 'msg'=>$msg]);
   }


    //Google Login Management
    public function handle_google_callback(){
        $user = Socialite::driver('google')->user();

        $this->google_register($user);
        return redirect()->route('home');
    }

    //Google Login Management
    public function google_register($user){
        $result = DB::table('users')->where(['email'=>$user->email])->get();
        if(count($result) == 0){
            $arr=[
                "first_name" => $user->name,
                "email" => $user->email,
                "providers_id" => $user->id,
                "profile_image" => $user->avatar,
                "is_varified" => 1,
                "rand_id" => 1234545763274343,
                "primary_verification_method"=>"google",
            ];
            DB::table('users')->insert($arr);
        }

    }
}
