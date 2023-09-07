@extends('layouts.main')

@section('container')
    <article class="mb-5">
        <h1>{{ $post['title'] }}</h1>
        <h5>By: {{ $post['author'] }}</h5>
        <p>{{ $post['body'] }}</p>
        <a href="/blog">&laquo; Kembali ke posts</a>
    </article>
@endsection
