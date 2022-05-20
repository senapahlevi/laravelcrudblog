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
//versi route isi closure

// Route::get('/posts', function () {
//     // $blog_post = [
//     //    [ "title" => "Kovid 1",
//     //     "slug" => "kovid-1",
//     //     "author" => "sena",
//     //     "body" => "kovid bahaya!!"],

//     //    [ "title" => "Eintracht frankfurt menang uel !!!",
//     //           "slug" => "eintracht-frankfurt-menang-uel",

//     //     "author" => "sena",
//     //     "body" => "Klub kuda hitam"],
//     // ];
//     return view('posts',[
//         "title" => "Posts",
//         // "posts" => $blog_post, //ini versi panggil dummy
//         "posts" => Post::all(), //manggil dari model dan :: ini buat ngasih tau ini buat manggil
//     ]);
// });
//versi bersih 
Route::get('/posts', [PostController::class,'index']);//'index' itu method nya yak


//versi route isi closure

// Route::get('/posts/{slug}', function ($slug) {

    // $blog_post = [
    //    [ "title" => "Kovid 1",
    //     "slug" => "kovid-1",
    //     "author" => "sena",
    //     "body" => "kovid bahaya!!"],

    //    [ "title" => "Eintracht frankfurt menang uel !!!",
    //           "slug" => "eintracht-frankfurt-menang-uel",

    //     "author" => "sena",
    //     "body" => "Klub kuda hitam"],
    // ];
    // $new_post = [];
    // foreach($blog_post as $post){
    //     if($post["slug"] === $slug){
    //         $new_post = $post;
    //     }
    // }

    // return view('post',[
    //     "title" => "Single Post",

    //     "post" => Post::find($slug), //ini versi panggil pake db 
    //     "post" => $new_post, //ini versi panggil dummy
    // ]);

    //function(){sampe ];return view ini namanya closure ngapain perintah taro sini pisahin ke controller sen biar si route jadi}

// });
        //versi rapi routes aja dari controller wajib sih ini 
Route::get('/posts/{slug}',[PostController::class,'show'] );//'show' itu method nya yak
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/email',function(){
//     Mail::to('senaplzen@gmail.com')->send(new WelcomeMail());
//     return new WelcomeMail();
// });

// Route::get('sendmail',function(){
//     $details=[
//         'body' => 'These body for test'
//     ];
//     \Mail::to('sena.pahlevi@ezypolis.com')->send(new WelcomeMail());
//     dd("email is sent");
// });
// Route::get('users/export','UsersExportController@export');
// Route::get('file-import-export',[UserController::class,'fileImportExport']);
// Route::post('file-import',[UserController::class,'fileImport'])->name('file-import');
// Route::get('file-import-export',[UserController::class,'fileExport'])->name('file-export');

// Route::resource('student', StudentController::class);
// Route::get('student_export',[StudentController::class, 'get_student_data'])->name('student.export');
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();  

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
