@extends('layouts.main')

@section('container')
    <h1 class="mb-5">Halaman Blog Posts</h1>
    @foreach ($posts as $post)
        <article class="mb-5">
            <a href="/post/{{ $post->slug }}">
                <h1 class="fs-4">{{ $post->title }}</h1>
            </a>
            <p class="mt-3">By: <a href="#">{{ $post->user->name }}</a> in <a
                    href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
            <p>{{ $post->excerpt }}</p>
        </article>
    @endforeach
@endsection
