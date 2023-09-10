@extends('layouts.main')

@section('container')
    @if($_SERVER['REQUEST_URI'] !== '/posts')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page"><a href="/posts">Posts</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ stripos($_SERVER['REQUEST_URI'], 'categories') ? 'Categories' : 'Author' }}</li>
        </ol>
    </nav>
    @endif
    <h1 class="mb-4">{{ $title }}</h1>
    @if ($posts->count())
        <div class="card mb-3">
            <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->slug }}" class="card-img-top" alt="...">
            <div class="card-body text-center">
            <h5 class="card-title">{{ $posts[0]->title }}</h5>
                <p class="card-text">
                    <small class="text-body-secondary">By. <a href="/authors/{{ $posts[0]->author->username }}">{{ $posts[0]->author->name }}</a> in <a
                    href="/categories/{{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}
                    </small>
                </p>
            <p class="card-text">{{ $posts[0]->excerpt }}</p>
            <a href="/posts/{{ $posts[0]->slug }}" class="btn btn-primary">Read More</a>
            </div>
        </div>

        <div class="container mt-4">
            <div class="row">
                @foreach($posts->skip(1) as $post)
                <div class="col-lg-4 mb-3">
                    <div class="card">
                        <a href="/categories/{{ $post->category->slug }}"><p class="position-absolute px-3 py-2 text-white fs-5" style="background-color:rgba(51, 65, 85, .7); backdrop-filter: blur(3px);">{{ $post->category->name }}</p></a>
                        <img src="https://source.unsplash.com/500x400?{{ $post->category->slug }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="/posts/{{ $post->slug }}" style="color: #334155;">
                                <h5 class="card-title">{{ $post->title }}</h5>
                            </a>
                            <p class="mt-3 fs-6">By: <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> {{ $post->created_at->diffForHumans() }}</p>
                            <p class="card-text">{{ $post->excerpt }}</p>
                            <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    @else 
        <p class="text-center fs-4">No Posts Found</p>
    @endif
@endsection

@section('css')
    <style>
        a{
            text-decoration: none;
        }
        a:hover{
            text-decoration: underline;
        }
    </style>
@endsection