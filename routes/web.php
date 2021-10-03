
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\web\BlogController;
use App\Http\Controllers\web\HomeController;
use App\Http\Controllers\web\AboutController;
use App\Http\Controllers\web\ContactController;
use App\Http\Controllers\admin\BlogController as AdminBlogController;
use App\Http\Controllers\admin\HomeController as AdminHomeController;
use App\Http\Controllers\admin\ContactController as AdminContactController;
use App\Http\Controllers\admin\SettingController as AdminSettingController;

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


Route::get('/',[HomeController::class,'index']);
//Route::get('n',[HomeController::class,'icon']);
Route::get('about',[AboutController::class,'about']);
Route::get('blog/{id}',[BlogController::class,'show']);
Route::get('contact',[ContactController::class,'show']);
Route::post('contact/store',[ContactController::class,'storage']);
//Route::get('blog/search',[BlogController::class,'search']);

Route::prefix('dashboard')->group(function(){

    

    Route::get('/',[AdminHomeController::class,'index'])->middleware('islogin');

    Route::get('all-blog',[AdminBlogController::class,'index']);
    Route::get('add-blog',[AdminBlogController::class,'add'])->middleware('islogin');
    Route::post('storeblog',[AdminBlogController::class,'store'])->middleware('islogin');
    Route::get('delete/blog/{id}',[AdminBlogController::class,'delete'])->middleware('islogin');
    Route::get('edit/blog/{id}',[AdminBlogController::class,'edit'])->middleware('islogin');
    Route::post('update/blog/{id}',[AdminBlogController::class,'update'])->middleware('islogin');

    Route::get('contact/show',[AdminContactController::class,'show'])->middleware('islogin');
    Route::get('contact/delete/{id}',[AdminContactController::class,'delete'])->middleware('islogin');

    Route::get('links/show',[AdminSettingController::class,'show'])->middleware('islogin');
    Route::post('links/store',[AdminSettingController::class,'store'])->middleware('islogin');
    Route::get('links/delete/{id}',[AdminSettingController::class,'delete'])->middleware('islogin');
    Route::get('links/edit/{id}',[AdminSettingController::class,'edit'])->middleware('islogin');
    Route::post('links/update/{id}',[AdminSettingController::class,'update'])->middleware('islogin');
   
    Route::get('logout',[AuthController::class,'logout'])->middleware('islogin');
  
    Route::get('login',[AuthController::class,'loginform']);
    Route::post('login',[AuthController::class,'login']);
    
  
});
