@extends('layouts.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-md-5">
            <main class="form-signin w-100 m-auto">
                <h1 class="h3 mb-3 fw-normal text-center">Register Form</h1>
                <form class="d-flex flex-column gap-3" method="POST" action="/register">
                    @csrf
                    <div class="form-floating">
                        <input type="name" name="name"
                            class="form-control 
                            @error('name') 
                                is-invalid 
                            @enderror"
                            id="name" placeholder="Name" autocomplete="off" value="{{ old('name') }}" required />
                        <label for="name">Name</label>

                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="name" name="username"
                            class="form-control 
                            @error('username') 
                                is-invalid 
                            @enderror"
                            id="username" placeholder="Username" autocomplete="off" value="{{ old('username') }}"
                            required />
                        <label for="username">Username</label>
                        @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="email" name="email"
                            class="form-control 
                            @error('email') 
                                is-invalid
                            @enderror"
                            id="email" placeholder="name@example.com" autocomplete="off" value="{{ old('email') }}"
                            required />
                        <label for="email">Email address</label>
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
                            id="password" placeholder="Password" autocomplete="off" required />
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
                    <small class="d-block text-center">Allready have an account? <a href="/login">Login</a></small>
                </form>
            </main>
        </div>
    </div>
@endsection
