@extends('layouts.main')

@section('css')
    <!-- my css -->
    <link rel="stylesheet" href="assets/loginStyle.css">
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> --}}
@endsection

@section('container')
    <div class="row justify-content-center">
        <div class="col-md-5">
            {{-- login error --}}
            @if (session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('loginError') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    </button>
                </div>
            @endif

            {{-- alert for succes regristation --}}
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            <main class="form-signin">
                <form action="/login" method="post">
                    @csrf
                    <h1 class="h3 mb-3 fw-normal text-center mt-4 mb-4">Please sign in</h1>

                    {{-- username --}}
                    <div class="form-floating">
                        <input type="text" name="username" class="form-control @error('username') is-invalid @enderror"
                            id="username" placeholder="username" autofocus required value="{{ old('username') }}">
                        <label for="email">Username</label>
                        @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- password --}}
                    <div class="form-floating">
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password"
                            required>
                        <label for="password">Password</label>
                    </div>


                    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
                </form>
                <small class="d-block text-center mt-3">Not Registered? <a href="/register">Register Now!</a></small>
            </main>
        </div>
    </div>
@endsection
