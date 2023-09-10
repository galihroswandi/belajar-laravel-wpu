@extends('layouts.main')

@section('container')
    <h1 class="mb-5">{{ $title }}</h1>
    @foreach ($posts as $post)
        <article class="mb-5 pb-4" style="border-bottom: .1rem solid #ccc;">
            <a href="/posts/{{ $post->slug }}">
                <h1 class="fs-4">{{ $post->title }}</h1>
            </a>
            <p class="mt-3">By: <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a
                    href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
            <p>{{ $post->excerpt }}</p>
            <a href="/posts/{{ $post->slug }}">Read more...</a>
        </article>
    @endforeach
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