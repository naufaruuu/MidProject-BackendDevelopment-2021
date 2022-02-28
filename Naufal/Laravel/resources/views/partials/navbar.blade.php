{{-- navbar --}}
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand" href="/">Meta Learning</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">

                {{-- home --}}
                <li class="nav-item">
                    <a class="nav-link {{ $title === 'Home' ? 'active' : '' }}" href="/">
                        @if ($title === 'Home')
                            <span>Home</span>
                        @else
                            Home
                        @endif
                    </a>
                </li>

                {{-- courses --}}
                <li class="nav-item">
                    <a class="nav-link {{ $title === 'Courses' ? 'active' : '' }}" href="/courses">
                        @if ($title === 'Courses')
                            <span>Courses</span>
                        @else
                            Courses
                        @endif
                    </a>
                </li>

                {{-- about --}}
                <li class="nav-item">
                    <a class="nav-link {{ $title === 'About' ? 'active' : '' }}" href="/about">
                        @if ($title === 'About')
                            <span>About</span>
                        @else
                            About
                        @endif
                    </a>
                </li>

                {{-- user, logout, login --}}
                <ul class="navbar-nav ms-auto">
                    @auth
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                {{ auth()->user()->username }}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="/user">My Profile</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <form action="/logout" method="POST">
                                        @csrf
                                        <button type="submit" class="dropdown-item"> <i class="bi bi-box-arrow-right"></i>
                                            Logout</button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @else
                        @if ($title !== 'Login' && $title !== 'Register' && $title !== 'User')
                            <a href="/login" class="btn btn-primary" href="#" role="button">Login</a>
                        @endif
                    @endauth

                </ul>
        </div>
    </div>
</nav>
