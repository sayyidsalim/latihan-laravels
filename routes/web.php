<?php

use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CategoryController;
Route::get('/', function () {
    return view('home',[
        "title"=> "Home"
    ]);
});
Route::get('/about', [AboutController::class,"index"]);


/**
 * disini kita membuaat sebuah controller yang memanggil sebuah method yang terhubung dari model kita, di argument keduanya itulah method nya harus di sebutkan
 */
Route::get('/blog', [PostController::class , "index"]);
Route::get("/categories", [CategoryController::class,"index"]);

Route::get("/posts/{post:slug}",[PostController::class , "show"]);

// disini kita mengambil category slug yang akan di tampilkan di link
Route::get("/category/{category:slug}",[CategoryController::class, 'show']);

Route::get("/authors/{author:username}",[PostController::class, "author"]);