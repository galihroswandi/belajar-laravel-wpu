@extends('layouts.main')

@section('container')
    @foreach ($posts as $post)
        <article class="mb-5">
            <a href="/post/{{ $post['slug'] }}">
                <h1>{{ $post['title'] }}</h1>
            </a>
            <h5>By: {{ $post['author'] }}</h5>
            <p>{{ $post['body'] }}</p>
        </article>
    @endforeach
@endsection
