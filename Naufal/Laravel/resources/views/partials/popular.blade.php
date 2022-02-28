<!-- popular courses -->
<div class="card info-panel">
    <h3>Popular Courses:</h3>
    <div class="row justify-content-center testi">
        <div class="col-10 d-flex justify-content-center">

            {{-- silver/2nd --}}
            @foreach ($course->sortByDesc('enrolled')->take(2)->skip(1)
    as $co)
                <figure class="figure">
                    <img src="assets/silver-removebg-preview.png" class="figure-img img-fluid" alt="testi1">
                    <figcaption class="figure-caption">
                        <h5>
                            {{ $co->title }}
                        </h5>
                        <p>
                            {{ $co->enrolled }} Enrolled
                        </p>
                    </figcaption>
                </figure>
            @endforeach

            {{-- gold/first --}}
            @foreach ($course->sortByDesc('enrolled')->take(1) as $co)
                <figure class="figure">
                    <img src="assets/gold-removebg-preview.png" class="figure-img img-fluid utama" alt="testi2">
                    <figcaption class="figure-caption">
                        <h5>
                            {{ $co->title }}
                        </h5>
                        <p>
                            {{ $co->enrolled }} Enrolled
                        </p>
                    </figcaption>
                </figure>
            @endforeach

            {{-- bronze/3rd --}}
            @foreach ($course->sortByDesc('enrolled')->take(3)->skip(2)
    as $co)
                <figure class="figure">
                    <img src="assets/bronze-removebg-preview.png" class="figure-img img-fluid" alt="testi3">
                    <figcaption class="figure-caption">
                        <h5>
                            {{ $co->title }}
                        </h5>
                        <p>
                            {{ $co->enrolled }} Enrolled
                        </p>
                    </figcaption>
                </figure>
            @endforeach

        </div>
    </div>
</div>
