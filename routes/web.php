<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/hello', function () {
    return 'Hello World';
});

Route::get('/world', function () {
   return 'World';
});

Route::get('/selamatdatang', function () {
   return 'Selamat Datang';
});

Route::get('/about', function () {
   return '244107020106 Izza Dhafira Fanani';
});

Route::get('/user/{fira}', function ($fira) {
    return 'Nama saya '.$fira;
});

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

Route::get('/articles/{id}/pages/{page}', function ($articleId, $pageId) {
    return 'Halaman Artikel ke-'.$pageId." dengan ID: ".$articleId;
});

Route::get('/user/{name?}', function ($name=null) {
return 'Nama saya '.$name;
});

Route::get('/user/{name?}', function ($name='John') {
return 'Nama saya '.$name;
});
