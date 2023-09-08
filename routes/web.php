<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
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

Route::get('/blog', [PostController::class, 'index']);
Route::get('/post/{post:slug}', [PostController::class, 'show']);
Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Categories',
        'categories' => Category::all(),
    ]);
});
Route::get('/categories/{category:slug}', function (Category $category) {
    return view('category', [
        "title" => "Categories",
        "posts" => $category->posts,
        "name" => $category->name
    ]);
});