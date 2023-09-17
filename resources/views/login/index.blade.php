@extends('layouts.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-md-5">
            <main class="form-signin w-100 m-auto">

                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @if (session('loginError'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('loginError') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>
                <form action="/login" method="POST" class="d-flex flex-column gap-3">

                    @csrf
                    <div class="form-floating">
                        <input type="email" name="email"
                            class="form-control 
                            @error('email') 
                                is-invalid 
                            @enderror"
                            id="login" placeholder="name@example.com" autocomplete="off" value="{{ old('email') }}"
                            required autofocus />
                        <label for="login">Email address</label>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="password" name="password"
                            class="form-control 
                            @error('password') 
                                is-invalid 
                            @enderror"
                            id="password" placeholder="Password" required />
                        <label for="password">Password</label>
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <button class="btn btn-primary w-100 py-2 mt-2" type="submit">
                        Login
                    </button>
                    <small class="d-block text-center">Don't have an account? <a href="/register">Register</a></small>
                </form>
            </main>
        </div>
    </div>
@endsection
