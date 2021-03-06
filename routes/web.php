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
use App\Http\Controllers\AmenitiesController;
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
    // Route::get('member', [VisitorController::class, 'displayonmember']);
    // Route::get('visitor_list',[VisitorController::class, 'show']);
    Route::get('visitor_list', [VisitorController::class, 'tdate']);
    Route::post('visitor_list', [VisitorController::class, 'tdate']);
    Route::view('/staff_attendance', 'staff/staff_attendance');
    Route::view('/staffattendance', 'staff/staffattendance');
    Route::get('member', [VisitorController::class, 'show_flatusername']);
    Route::post('staff_attendance', [VisitorController::class, 'staff_attendance']);
    Route::get('/staff_attendance', [VisitorController::class, 'staff_attendance_list']);

    Route::view('/staff-amenities', 'member-pages/staff-amenities');
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




Route::view('/gym', 'amenities/gym');
 Route::post('/gym', [AmenitiesController::class, 'addData']);
 Route::get('/gym',[AmenitiesController::class, 'showgym']);

 Route::view('/swim', 'amenities/swim');
 Route::post('/swim', [AmenitiesController::class, 'addpoolData']);
 Route::get('/swim',[AmenitiesController::class, 'showpooluser']);

 Route::view('/playzone', 'amenities/playzone');
 Route::post('/playzone', [AmenitiesController::class, 'addplayData']);
 Route::get('/playzone',[AmenitiesController::class, 'showplayuser']);


 Route::view('/security-management', 'welcome-pages/security-management');
 Route::view('/financial-management', 'welcome-pages/financial-management');
 Route::view('/community-management', 'welcome-pages/community-management');

 Route::get('/home', [VisitorController::class, 'displayonhome']);

//  Route::get('/forgot_password',[ForgotPassword::class, 'forgot' ]);
//  Route::post('/forgot_password',[ForgotPassword::class, 'password' ]);

 Route::post('/maintenance-entry',[MaintenanceController::class, 'addData']);

 Route::view('/enroll-society', 'society-enrollment/enroll-society');

