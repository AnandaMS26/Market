<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginAdminController;


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


// Route::group([
//     'prefix'=>config('admin.path'),
//     ],function(){
//     Route::get('login',[LoginAdminController::class,'formLogin'])->name('admin.login');
//     Route::post('login',[LoginAdminController::class,'login']);
    
//     Route::group(['middleware'=>'auth:admin'],function(){
//     Route::post('logout',[LoginAdminController::class,'logout'])->name('admin.logout');
//     Route::get('/',[DashboardController::class,'index'])->name('dashboard');

//     Route::resource('AcademyPackage', AcademyPackageController::class);
//     Route::resource('Academy.Silabus',SilabusPackageController::class);
//     Route::resource('Materi',MateriController::class);

//     Route::group(['middleware'=>['can:role,"admin"']], function(){
//         Route::resource('admin','AdminController');
       
//     });

//     });



// });   




