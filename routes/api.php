<?php

use App\Http\Controllers\AcademyPackageController;
use App\Http\Controllers\SilabusPackageController;
use App\Http\Controllers\MateriController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group([
    'prefix'=>config('admin.path'),
    ],function(){
    Route::get('login',[LoginAdminController::class,'formLogin'])->name('admin.login');
    Route::post('login',[LoginAdminController::class,'login']);
    
    Route::group(['middleware'=>'auth:admin'],function(){
    Route::post('logout',[LoginAdminController::class,'logout'])->name('admin.logout');
    Route::get('/',[DashboardController::class,'index'])->name('dashboard');

    Route::resource('AcademyPackage', AcademyPackageController::class);
    Route::resource('Academy.Silabus',SilabusPackageController::class);
    Route::resource('Materi',MateriController::class);

    Route::group(['middleware'=>['can:role,"admin"']], function(){
        Route::resource('admin','AdminController');
       
    });

    });



});   