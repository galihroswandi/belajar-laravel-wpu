<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="/">WPU Blog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ stripos($_SERVER['REQUEST_URI'], '/') ? 'active' : '' }}"
                        href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ stripos($_SERVER['REQUEST_URI'], 'about') ? 'active' : '' }}"
                        href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ stripos($_SERVER['REQUEST_URI'], 'posts') ? 'active' : '' }}"
                        href="/posts">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ stripos($_SERVER['REQUEST_URI'], 'categories') ? 'active' : '' }}"
                        href="/categories">Categories</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Welcome Back, {{ auth()->user()->username }}
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/dashboard">Dashboard</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <form action="/logout" method="post">
                                    @csrf
                                    <button type="submit" class="dropdown-item">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @else
                    <li class="nav-item">
                        <a href="/login"
                            class="nav-link {{ stripos($_SERVER['REQUEST_URI'], 'login') ? 'active' : '' }}"><i
                                class="bi bi-box-arrow-in-right"></i> Login</a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
