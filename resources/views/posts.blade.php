@extends('layouts.main')

@section('container')
    <h2 class="mb-3 text-center">{{ $title }}</h2>
    <div class="row mb-3 justify-content-center">
        <div class="col-md-6">
            <form action="/posts" method="get">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @elseif(request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">
                @endif
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search.."" name="search" autocomplete="off"
                        value="{{ request('search') }}">
                    <button class="btn btn-primary" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>
    <div class="d-flex justify-content-end">
        {{ $posts->links() }}
    </div>
    @if ($posts->count())
        <div class="card mb-3 overflow-hidden">
            @if ($posts[0]->image)
                <div style="max-height: 500px; object-fit: cover; overflow: hidden;">
                    <img src="{{ asset('storage/' . $posts[0]->image) }}" alt="{{ $posts[0]->category->name }}"
                        style="width: 100%;" class="img-fluid">
                </div>
            @else
                <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->slug }}" class="card-img-top"
                    alt="{{ $posts[0]->category->name }}">
            @endif
            <div class="card-body text-center">
                <h5 class="card-title">{{ $posts[0]->title }}</h5>
                <p class="card-text">
                    <small class="text-body-secondary">By. <a
                            href="/posts?author={{ $posts[0]->author->username }}">{{ $posts[0]->author->name }}</a> in <a
                            href="/posts?category={{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a>
                        {{ $posts[0]->created_at->diffForHumans() }}
                    </small>
                </p>
                <p class="card-text">{{ $posts[0]->excerpt }}</p>
                <a href="/posts/{{ $posts[0]->slug }}" class="btn btn-primary">Read More</a>
            </div>
        </div>

        <div class="container mt-4">
            <div class="row">
                @foreach ($posts->skip(1) as $post)
                    <div class="col-lg-4 mb-3">
                        <div class="card overflow-hidden">
                            <a href="/posts?category={{ $post->category->slug }}">
                                <p class="position-absolute px-3 py-2 text-white fs-5"
                                    style="background-color:rgba(51, 65, 85, .7); backdrop-filter: blur(3px);">
                                    {{ $post->category->name }}</p>
                            </a>
                            @if ($post->image)
                                <div style="max-height: 400px; object-fit: cover; overflow: hidden;">
                                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}"
                                        style="width: 100%;" class="img-fluid">
                                </div>
                            @else
                                <img src="https://source.unsplash.com/500x400?{{ $post->category->slug }}"
                                    class="card-img-top" alt="{{ $post->category->name }}">
                            @endif
                            <div class="card-body">
                                <a href="/posts/{{ $post->slug }}" style="color: #334155;">
                                    <h5 class="card-title">{{ $post->title }}</h5>
                                </a>
                                <p class="mt-3 fs-6">By: <a
                                        href="/posts?author={{ $post->author->username }}">{{ $post->author->name }}</a>
                                    {{ $post->created_at->diffForHumans() }}</p>
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
        a {
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
@endsection
