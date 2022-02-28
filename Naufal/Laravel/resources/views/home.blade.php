@extends('layouts.main')

@section('css')
    <!-- my css -->
    <link rel="stylesheet" href="assets/homeStyle.css">
@endsection

@section('container')
    <!-- container -->
    <div class="container content-box">
        <!-- name -->
        <div class="row name content-center">
            <div class="col content-center">
                @auth
                    @php
                        $col = 1;
                        $index = 0;
                    @endphp
                    <h2>Welcome Back, <span> {{ auth()->user()->name }}!</span></h2>
                @else
                    <h2>Welcome To Meta Learning!</h2>
                @endauth

            </div>
        </div>

        @auth
            {{-- enrolled --}}
            @include('partials.enrolled')
        @else
            {{-- profile --}}
            @include('partials.profile')
        @endauth
        {{-- popular --}}
        @include('partials.popular')


        <!-- why meta learning -->
        <div class="card info-panel">
            <h3>Why choose <span>Meta Learning</span> ?</h3>
            <div class="row reason-why">
                <div class="col-lg">
                    <p><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            style="fill: rgba(0, 183, 74, 1);transform: ;msFilter:;">
                            <path d="m10 15.586-3.293-3.293-1.414 1.414L10 18.414l9.707-9.707-1.414-1.414z"></path>
                        </svg> 4 year experience as IT teaching website </p>
                    <p><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            style="fill: rgba(0, 183, 74, 1);transform: ;msFilter:;">
                            <path d="m10 15.586-3.293-3.293-1.414 1.414L10 18.414l9.707-9.707-1.414-1.414z"></path>
                        </svg> Certified tutors with a lot of teaching experience </p>
                    <p><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            style="fill: rgba(0, 183, 74, 1);transform: ;msFilter:;">
                            <path d="m10 15.586-3.293-3.293-1.414 1.414L10 18.414l9.707-9.707-1.414-1.414z"></path>
                        </svg> Interactive in-class and self-learning experience
                    </p>
                    <p><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            style="fill: rgba(0, 183, 74, 1);transform: ;msFilter:;">
                            <path d="m10 15.586-3.293-3.293-1.414 1.414L10 18.414l9.707-9.707-1.414-1.414z"></path>
                        </svg> Affordable price and discounts for BINUS student</p>
                </div>
            </div>
        </div>
    @endsection
