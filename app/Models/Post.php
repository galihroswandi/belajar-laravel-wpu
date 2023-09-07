<?php

namespace App\Models;

class Post
{
    static $posts = [
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

    public static function all()
    {
        return collect(self::$posts);
    }

    public static function find($slug)
    {
        $posts = self::all();
        return $posts->firstWhere('slug', $slug);
    }
}