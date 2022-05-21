<?php

use App\Models\Post;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;
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
    return view('app',[
        'title' => "Home"
    ]);
});
Route::get('/about', function () {
    return view('about',[
        'title' => "Tentang"
    ]);
});
  
//versi bersih 
Route::get('/posts', [PostController::class,'index']);//'index' itu method nya yak


  
        //versi rapi routes aja dari controller wajib sih ini 
// Route::get('/posts/{slug}',[PostController::class,'show'] );//'show' itu method nya yak

Route::get('/posts/{post:slug}',[PostController::class,'show'] );//harus sama ini update lagi coz /post itu function nya (Post $post) gitu 
  