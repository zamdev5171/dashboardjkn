<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotosController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\JawatanController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\UserManagementController;
use App\Http\Controllers\LockScreen;
use App\Http\Controllers\EventController;


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
    return view('auth.login');
});

Route::group(['middleware'=>'auth'],function()
{
    Route::get('home',function()
    {
        return view('home');
    });
    Route::get('home',function()
    {
        return view('home');
    });
});

Auth::routes();

// ----------------------------- main dashboard ------------------------------//
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/web', [App\Http\Controllers\HomeController::class, 'web'])->name('web');




// -----------------------------login----------------------------------------//
Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login');
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'authenticate']);
Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

// ----------------------------- lock screen --------------------------------//
Route::get('lock_screen', [App\Http\Controllers\LockScreen::class, 'lockScreen'])->middleware('auth')->name('lock_screen');
Route::post('unlock', [App\Http\Controllers\LockScreen::class, 'unlock'])->name('unlock');

// ------------------------------ register ---------------------------------//
Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'register'])->name('register');
Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'storeUser'])->name('register');

// ----------------------------- forget password ----------------------------//
Route::get('forget-password', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'getEmail'])->name('forget-password');
Route::post('forget-password', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'postEmail'])->name('forget-password');

// ----------------------------- reset password -----------------------------//
Route::get('reset-password/{token}', [App\Http\Controllers\Auth\ResetPasswordController::class, 'getPassword']);
Route::post('reset-password', [App\Http\Controllers\Auth\ResetPasswordController::class, 'updatePassword']);
Route::get('reset-pwd', [App\Http\Controllers\Auth\ResetPasswordController::class, 'userPassword']);
Route::post('user-pwd', [App\Http\Controllers\Auth\ResetPasswordController::class, 'resetPassword']);

// ----------------------------- user userManagement -----------------------//
Route::get('userManagement', [App\Http\Controllers\UserManagementController::class, 'index'])->middleware('auth')->name('userManagement');
Route::get('user/add/new', [App\Http\Controllers\UserManagementController::class, 'addNewUser'])->middleware('auth')->name('user/add/new');
Route::post('user/add/save', [App\Http\Controllers\UserManagementController::class, 'addNewUserSave'])->name('user/add/save');
Route::post('user/search/list', [App\Http\Controllers\UserManagementController::class, 'userSearch'])->name('user/search/list');
Route::get('view/detail/{id}', [App\Http\Controllers\UserManagementController::class, 'viewDetail'])->middleware('auth');
Route::get('user/edit/{id}',[App\Http\Controllers\UserManagementController::class,'userEdit'])->name('user/edit{id}');
Route::post('update', [App\Http\Controllers\UserManagementController::class, 'update'])->name('update');
Route::get('delete_user/{id}', [App\Http\Controllers\UserManagementController::class, 'delete'])->middleware('auth');
Route::get('activity/log', [App\Http\Controllers\UserManagementController::class, 'activityLog'])->middleware('auth')->name('activity/log');
Route::get('activity/login/logout', [App\Http\Controllers\UserManagementController::class, 'activityLogInLogOut'])->middleware('auth')->name('activity/login/logout');

// ----------------------------- form change password ------------------------------//
Route::get('change/password', [App\Http\Controllers\UserManagementController::class, 'changePasswordView'])->middleware('auth')->name('change/password');
Route::post('change/password/db', [App\Http\Controllers\UserManagementController::class, 'changePasswordDB'])->name('change/password/db');



// ----------------------------- Perjawatan------------------------------//
Route::get('all/jawatan/list',[App\Http\Controllers\JawatanController::class,'list'])->name('all/jawatan/list');
Route::get('add/jawatan/new',[App\Http\Controllers\JawatanController::class,'jawatanAdd'])->name('add/jawatan/new');
Route::post('add/jawatan/save',[App\Http\Controllers\JawatanController::class,'jawatanSave'])->name('add/jawatan/save');
Route::get('jawatan/edit/{id}',[App\Http\Controllers\JawatanController::class,'jawatanEdit'])->name('jawatan/edit{id}');
Route::post('jawatan/update',[App\Http\Controllers\JawatanController::class,'jawatanUpdate'])->name('jawatan/update');
Route::get('delete_jawatan/{id}',[App\Http\Controllers\JawatanController::class,'jawatanDelete'])->name('jawatan/delete');

