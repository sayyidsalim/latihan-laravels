<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
class PostController extends Controller
{
    public function index () {
        return view('posts',[
            "title"=> "All Post",
            // with untuk mencegah n+1 problem
            "posts"=> Post::latest()->get(),
        ]);
    }

    public function show (Post $post) 
    {
        return view("post",[
            "title" => "Single Post",
            "post"=> $post
        ]);
    }

    public function author (User $author) {
        return view("posts", [
            "title"=> "Post author:" . " " . $author->name,
            "posts"=> $author->posts->load("category","author")
        ]);
    }
}
