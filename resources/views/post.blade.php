@extends('layouts.main')

@section('container')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <article class="mb-5">
                    <h1 class="mb-3">{{ $post->title }}</h1>
                    <p>By: <a href="/posts?author={{ $post->author->username }}">{{ $post->author->name }}</a> in <a
                            href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a></p>
                    <img src="https://source.unsplash.com/1200x400?{{ $post->category->slug }}" alt="{{ $post->category->name }}" style="max-width: 100%;">
                    <article class="my-3">
                        {!! $post->body !!}
                    </article>
                    <a href="/posts" class="d-block mt-2">&laquo; Kembali ke posts</a>
                </article>
            </div>
        </div>
    </div>
@endsection
