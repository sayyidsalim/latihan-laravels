<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $guarded = ["id"];

    // membentuk relasi antar table dan memberi tahu bahwa category bisa ada banyak di setiap post
    public function posts() 
    {
        return $this->hasMany(Post::class);
    }
}
