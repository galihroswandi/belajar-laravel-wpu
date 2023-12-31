@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col-md-8">
                <article class="mb-5">
                    <h1 class="mb-3">{{ $post->title }}</h1>
                    <div class="action">
                        <a href="/dashboard/posts" class="btn btn-success"><i data-feather="arrow-left"></i> Back to all
                            posts</a>
                        <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><i
                                data-feather="edit"></i> Edit</a>
                        <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline-block">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')"><i
                                    data-feather="x-circle"></i> Delete</button>
                        </form>
                    </div>
                    @if ($post->image)
                        <div style="max-height: 400px; object-fit: cover; overflow: hidden;">
                            <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}"
                                style="width: 100%;" class="mt-3">
                        </div>
                    @else
                        <img src="https://source.unsplash.com/1200x400?{{ $post->category->slug }}"
                            alt="{{ $post->category->name }}" style="max-width: 100%;" class="mt-3">
                    @endif
                    <article class="my-3">
                        {!! $post->body !!}
                    </article>
                </article>
            </div>
        </div>
    </div>
@endsection
