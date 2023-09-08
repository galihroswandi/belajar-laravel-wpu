@extends('layouts.main')

@section('container')
    <article class="mb-5">
        <h1>{{ $post->title }}</h1>
        <p>By: <a href="#">{{ $post->user->name }}</a> in <a
                href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
        {!! $post->body !!}
        <a href="/blog">&laquo; Kembali ke posts</a>
    </article>
@endsection
