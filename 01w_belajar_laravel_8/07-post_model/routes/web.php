<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

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
    return view('home', [
        "title" => "Home",
    ]);
});

//? Menggunakan Closure
Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Budi Darmawan",
        "email" => "budi.darmawan@gmail.com",
        "image" => "budi-darmawan.jpeg"
    ]);
});

//? Menggunakan Controller
Route::get('/posts', [PostController::class, 'index']);
// Halaman Single Post
Route::get('/post/{post:slug}', [PostController::class, 'show']);