// ----------------------------- Logistik ------------------------------//
Route::get('all/logistik/list',[App\Http\Controllers\LogistikController::class,'list'])->name('all/logistik/list');
Route::get('add/logistik/new',[App\Http\Controllers\LogistikController::class,'logistikAdd'])->name('add/logistik/new');
Route::post('add/logistik/save',[App\Http\Controllers\LogistikController::class,'logistikSave'])->name('add/logistik/save');
Route::get('logistik/edit/{id}',[App\Http\Controllers\LogistikController::class,'logistikEdit'])->name('logistik/edit{id}');
Route::post('logistik/update',[App\Http\Controllers\LogistikController::class,'logistikUpdate'])->name('logistik/update');
Route::get('delete_logistik/{id}',[App\Http\Controllers\LogistikController::class,'logistikDelete'])->name('logistik/delete');


// ----------------------------- Directory ------------------------------//
Route::get('directory/view',[App\Http\Controllers\ReportController::class,'view'])->name('directory/view');
Route::get('HLabuan/directory',[App\Http\Controllers\ReportController::class,'webview'])->name('HLabuan/directory');
Route::get('directory/export',[App\Http\Controllers\ReportController::class,'export'])->name('directory/export');
Route::post('search/staff',[App\Http\Controllers\ReportController::class,'search'])->name('search/staff');
Route::post('filter/export',[App\Http\Controllers\ReportController::class,'filter'])->name('filter/export');
Route::post('filter/directory',[App\Http\Controllers\ReportController::class,'filterWeb'])->name('filter/directory');

// ----------------------------- Fasiliti ------------------------------//
Route::get('all/fasiliti/list',[App\Http\Controllers\FasilitiController::class,'list'])->name('all/fasiliti/list');
Route::get('add/fasiliti/new',[App\Http\Controllers\FasilitiController::class,'fasilitiAdd'])->name('add/fasiliti/new');
Route::post('add/fasiliti/save',[App\Http\Controllers\FasilitiController::class,'fasilitiSave'])->name('add/fasiliti/save');
Route::get('fasiliti/edit/{id}',[App\Http\Controllers\FasilitiController::class,'fasilitiEdit'])->name('fasiliti/edit{id}');
Route::post('fasiliti/update',[App\Http\Controllers\FasilitiController::class,'fasilitiUpdate'])->name('fasiliti/update');
Route::get('delete_fasiliti/{id}',[App\Http\Controllers\FasilitiController::class,'fasilitiDelete'])->name('fasiliti/delete');


// ----------------------------- Katil-Hosp ------------------------------//
Route::get('all/hospital/list',[App\Http\Controllers\HospitalController::class,'list'])->name('all/hospital/list');
Route::get('add/hospital/new',[App\Http\Controllers\HospitalController::class,'hospitalAdd'])->name('add/hospital/new');
Route::post('add/hospital/save',[App\Http\Controllers\HospitalController::class,'hospitalSave'])->name('add/hospital/save');
Route::get('hospital/edit/{id}',[App\Http\Controllers\HospitalController::class,'hospitalEdit'])->name('hospital/edit{id}');
Route::post('hospital/update',[App\Http\Controllers\HospitalController::class,'hospitalUpdate'])->name('hospital/update');
Route::get('delete_hospital/{id}',[App\Http\Controllers\HospitalController::class,'hospitalDelete'])->name('hospital/delete');


// ----------------------------- Alat ------------------------------//
Route::get('all/alat/list',[App\Http\Controllers\AlatController::class,'list'])->name('all/alat/list');
Route::get('add/alat/new',[App\Http\Controllers\AlatController::class,'alatAdd'])->name('add/alat/new');
Route::post('add/alat/save',[App\Http\Controllers\AlatController::class,'alatSave'])->name('add/alat/save');
Route::get('alat/edit/{id}',[App\Http\Controllers\AlatController::class,'alatEdit'])->name('alat/edit{id}');
Route::post('alat/update',[App\Http\Controllers\AlatController::class,'alatUpdate'])->name('alat/update');
Route::get('delete_alat/{id}',[App\Http\Controllers\AlatController::class,'alatDelete'])->name('alat/delete');