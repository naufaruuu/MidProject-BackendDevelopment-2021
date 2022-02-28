@extends('layouts.main')

@section('css')
    <!-- my css -->
    <link rel="stylesheet" href="assets/user.css">
@endsection

@section('container')
    <!-- container -->
    <div class="container content-box">

        <!-- upper -->
        <section class="testi">
            <div class="row justify-content-center">
                <div class="col-6 d-flex justify-content-center">
                    {{-- photo --}}
                    <figure class="figure">
                        @auth
                            @if (auth()->user()->image !== null)
                                <a href="images/{{ auth()->user()->image }}" target="_blank">
                                    <img src="images/{{ auth()->user()->image }}"
                                        class="figure-img img-fluid rounded-circle utama img-cropped mx-auto" alt="testi2">
                                </a>
                            @else
                                <a href="/changepic">
                                    <img src="assets/userpic.jpg" class="figure-img img-fluid rounded-circle utama"
                                        alt="testi2">
                                </a>
                            @endif
                        @endauth

                    </figure>
                    <figure class="figure">
                        <a href="/changepic">
                            <img src="assets/camera.png" class="figure-img img-fluid rounded-circle kedua" alt="testi3">
                        </a>
                    </figure>
                </div>
            </div>
            <h5>
                {{-- full name --}}
                @auth
                    {{ auth()->user()->name }}
                @endauth
            </h5>
            <p>
                {{-- username --}}
                @auth
                    #{{ auth()->user()->username }}
                @endauth
            </p>
        </section>

        <!-- bottom -->
        <div class="row justify-content-center">
            <div class="col-10 info-panel">
                <h3>User Profile</h3>
                <div class="row">
                    <div class="col-lg">
                        {{-- address --}}
                        <h4><br>Address</h4>
                        <p>
                            @auth
                                {{ auth()->user()->address }}
                            @endauth
                        </p>

                        {{-- phone --}}
                        <h4><br>Phone Number</h4>
                        <p>
                            @auth
                                {{ auth()->user()->phone }}
                            @endauth
                        </p>
                    </div>

                    <div class="col-lg">

                        {{-- email --}}
                        <h4><br>Email</h4>
                        <p>
                            @auth
                                {{ auth()->user()->email }}
                            @endauth
                        </p>

                        {{-- dob --}}
                        <h4><br>Date Of Birth</h4>
                        <p>
                            @auth
                                {{ auth()->user()->dob }}
                            @endauth
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- info panel end -->
    @endsection
