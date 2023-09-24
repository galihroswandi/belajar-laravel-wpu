<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "name" => "Administrator",
            "username" => "admin",
            "email" => "admin123@proton.me",
            "email_verified_at" => now(),
            "password" => bcrypt("password"),
            'remember_token' => Str::random(10)
        ]);

        User::factory(5)->create();

        // Category::factory(2)->create();
        Category::create([
            "name" => "Web Programming",
            "slug" => "web-programming"
        ]);
        Category::create([
            "name" => "Web Design",
            "slug" => "web-design",
        ]);
        Category::create([
            "name" => "Personal",
            "slug" => "personal"
        ]);

        Post::factory(20)->create();
    }
}