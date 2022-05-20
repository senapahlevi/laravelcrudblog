<?php

use Illuminate\Support\Facades\Route;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;
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
Route::get('/posts', function () {
    $blog_post = [
       [ "title" => "Kovid 1",
        "slug" => "kovid-1",
        "author" => "sena",
        "body" => "kovid bahaya!!"],

       [ "title" => "Eintracht frankfurt menang uel !!!",
              "slug" => "eintracht-frankfurt-menang-uel",

        "author" => "sena",
        "body" => "Klub kuda hitam"],
    ];
    return view('posts',[
        "title" => "Posts",
        "posts" => $blog_post,
    ]);
});
Route::get('/posts/{slug}', function ($slug) {

    $blog_post = [
       [ "title" => "Kovid 1",
        "slug" => "kovid-1",
        "author" => "sena",
        "body" => "kovid bahaya!!"],

       [ "title" => "Eintracht frankfurt menang uel !!!",
              "slug" => "eintracht-frankfurt-menang-uel",

        "author" => "sena",
        "body" => "Klub kuda hitam"],
    ];
    $new_post = [];
    foreach($blog_post as $post){
        if($post["slug"] === $slug){
            $new_post = $post;
        }
    }
    return view('post',[
        "title" => "Single Post",
        "post" => $new_post,
    ]);
});

// Auth::routes();

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
