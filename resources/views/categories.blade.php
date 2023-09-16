@extends('layouts.main')

@section('container')
    <h1 class="mb-3 fs-3">Post Categories</h1>
    @if($categories->count()    )
    <div class="container">
        <div class="row">
            @foreach ($categories as $category)
                <div class="col-md-3">
                    <a href="/posts?category{{ $category->slug }}">
                        <div class="card text-bg-dark">
                            <img src="https://source.unsplash.com/500x500?{{ $category->slug }}" class="card-img" alt="{{ $category->name }}">
                            <div class="card-img-overlay d-flex align-items-center justify-content-center text-center p-0">
                            <h5 class="card-title py-3 fs-5" style="width: 100%; background-color:rgba(0,0,0,.7); backdrop-filter: blur(5px);">{{ $category->name }}</h5>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
    @else
        <p class="text-center fs-4">No Categories Found</p>
    @endif
@endsection
