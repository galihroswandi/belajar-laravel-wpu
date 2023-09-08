@extends('layouts.main')

@section('container')
    @foreach ($posts as $post)
        <article class="mb-5">
            <a href="/post/{{ $post->slug }}">
                <h1 class="fs-4">{{ $post->title }}</h1>
            </a>
            <p>{{ $post->excerpt }}</p>
        </article>
    @endforeach
@endsection
