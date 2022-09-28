<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\GigCategoryController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[HomeController::class, 'index'])->name('home');
Route::get('admin',[AdminController::class, 'adminlogin']);
Route::post('admin/auth',[AdminController::class, 'loginsubmit'])->name('admin.auth');

Route::group(['middleware'=>'admin_auth'], function(){
    //Admin Auth Route
    Route::get('admin/logout',function(){
        Session::forget('ADMIN_LOGIN');
        Session::forget('ADMIN_ID');
        return redirect('admin');
    });

    //Admin Dashboard Route
    Route::get('admin/dashboard',[AdminController::class, 'dashboard'])->name('dashboard');
    
    //Category Navigation For Admin
    Route::get('admin/category/list',[GigCategoryController::class, 'categorylist'])->name('category.list');
    Route::get('admin/category/add',[GigCategoryController::class, 'addcategory'])->name('category.add');
    Route::get('admin/category/edit/{id}',[GigCategoryController::class, 'addcategory']);
    Route::get('admin/category/delete/{id}',[GigCategoryController::class, 'deletecategory']);
    Route::post('admin/process_category',[GigCategoryController::class, 'process_category'])->name('category.insert');
    
    //User Navigation For Admin
    Route::get('admin/user/list',[UserController::class, 'userlist'])->name('user.list');
    

});


//User Route
Route::post('registration_process',[AuthController::class, 'user_registration'])->name('user.registration');
Route::post('login_process',[AuthController::class, 'user_login'])->name('user.login');

//google Authentication
Route::get('/auth/redirect/google', function () {
    return Socialite::driver('google')->redirect();
})->name('auth.google');
Route::get('/auth/google/callback',[ AuthController::class, 'handle_google_callback']);

//protected route
Route::group(['middleware'=>'user_auth'], function(){
Route::get('logout',function(){
    setcookie('JSSTKN',"",100);
    setcookie('UID',"",100);
    return redirect('/');
})->name('user.logout');
Route::get('dashboard',[UserController::class, 'dashboard'])->name('user.dashboard');
Route::get('manage-profile',[UserController::class, 'manage_user_profile'])->name('user.manage-profile');
Route::post('update-profile',[UserController::class, 'update_user_profile'])->name('user.update-profile');
Route::post('update-portfolio',[PortfolioController::class, 'update_user_portfolio'])->name('user.update-portfolio');

Route::get('profile',[UserController::class, 'view_profile'])->name('user.view-profile');

});
