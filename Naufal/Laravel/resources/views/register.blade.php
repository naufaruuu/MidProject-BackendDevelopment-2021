@extends('layouts.main')

@section('css')
    <!-- my css -->
    <link rel="stylesheet" href="assets/loginStyle.css">
@endsection

@section('container')
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <main class="form-registration">
                <h1 class="h3 mb-3 fw-normal text-center mt-4 mb-4">Registration Form</h1>
                <form action="/register" method="POST" enctype="multipart/form-data">
                    @csrf

                    {{-- nama lengkap --}}
                    <div class="form-floating">
                        <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror"
                            id="name" placeholder="Name" autofocus required value="{{ old('name') }}">
                        <label for="name">Full Name</label>
                        @error('name')
                            <div class="invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>

                    {{-- email --}}
                    <div class="form-floating">
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email"
                            placeholder="name@example.com" required value="{{ old('email') }}">
                        <label for="email">Email</label>
                        @error('email')
                            <div class="invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>

                    {{-- username --}}
                    <div class="form-floating">
                        <input type="text" name="username" class="form-control @error('username') is-invalid @enderror"
                            id="username" placeholder="username" required value="{{ old('username') }}">
                        <label for="username">Username</label>
                        @error('username')
                            <div class="invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>

                    {{-- password --}}
                    <div class="form-floating">
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                            id="password" placeholder="Password" required>
                        <label for="password">Password</label>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    {{-- pass confirm --}}
                    <div class="form-floating">
                        <input type="password" name="password_confirmation"
                            class="form-control @error('password') is-invalid @enderror" id="password"
                            placeholder="Password" required>
                        <label for="password">Confirm Password</label>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    {{-- address --}}
                    <div class="form-floating">
                        <input type="text" name="address" class="form-control @error('address') is-invalid @enderror"
                            id="address" placeholder="address" required value="{{ old('address') }}">
                        <label for="address">Address</label>
                        @error('address')
                            <div class="invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>

                    {{-- phone number --}}
                    <div class="form-floating">
                        <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" id="phone"
                            placeholder="08xxxxxxxxxxx" required value="{{ old('phone') }}">
                        <label for="phone">Phone Number</label>
                        @error('phone')
                            <div class="invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>

                    {{-- date --}}
                    <div class="form-floating">
                        <input type="date" name="dob" class="form-control  @error('dob') is-invalid @enderror" id="dob"
                            placeholder="Date of Birth" required value="{{ old('date') }}">
                        <label for="dob">Birth Date</label>
                        @error('dob')
                            <div class="invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>

                    {{-- image --}}
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input @error('image') is-invalid @enderror" id="image"
                                name="image" aria-describedby="image" value="{{ old('image') }}">
                            <label class="custom-file-label" for="image">Profile Picture</label>
                            @error('image')
                                <div class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>
                    </div>

        </div>

        <button class="w-100 btn btn-lg btn-primary mt-4 col-lg-7" type="submit">Sign up</button>
        </form>

        <small class="d-block text-center mt-3">Already Registered? <a href="/login">Login Now!</a></small>
        </main>
    </div>
    </div>
    <script>
        document.querySelector('.custom-file-input').addEventListener('change', function(e) {
            var name = document.getElementById("image").files[0].name;
            var nextSibling = e.target.nextElementSibling
            nextSibling.innerText = name
        })
    </script>
@endsection
