<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Annotation\Route as AnnotationRoute;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;

use App\Http\Controllers\PhotoController;
/*
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    //return view('welcome');
    return ('Selamat Datang');
});

//Route::get('/hello', function () {
//    return ('Hello World');
//});

Route::get('/world', function () {
    return 'World';
});

Route::get('/about', function () {
    return ('
        <body>
            <h2> NIM  : 2241720106</h2>
            <h2> Nama : Angga Bayu Setiawan</h2>
        </body>
        ');
});

//Route::get('/user/{name}', function ($name) { 
//return 'Nama saya '.$name; 
//}); 

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-' . $postId . " Komentar ke- " . $commentId;
});


Route::get('/articles/{id}', function ($id) {
    return 'Halaman Artikel dengan ID ' . $id;
});

Route::get('/user/{name?}', function ($name = 'john') {
    return 'Nama saya ' . $name;
});

Route::get('/hello', [WelcomeController::class, 'hello']);

//Route::get('/index', [PageController::class, 'index']); 
//Route::get('/about', [PageController::class, 'about']); 
//Route::get('/articles/{$id}', [PageController::class, 'index']); 

//Perubahan route untuk single controller

Route::get('/index', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'about']);
Route::get('/articles/{$id}', [ArticleController::class, 'index']);

Route::resource('photos', PhotoController::class)->only([
    'index',
    'show'
]);

Route::resource('photos', PhotoController::class)->except([
    'create',
    'store',
    'update',
    'destroy'
]);
