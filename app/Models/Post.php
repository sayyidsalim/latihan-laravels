<?php

namespace App\Models;

class Post 
{
    private static  $blog_posts = [
        [
            "title"=> "Blog pertama",
            "slug"=> "blog-pertama",
            "author" => "sayyid salim",
            "post"=> "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium in iure ullam ad dolorem voluptates non aliquid odio possimus ratione repudiandae consectetur consequatur laborum est rerum, corrupti aperiam cupiditate dolor modi nam soluta corporis molestias! Magnam, quaerat assumenda corrupti veniam architecto dicta illo nemo dolore officia excepturi voluptate reiciendis rerum alias ab eligendi nihil praesentium numquam vitae possimus autem. Minus ipsa similique, alias nesciunt repellendus aperiam quam non fugit vitae modi numquam optio id dolorum ducimus ullam vero pariatur quas?"
        ],
        [
            "title"=> "Blog Kedua",
            "slug"=> "blog-kedua",
            "author" => "sayyid asseggaf",
            "post"=> "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium in iure ullam ad dolorem voluptates non aliquid odio possimus ratione repudiandae consectetur consequatur laborum est rerum, corrupti aperiam cupiditate dolor modi nam soluta corporis molestias! Magnam, quaerat assumenda corrupti veniam architecto dicta illo nemo dolore officia excepturi voluptate reiciendis rerum alias ab eligendi nihil praesentium numquam vitae possimus autem. Minus ipsa similique, alias nesciunt repellendus aperiam quam non fugit vitae modi numquam optio id dolorum ducimus ullam vero pariatur quas?"
        ],
        [
            "title"=> "blog ketiga",
            "slug"=> "blog-ketiga",
            "author" => "ahmad",
            "post"=> "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium in iure ullam ad dolorem voluptates non aliquid odio possimus ratione repudiandae consectetur consequatur laborum est rerum, corrupti aperiam cupiditate dolor modi nam soluta corporis molestias! Magnam, quaerat assumenda corrupti veniam architecto dicta illo nemo dolore officia excepturi voluptate reiciendis rerum alias ab eligendi nihil praesentium numquam vitae possimus autem. Minus ipsa similique, alias nesciunt repellendus aperiam quam non fugit vitae modi numquam optio id dolorum ducimus ullam vero pariatur quas?"
        ],
    ];

    public static function all () {
        return collect(self::$blog_posts);
    }

    public static function find(string $slug) {
        $posts = static::all();
        return $posts->firstWhere("slug", $slug);
    }
}
