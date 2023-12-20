<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(3)->create();
        
        Category::create([
            "name"=> "Programing",
            "slug"=> "programing",
        ]);
        Category::create([
            "name"=> "Personal",
            "slug"=> "personal",
        ]);

        Post::factory(20)->create();

        // User::create([
        //     "name"=> "sy salim",
        //     "email"=> "mohsalim12@gmail.com",
        //     "password"=> bcrypt("rahasia")
        // ]);
        // Post::create([
        //     "title"=> "Ini post kedua",
        //     "slug"=> "ini-post-kedua",
        //     "excerpt"=> "orem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis minima hic fugiat non provident molestiae doloremque, ducimus nemo commodi labore eum perspiciatis voluptates ex quo,",
        //     "user_id"=> 1,
        //     "category_id" => 2,
        //     "body"=> "Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis minima hic fugiat non provident molestiae doloremque, ducimus nemo commodi labore eum perspiciatis voluptates ex quo, esse veniam excepturi saepe corrupti ipsum sint quas? Reiciendis, eveniet veritatis. Voluptatum provident nobis aliquam debitis eos natus tempora sint. Rem aperiam obcaecati nobis expedita qui quas suscipit quidem atque in accusantium voluptate quasi unde at praesentium nihil fugiat, aspernatur nam libero impedit. Magni animi similique, recusandae ad ipsum neque eveniet officiis inventore architecto culpa. Recusandae optio fugiat, assumenda perspiciatis molestias est eaque illo magni, repellendus magnam accusantium ad maiores, voluptate impedit ut repudiandae quidem."
        // ]);

    }
}
