@extends('layouts.main')

@section('container')
    <article class="mb-5">
        <h1>{{ $post->title }}</h1>
        {!! $post->body !!}
        <a href="/blog">&laquo; Kembali ke posts</a>
    </article>
@endsection
