<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthorsController extends Controller
{
    public function index(User $author)
    {
        return view('posts', [
            'title' => "Post By Author : $author->name",
            'posts' => $author->posts->load('author', 'category'),
        ]);
    }
}