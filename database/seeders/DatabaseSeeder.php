<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();


        User::create([
            'name' => 'Admin',
            'email' => 'Vj0wS@example.com',
            'password' => bcrypt('12345'),
        ]);

        User::create([
            'name' => 'Jhon Doe',
            'email' => 'jhondoe@example.com',
            'password' => bcrypt('12345'),
        ]);

        Category::create([
            'name' => 'Web Progamming',
            'slug' => 'web-programming',
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'Personal',
        ]);

        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quidem.',
            'body' => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere minus blanditiis hic ipsum voluptates iste omnis? Quisquam id, atque quos excepturi adipisci quia perspiciatis reprehenderit harum sequi? Sed saepe architecto qui debitis ipsum fugiat nisi quisquam aspernatur, sunt tempora atque dicta ipsam at maxime autem facilis adipisci necessitatibus vitae eum ipsa enim provident possimus laborum quas. Reiciendis odit enim vel nihil pariatur recusandae provident ipsam, amet aut maiores asperiores quam possimus, voluptatem minus exercitationem. Incidunt iusto voluptatibus, aspernatur veritatis eum eligendi harum architecto odit amet magnam repudiandae non rem. Doloribus aperiam sit ex, reprehenderit consequatur aut commodi velit. Deserunt, ipsam?</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident qui praesentium iste voluptate nulla consectetur in. Ut eos officiis iure beatae, impedit cum possimus laboriosam vero veniam eveniet? A assumenda animi labore velit fugiat ab cum est fuga porro totam libero, vero adipisci id reprehenderit non culpa deleniti sed nam!</p>",
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Kedua',
            'slug' => 'judul-kedua',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quidem.',
            'body' => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere minus blanditiis hic ipsum voluptates iste omnis? Quisquam id, atque quos excepturi adipisci quia perspiciatis reprehenderit harum sequi? Sed saepe architecto qui debitis ipsum fugiat nisi quisquam aspernatur, sunt tempora atque dicta ipsam at maxime autem facilis adipisci necessitatibus vitae eum ipsa enim provident possimus laborum quas. Reiciendis odit enim vel nihil pariatur recusandae provident ipsam, amet aut maiores asperiores quam possimus, voluptatem minus exercitationem. Incidunt iusto voluptatibus, aspernatur veritatis eum eligendi harum architecto odit amet magnam repudiandae non rem. Doloribus aperiam sit ex, reprehenderit consequatur aut commodi velit. Deserunt, ipsam?</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident qui praesentium iste voluptate nulla consectetur in. Ut eos officiis iure beatae, impedit cum possimus laboriosam vero veniam eveniet? A assumenda animi labore velit fugiat ab cum est fuga porro totam libero, vero adipisci id reprehenderit non culpa deleniti sed nam!</p>",
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ketiga',
            'slug' => 'judul-ketiga',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quidem.',
            'body' => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere minus blanditiis hic ipsum voluptates iste omnis? Quisquam id, atque quos excepturi adipisci quia perspiciatis reprehenderit harum sequi? Sed saepe architecto qui debitis ipsum fugiat nisi quisquam aspernatur, sunt tempora atque dicta ipsam at maxime autem facilis adipisci necessitatibus vitae eum ipsa enim provident possimus laborum quas. Reiciendis odit enim vel nihil pariatur recusandae provident ipsam, amet aut maiores asperiores quam possimus, voluptatem minus exercitationem. Incidunt iusto voluptatibus, aspernatur veritatis eum eligendi harum architecto odit amet magnam repudiandae non rem. Doloribus aperiam sit ex, reprehenderit consequatur aut commodi velit. Deserunt, ipsam?</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident qui praesentium iste voluptate nulla consectetur in. Ut eos officiis iure beatae, impedit cum possimus laboriosam vero veniam eveniet? A assumenda animi labore velit fugiat ab cum est fuga porro totam libero, vero adipisci id reprehenderit non culpa deleniti sed nam!</p>",
            'category_id' => 3,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Keempat',
            'slug' => 'judul-keempat',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quidem.',
            'body' => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere minus blanditiis hic ipsum voluptates iste omnis? Quisquam id, atque quos excepturi adipisci quia perspiciatis reprehenderit harum sequi? Sed saepe architecto qui debitis ipsum fugiat nisi quisquam aspernatur, sunt tempora atque dicta ipsam at maxime autem facilis adipisci necessitatibus vitae eum ipsa enim provident possimus laborum quas. Reiciendis odit enim vel nihil pariatur recusandae provident ipsam, amet aut maiores asperiores quam possimus, voluptatem minus exercitationem. Incidunt iusto voluptatibus, aspernatur veritatis eum eligendi harum architecto odit amet magnam repudiandae non rem. Doloribus aperiam sit ex, reprehenderit consequatur aut commodi velit. Deserunt, ipsam?</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident qui praesentium iste voluptate nulla consectetur in. Ut eos officiis iure beatae, impedit cum possimus laboriosam vero veniam eveniet? A assumenda animi labore velit fugiat ab cum est fuga porro totam libero, vero adipisci id reprehenderit non culpa deleniti sed nam!</p>",
            'category_id' => 2,
            'user_id' => 2
        ]);
    }
}