@extends('layouts.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-md-5">
            <main class="form-signin w-100 m-auto">
                <h1 class="h3 mb-3 fw-normal text-center">Register Form</h1>
                <form class="d-flex flex-column gap-3">

                    <div class="form-floating">
                        <input type="name" name="name" class="form-control" id="name" placeholder="Name" />
                        <label for="name">Name</label>
                    </div>
                    <div class="form-floating">
                        <input type="name" name="username" class="form-control" id="username" placeholder="Username" />
                        <label for="username">Username</label>
                    </div>
                    <div class="form-floating">
                        <input type="email" name="email" class="form-control" id="email"
                            placeholder="name@example.com" />
                        <label for="email">Email address</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password" />
                        <label for="password">Password</label>
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
