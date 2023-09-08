@extends('layouts.main')

@section('container')
    <h1 class="mb-3 fs-3">Post Categories</h1>
    @foreach ($categories as $category)
        <ul>
            <li>
                <a href="/categories/{{ $category->slug }}">
                    <h1 class="fs-4">{{ $category->name }}</h1>
                </a>
            </li>
        </ul>
    @endforeach
@endsection
