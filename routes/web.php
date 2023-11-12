<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;

use App\Http\Controllers\Admin\FileController;
use App\Http\Controllers\MainController;


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



Route::get('/',[MainController::class,'index'])->name('main');

Auth::routes();
/*
route::group(['prefix' => 'admin','namespace'=>'Admin','middelware'=>'auth'],function(){
    Route::get('/',[HomeController::class,'index'])->name('admin.home');
    //Route::get('/home',[HomeController::class,'index'])->name('admin.home');

    route::resource('files',FileController::class)->names('admin.files');
    

});*/

Route::get('admin',[HomeController::class,'index'])->name('admin.home');
route::resource('/admin/files',FileController::class)->names('admin.files');

