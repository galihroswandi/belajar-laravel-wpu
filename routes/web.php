<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "name" => "Jhon Doee",
        "email" => "7PcRf@example.com",
        "image" => "https://randomuser.me/api/portraits/men/10.jpg",
        "title" => "About",
    ]);
});

Route::get('/blog', function () {

    $data_posts = [
        [
            "title" => "Judul Pertama",
            "author" => "Jhon",
            "slug" => "judul-post-pertama",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum voluptas omnis quae, odio iste porro reprehenderit ea impedit pariatur eaque minus officia itaque enim ex libero fugiat recusandae! Tempora consectetur facere atque maxime quis provident qui ut officia tenetur autem libero vitae vero enim, veritatis repellendus itaque rem ducimus iure quibusdam omnis tempore deleniti possimus quisquam quaerat? Numquam totam deserunt eos sapiente sunt autem ad accusamus. Quod placeat, voluptatum sint ad corrupti atque reprehenderit numquam quaerat magnam possimus enim officia."
        ],
        [
            "title" => "Judul Kedua",
            "author" => "Doe",
            "slug" => "judul-post-kedua",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, odit ab sapiente nulla reprehenderit eum excepturi deserunt suscipit dolore? Voluptas, culpa quo vel quis corrupti, quia adipisci placeat perferendis, repellat est numquam optio fugit sint aliquam. Quo possimus nesciunt sapiente rerum cum corporis, officia nulla delectus aliquam mollitia. Cupiditate eveniet debitis vitae fugit blanditiis reiciendis qui quis doloremque optio. Impedit veritatis nisi dicta nihil eum repellat? Incidunt dolor adipisci sunt repellendus molestias dignissimos quos magnam maxime, reprehenderit impedit itaque dolorem corporis explicabo aut ipsam in nulla blanditiis! Blanditiis fugiat nisi tenetur est iste. Ad consectetur porro dolorum itaque ducimus facilis."
        ],
    ];

    return view('posts', [
        "title" => "Posts",
        "posts" => $data_posts
    ]);
});

Route::get('/post/{slug}', function ($slug) {

    $data_posts = [
        [
            "title" => "Judul Pertama",
            "author" => "Jhon",
            "slug" => "judul-post-pertama",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum voluptas omnis quae, odio iste porro reprehenderit ea impedit pariatur eaque minus officia itaque enim ex libero fugiat recusandae! Tempora consectetur facere atque maxime quis provident qui ut officia tenetur autem libero vitae vero enim, veritatis repellendus itaque rem ducimus iure quibusdam omnis tempore deleniti possimus quisquam quaerat? Numquam totam deserunt eos sapiente sunt autem ad accusamus. Quod placeat, voluptatum sint ad corrupti atque reprehenderit numquam quaerat magnam possimus enim officia."
        ],
        [
            "title" => "Judul Kedua",
            "author" => "Doe",
            "slug" => "judul-post-kedua",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, odit ab sapiente nulla reprehenderit eum excepturi deserunt suscipit dolore? Voluptas, culpa quo vel quis corrupti, quia adipisci placeat perferendis, repellat est numquam optio fugit sint aliquam. Quo possimus nesciunt sapiente rerum cum corporis, officia nulla delectus aliquam mollitia. Cupiditate eveniet debitis vitae fugit blanditiis reiciendis qui quis doloremque optio. Impedit veritatis nisi dicta nihil eum repellat? Incidunt dolor adipisci sunt repellendus molestias dignissimos quos magnam maxime, reprehenderit impedit itaque dolorem corporis explicabo aut ipsam in nulla blanditiis! Blanditiis fugiat nisi tenetur est iste. Ad consectetur porro dolorum itaque ducimus facilis."
        ],
    ];

    $new_post = [];
    foreach ($data_posts as $post) {
        if ($post['slug'] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "post" => $new_post,
        "title" => "Single Post"
    ]);
});