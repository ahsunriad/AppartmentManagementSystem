<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegistrationController;
use App\Http\Controllers\Owner\OwnerFrontendController;
use App\Http\Controllers\Tenet\TenetFrontendController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('login', [LoginController::class, 'index']) ;
Route::post('login', [LoginController::class, 'authenticate'])  ;
Route::get('register', [RegistrationController::class, 'index']) ;
Route::post('register', [RegistrationController::class, 'store']) ;
Route::get('/dashboard_owner',[OwnerFrontendController::class, 'index']);
Route::get('/profile/{username}', [OwnerFrontendController::class, 'profileView']);
Route::put('/updateProfile/{username}',[OwnerFrontendController::class, 'update']);
Route::get('/tenets',[OwnerFrontendController::class, 'tenets']);

Route::get('/dashboard_tenet',[TenetFrontendController::class, 'index']);

Route::get('/logout', function(){
    if(session()->has('LoggedUser')){
        session()->pull('LoggedUser');
        return redirect('/login');
    }
});

