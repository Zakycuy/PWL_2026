<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PhotoController;

Route::resource('photos', PhotoController::class)->only([
    'index', 'show'
]);

Route::resource('photos', PhotoController::class)->except([
    'create', 'store', 'update', 'destroy'
]);

Route::resource('photos', PhotoController::class);

Route::get('/', HomeController::class);
Route::get('/about', AboutController::class);
Route::get('/articles/{id}', ArticleController::class);

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/hello', function () {
//     return 'Hello World';
// });

Route::get('/hello', [WelcomeController::class,'hello']);

Route::get('/world', function () {
   return 'World';
});

// Route::get('/', function () {
//    return 'Welcome';
// });

// Route::get('/about', function () {
//     return 'NIM : 244107020070, Name : Raihan Zaky Ramadhan';
// });

// Route::get('/user/{name}', function ($name) {
//     return 'My Name '.$name;
// });

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Post to'.$postId." Comments to: ".$commentId;
});

// Route::get('/articles/{id}', function ($id) {
//     return 'Article Page with ID '.$id;
// });

Route::get('/user/{name?}', function ($name='John') {
return 'My name '.$name;
});

use App\Http\Controllers\PageController;

// Route::get('/', [PageController::class, 'index']);
// Route::get('/about', [PageController::class, 'about']);
// Route::get('/articles/{id}', [PageController::class, 'articles']);

