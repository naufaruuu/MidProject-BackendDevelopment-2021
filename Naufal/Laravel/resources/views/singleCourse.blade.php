@extends('layouts.main')

<title>Meta Learning | {{ $course->title }}</title>

@section('css')
    <!-- my css -->
    <link rel="stylesheet" href="assets/singleCourse.css">
@endsection

{{-- variable declaration --}}
@auth
    @php
    $index = 0;
    $index2 = 0;
    @endphp
@endauth

@section('container')
    {{-- enroll error alert --}}
    @if (session()->has('fail'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('fail') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            </button>
        </div>
    @endif

    {{-- enroll error alert --}}
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            </button>
        </div>
    @endif

    <article>

        {{-- title --}}
        <div class="container content-box mt-4" style="text-align: center;">
            <h2 class="mt-2"><strong>{{ $course->title }}</strong></h2>
        </div>

        {{-- image --}}
        <div class="container content-box mt-5 card-img-top">
            <img class="card-img-top" src="{{ $course->image }}" alt="..." />
        </div>

        {{-- progress bar --}}
        <div class="container content-box mt-4 ">
            @auth
                @php
                    $index = $course->number;
                    $index2 = $index;
                    // convert index 1 2 to a b //
                    include app_path() . '/function/converter.php';
                    $percent = ($session->$index * 100) / $course->sessions;
                @endphp
                @if ($enroll->$index >= 1)
                    <div class="progress position-relative " style="height: 30;">
                        <div class="progress-bar progress-bar-striped bg-info" role="progressbar"
                            style="width: {{ $percent }}%" aria-valuenow="{{ $percent }}" aria-valuemin="0"
                            aria-valuemax="100"></div>
                        <small class="justify-content-center d-flex position-absolute w-100 fs-5 "
                            style="color:black">{{ $percent }}% complete</small>
                    </div>
                @endif
            @endauth
        </div>

        {{-- progress, session, enroll --}}
        <div class="container content-box d-flex justify-content-center mt-4">

            @auth
                @php
                    $index = $course->number;
                    $index2 = $index;
                    // convert index 1 2 to a b //
                    include app_path() . '/function/converter.php';
                @endphp
                @if ($enroll->$index >= 1)
                    <a type="button" class="progress1" href="#details">
                        Your Progress: {{ $session->$index }}/{{ $course->sessions }}
                    </a>
                    <a>
                    </a>
                    <a type="button" class="add1" href="/addsession/{{ $index2 }}">
                        Progress +1
                    </a>
                @else
                    <a type="button" class="progress1" href="#details">
                        {{ $course->sessions }} Sessions
                    </a>
                    <a>
                    </a>

                    <a type="button" class="btn btn-outline-primary" href="/enroll/{{ $index2 }}">
                        Enroll
                    </a>
                @endif
            @else
                <a type="button" class="progress1" href="#details">
                    {{ $course->sessions }} Sessions
                </a>
                <a>
                </a>
                <a type="button" class="btn btn-outline-primary" href="/login">
                    Enroll
                </a>
            @endauth
        </div>

        {{-- description --}}
        <div class="container content-box mt-4" style="text-align: justify;">
            <h5>{{ $course->description }}</h5>
        </div>

        {{-- sessions details --}}
        <div class="container content-box mt-4" style="text-align: justify;" id="details">
            <h5><u>Sessions:</u></h5>
        </div>
        <div class="container content-box mt-3">
            <h5 style="white-space:pre-line; line-height:2em;">{{ $course->details }}</h5>
        </div>

        {{-- back --}}
        <div class="container content-box mt-5">
            <a href="/courses" class="next">&laquo; Back to Course</a>
        </div>
    </article>
@endsection
