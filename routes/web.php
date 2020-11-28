<?php

use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\contactusController;
use App\Http\Controllers\VisitorController;
use App\Http\Controllers\LoginDashboardController;
use App\Http\Controllers\gymcontroller;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\MaintenanceController;
use App\Http\Controllers\security\ForgotPassword;


Route::view('/', 'welcome');
Route::post('/welcome',[DemoController::class, 'addData']);


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/login/admin', [LoginController::class, 'showAdminLoginForm']);
Route::get('/login/member', [LoginController::class,'showmemberLoginForm']);
Route::get('/register/admin', [RegisterController::class,'showAdminRegisterForm']);
Route::get('/register/member', [RegisterController::class,'showmemberRegisterForm']);

Route::post('/login/admin', [LoginController::class,'adminLogin']);
Route::post('/login/member', [LoginController::class,'memberLogin']);
Route::post('/register/admin', [RegisterController::class,'createAdmin']);
Route::post('/register/member', [RegisterController::class,'createmember']);

Route::group(['middleware' => 'auth:member'], function () {
    Route::view('/member', 'member');
    Route::get('member', [VisitorController::class, 'displayonmember']);
    Route::get('visitor_list',[VisitorController::class, 'show']);
    
    

});

Route::group(['middleware' => 'auth:admin'], function () {
    
    Route::view('/admin', 'admin');
    Route::get('admin', [VisitorController::class, 'display']);
    
    Route::view('/admin-maintenance', 'admin-pages\admin-maintenance');
    Route::view('/maintenance-entry', 'maintenance\maintenance-entry');
    Route::get('maintenance-entry', [VisitorController::class, 'show_username']);
    
    
});

Route::get('logout', [LoginController::class,'logout']);

Route::get('/maintenance', [PagesController::class, 'maintenance']);
Route::get('/household', [PagesController::class, 'household']);
Route::get('/amenities', [PagesController::class, 'amenities']);
Route::get('/parking', [PagesController::class, 'parking']);
Route::get('/complaints', [PagesController::class, 'complaints']);
Route::get('/contactus', [contactusController::class, 'contactus']);

// Route::view('/logindashboard', 'pages/logindashboard');
Route::get('/logindashboard', [LoginDashboardController::class, 'logindashboard']);

Route::post('contactus', [contactusController::class, 'addContact']);

Route::get('visitors', [VisitorController::class, 'visitors']); 
// Route::post('visitors',[VisitorController::class, 'addData']);

Route::post('member',[VisitorController::class, 'addData']);





// Route::get('member',[VisitorController::class, 'showvisitors']);

Route::get('visitors',[VisitorController::class, 'show_flatanduser']);


//Route::post('welcome',[ScheduleDemo::class, 'addDemo']);

// Route::get('home',[VisitorController::class, 'show1']);




Route::view('/gym', 'gym');
 Route::post('/gym', [gymcontroller::class, 'addData']);
 Route::get('/gym',[gymcontroller::class, 'show2']);


 Route::view('/security-management', 'security-management');

 Route::get('/home', [VisitorController::class, 'displayonhome']);

//  Route::get('/forgot_password',[ForgotPassword::class, 'forgot' ]);
//  Route::post('/forgot_password',[ForgotPassword::class, 'password' ]);

 Route::post('/maintenance-entry',[MaintenanceController::class, 'addData']);