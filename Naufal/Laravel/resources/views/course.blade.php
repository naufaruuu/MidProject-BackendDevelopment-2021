@extends('layouts.main')

@section('css')
    <!-- my css -->
    <link rel="stylesheet" href="assets/CourseStyles2.css">
@endsection

@section('container')
    @auth
        @php
        $index = 0;
        @endphp
    @endauth
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-2 gx-lg-2 row-cols-1 row-cols-md-1 row-cols-xl-2 justify-content-center">
                @foreach ($course->sortBy('title') as $co)
                    <div class="col mb-5">
                        <div class="card h-100">

                            <!-- Top Left-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">
                                {{ $co->enrolled }} Enrolled!</div>
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; left: 0.5rem">
                                @auth
                                    @php
                                        $index = $co->number;
                                        // convert index 1 2 to a b //
                                        include app_path() . '/function/converter.php';
                                    @endphp
                                    @if ($enroll->$index >= 1)
                                        {{ $session->$index }}/{{ $co->sessions }} Completed
                                </div>
                            @else
                                {{ $co->sessions }} Sessions
                            </div>
                    @endif
                @else
                    {{ $co->sessions }} Sessions
                </div>
            @endauth

            <!-- Course Image-->
            <img class="card-img-top" src="{{ $co->image }}" alt="..." />
            <div class="card-body p-4">
                <div class="text-center">

                    <!-- Course Title-->
                    <h5 class="fw-bolder">{{ $co->title }}</h5>
                </div>
                <div style="text-align: justify;" class="mt-3">

                    <!-- Course Description-->
                    {{ $co->description }}
                </div>
            </div>
            
            <!-- Course actions-->
            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                <div class="text-center">
                    @auth
                        @php
                            $index = $co->number;
                            // convert index 1 2 to a b //
                            include app_path() . '/function/converter.php';
                        @endphp
                        @if ($enroll->$index >= 1)
                            <button type="button" class="btn btn-outline-dark" disabled>Already
                                Enrolled</button>
                        @endif
                        <a href="/details/{{ $co->id }}">
                            <button type="button" class="btn btn-info">Details</button>
                        </a>
                    @else
                        <a href="/details/{{ $co->id }}">
                            <button type="button" class="btn btn-info">Details</button>
                        </a>
                    @endauth

                </div>
            </div>
        </div>
        </div>
        @endforeach
        </div>
        </div>
    </section>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
@endsection
