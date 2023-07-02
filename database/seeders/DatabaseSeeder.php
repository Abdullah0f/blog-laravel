<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // create 5 manually
        User::create([
            'username' => 'admin',
            'email' => 'abc@abc.com',
            'password' => bcrypt('123456'),
            'is_admin' => true,
        ]);

        User::create([
            'username' => 'user',
            'email' => 'user@user.com',
            'password' => bcrypt('123456'),
        ]);
        User::create([
            'username' => 'user1',
            'email' => 'user1@user.com',
            'password' => bcrypt('123456'),
        ]);
        User::create([
            'username' => 'user2',
            'email' => 'user2@user.com',
            'password' => bcrypt('123456'),
        ]);




        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work',
        ]);

        $hobby = Category::create([
            'name' => 'Hobby',
            'slug' => 'hobby',
        ]);

        $family = Category::create([
            'name' => 'Family',
            'slug' => 'family',
        ]);


        // create 10 posts for each category and each post assigned to a random user
        for ($i = 0; $i < 5; $i++) {
            $family->posts()->create([
                'user_id' => rand(1, 4),
                'title' => "Post " . $i,
                'slug' => "post-" . $i,
                'excerpt' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.",
                'body' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.",
            ]);
        }
        for ($i = 5; $i < 10; $i++) {
            $work->posts()->create([
                'user_id' => rand(1, 4),
                'title' => "Post " . $i,
                'slug' => "post-" . $i,
                'excerpt' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.",
                'body' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.",
            ]);
        }
        for ($i = 10; $i < 15; $i++) {
            $hobby->posts()->create([
                'user_id' => rand(1, 4),
                'title' => "Post " . $i,
                'slug' => "post-" . $i,
                'excerpt' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.",
                'body' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.",
            ]);
        };
    }
}
