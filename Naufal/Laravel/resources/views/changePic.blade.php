@extends('layouts.main')

@section('css')
    <!-- my css -->
    <link rel="stylesheet" href="assets/changePic.css">
@endsection

@section('container')
    <!-- container -->
    <div class="container content-box">

        {{-- change error alert --}}
        @if (session()->has('fail'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('fail') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                </button>
            </div>
        @endif

        {{-- change success alert --}}
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                </button>
            </div>
        @endif

        <section class="testi">
            <div class="row justify-content-center">
                <div class="col-6 d-flex justify-content-center">

                    {{-- view photo --}}
                    <figure class="figure">
                        @auth
                            @if (auth()->user()->image !== null)
                                <a href="images/{{ auth()->user()->image }}" target="_blank">
                                    <img src="images/{{ auth()->user()->image }} "
                                        class="figure-img img-fluid rounded-circle utama" alt="testi2">
                                </a>
                            @else
                                <a href="#">
                                    <img src="assets/userpic.jpg" class="figure-img img-fluid rounded-circle utama"
                                        alt="testi2">
                                </a>
                            @endif
                        @endauth
                    </figure>

                </div>
            </div>
            <h1 class="h3 mb-3 fw-normal text-center mb-4">Change Profile Picture</h1>
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <main class="form-registration">

                        <form action="/changepic" method="POST" enctype="multipart/form-data">
                            @csrf
                            {{-- image --}}
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input @error('image') is-invalid @enderror"
                                        id="image" name="image" aria-describedby="image" value="{{ old('image') }}">
                                    <label class="custom-file-label" for="image">Insert new file</label>
                                    @error('image')
                                        <div class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                    @enderror
                                </div>
                            </div>

                </div>

                <button class="w-100 btn btn-lg btn-primary mt-3 col-lg-7" type="submit">Submit</button>
                </form>

                <div class="container content-box mt-4" style="text-align: center;">
                    <a href="/changepic/remove">
                        <button class="w-100 btn btn-outline-danger mt-5 col-lg-7 "
                            style="text-align: center; width: 5px">Remove</button>
                    </a>
                </div>


                </main>
            </div>

            <script>
                document.querySelector('.custom-file-input').addEventListener('change', function(e) {
                    var name = document.getElementById("image").files[0].name;
                    var nextSibling = e.target.nextElementSibling
                    nextSibling.innerText = name
                })
            </script>
        @endsection
