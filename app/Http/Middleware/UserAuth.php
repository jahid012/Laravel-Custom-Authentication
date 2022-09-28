<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(isset($_COOKIE['UID'])){
            $result = DB::table('personal_access_tokens')->where(['tokenable_id'=>$_COOKIE['UID'],'token'=>$_COOKIE['JSSTKN']])->get();
            if(isset($result[0])){
                view()->share('user_login', true);
            }else{
                setcookie('UID',"",100);
                return redirect('/');
               
            }
        }else{
            return redirect('/');
        }
        return $next($request)->header('Cache-Control', 'no-cache, no-store, max-age=0, must-revalidate')
        ->header('Pragma', 'no-cache')
        ->header('Expires','Sat 01 Jan 1990 00:00');
    }
}
