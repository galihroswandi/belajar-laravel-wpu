@extends('layouts.main')

@section('container')
    <h1 class="mb-4 fs-3">Post Category : {{ $name }}</h1>
    @foreach ($posts as $post)
        <article class="mb-5">
            <a href="/posts/{{ $post->slug }}">
                <h1 class="fs-4">{{ $post->title }}</h1>
            </a>
            <p>{{ $post->excerpt }}</p>
        </article>
    @endforeach
@endsection
