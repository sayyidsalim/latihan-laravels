<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
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
    return view('home',[
        "title"=> "Home"
    ]);
});
Route::get('/about', function () {
    return view('about',[
        "title"=> "About",
        "name" => "sayyid salim",
        "email"=> "coredev951@gmail.com",
        "image"=> "laptop2.jpg"
    ]);
});


Route::get('/blog', [PostController::class , "index"]);

Route::get("/posts/{slug}",[PostController::class , "show"]);