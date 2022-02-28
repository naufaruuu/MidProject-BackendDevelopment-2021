@extends('layouts.main')

@section('css')
    <!-- my css -->
    <link rel="stylesheet" href="assets/aboutStyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection

@section('jumbotron')
    <!-- jumbotron -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <br><br><br><br><br><br><br>
            <h1 class="display-4">Learn programming <span>faster</span><br> and <span>better</span> with us.</h1>
            <br>
        </div>
    </div>
@endsection

@section('container')
    <div class="container">
        <!-- features -->
        <div class="row justify-content-center">
            <div class="col-10 info-panel">
                <h3><span>Meta Learning</span> Provides:</h3>
                <div class="row">
                    <div class="col-lg">
                        <img src="assets/employee.png" alt="employee" class="float-start">
                        <h4><br>Tutoring</h4>
                        <p>Online tutoring class with various tech-related courses.</p>
                    </div>
                    <div class="col-lg">
                        <img src="assets/hires.png" alt="hires" class="float-start">
                        <h4><br>E-books</h4>
                        <p>Useful E-books for your tech skill development.</p>
                    </div>
                    <div class="col-lg">
                        <img src="assets/security.png" alt="security" class="float-start">
                        <h4><br>Consulting</h4>
                        <p>Got stuck? No worries! Our tutors were ready to help.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- about web -->
        <div class="container">
            <div class="row">
                <div class="col-lg-6 workingspace">
                    <img src="assets/jasa-website-munjhu.jpg" alt="workingspaceimg" class="img-fluid">
                </div>
                <div class="col-lg-5 teks" style="text-align: justify;">
                    <h4>About this<br><span>Website</h4>
                    <p>This web is a BNCC LnT Web Mid project of Naufal and Vincent (NauVin) , With Naufal working in the
                        back-end development and Vincent in the front-end development. With this website project , NauVin
                        hopes that they could improve more and more in web development.</p>
                </div>
            </div>
        </div>

        <!-- testi -->
        <section class="testi">
            <div class="row justify-content-center quote">
                <div class="col-8">
                    <h5>"Suka banget sama tutoringnya, asik banget. Apalagi tutornya yang namanya kak Vincent ganteng
                        banget. Dia yang buat Frond-End nya loh! Kalau kak Naufal sih, dia cool banget. Dia yang buat
                        Back-End nya loh!"</h5>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-6 d-flex justify-content-center">
                    <figure class="figure">
                        <img src="assets/img1.png" class="figure-img img-fluid rounded-circle" alt="testi1">
                    </figure>
                    <figure class="figure">
                        <img src="assets/jeni.jpeg" class="figure-img img-fluid rounded-circle utama" alt="testi2">
                        <figcaption class="figure-caption">
                            <h5>
                                Jennie Kim
                            </h5>
                            <p>
                                Mahasiswa
                            </p>
                        </figcaption>
                    </figure>
                    <figure class="figure">
                        <img src="assets/img3.png" class="figure-img img-fluid rounded-circle" alt="testi3">
                    </figure>
                </div>
            </div>
        </section>

        <!-- Team-->
        <div class="container justify-content-center">
            <div class="text-center justify-content-center">
                <h1 class="section-heading text-uppercase mt-5">Our Amazing Team</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 mt-5">

                    {{-- naufal --}}
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="assets/naufal.jpg" alt="..." />
                        <h4>Naufal</h4>
                        <p class="text-muted">Back-End Developer</p>
                        <a class="btn btn-dark btn-social mx-2"
                            href="https://www.linkedin.com/in/ahmad-naufal-abdurrohman-alfadli-84a824190/"
                            target="_blank"><i class="fa fa-linkedin-square" style="font-size:24px"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/naufalalfa_/"
                            target="_blank"><i class="fa fa-instagram" style="font-size:24px"></i></a>
                    </div>
                </div>

                {{-- vincent --}}
                <div class="col-lg-4 mt-5">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="assets/vincent.jpg" alt="..." />
                        <h4>Vincent</h4>
                        <p class="text-muted">Front-End Developer</p>

                        <a class="btn btn-dark btn-social mx-2" href="https://www.linkedin.com/in/vin-chen-844a00222/"
                            target="_blank"><i class="fa fa-linkedin-square" style="font-size:24px"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/vinchen_amigo/"
                            target="_blank"><i class="fa fa-instagram" style="font-size:24px"></i></i></a>
                    </div>
                </div>
            </div>

        </div>
    @endsection
