<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    //
    public function index ()
    {
        return view('about',[
            "title"=> "About",
            "name" => "sayyid salim",
            "email"=> "coredev951@gmail.com",
            "image"=> "laptop2.jpg"
        ]);
    }
}
