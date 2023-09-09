<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('about', [
            "name" => "Jhon Doee",
            "email" => "7PcRf@example.com",
            "image" => "https://randomuser.me/api/portraits/men/10.jpg",
            "title" => "About",
        ]);
    }
}