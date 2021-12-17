@extends('layout.template')

@section('content')
<!-- Start Banner Hero -->
<div class="banner-wrapper bg-light">
        <div id="index_banner" class="banner-vertical-center-index container-fluid pt-5">

            <!-- Start slider -->
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
                    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
                    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"></li>
                    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">

                        <div class="py-5 row d-flex align-items-center">
                            <div class="banner-content col-lg-8 col-8 offset-2 m-lg-auto text-left py-5 pb-5">
                                <h1 class="banner-heading h1 text-secondary display-3 mb-0 pb-5 mx-0 px-0 light-300 typo-space-line">
                                Lomba Video Anak Masak Sunco Berhadiah 2.5 Juta
                              </h1>
                                <p class="banner-body text-muted py-3 mx-0 px-0">
                                Dalam rangka memperingati Hari Anak Nasional, kali ini ada info lomba video Masak untuk anak-anak yang diselenggarakan oleh SunCo.',    
                              </p>
                                <a class="banner-button btn rounded-pill btn-outline-primary btn-lg px-4" href="/register" role="button">Selengkapnya</a>
                            </div>
                        </div>

                    </div>
                    @foreach($infolombas as $infolomba)
                    <div class="carousel-item">

                        <div class="py-5 row d-flex align-items-center">
                            <div class="banner-content col-lg-8 col-8 offset-2 m-lg-auto text-left py-5 pb-5">
                                <h1 class="banner-heading h1 text-secondary display-3 mb-0 pb-3 mx-0 px-0 light-300">
                                   {{$infolomba->judul_lomba}}
                                </h1>
                                <p class="banner-body text-muted py-3">
                                    {{$infolomba->excerpt}}
                                </p>
                                <a class="banner-button btn rounded-pill btn-outline-primary btn-lg px-4" href="/login" role="button">Selengkapnya</a>
                            </div>
                        </div>

                    </div>
                    @endforeach
                </div>
                <a class="carousel-control-prev text-decoration-none" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
                    <i class='bx bx-chevron-left'></i>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next text-decoration-none" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
                    <i class='bx bx-chevron-right'></i>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>
            <!-- End slider -->

        </div>
    </div>
    <!-- End Banner Hero -->
<!-- Start Service -->
<section class="service-wrapper py-3">
        <div class="service-tag py-5 bg-secondary">
            <div class="col-md-12">
                <ul class="nav d-flex justify-content-center">
                    <li class="nav-item mx-lg-4">
                        <a class="nav-link btn-outline-primary active shadow rounded-pill text-light px-4 light-30" href="/cardresepindex">Resep</a>
                    </li>
                    <li class="nav-item mx-lg-4">
                        <a class="nav-link btn-outline-primary active shadow rounded-pill text-light px-4 light-30" href="/cardtipindex">Tips</a>
                    </li>
                    <li class="nav-item mx-lg-4">
                        <a class="nav-link btn-outline-primary active shadow rounded-pill text-light px-4 light-30" href="/cardbahanpilihanindex">Bahan Pilihan</a>
                    </li>
                </ul>
            </div>
        </div>

    </section>

    <section class="container overflow-hidden py-5">
        <div class="row gx-5 gx-sm-3 gx-lg-5 gy-lg-5 gy-3 pb-3 projects">

<!-- Start Recent Work -->

            @foreach($bahanpilihans as $bahanpilihan)
            <div class="col-xl-4 col-md-4 col-sm-6 project ui graphic">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('storage/' . $bahanpilihan->gambar) }}"  alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{$bahanpilihan->judul_bahanpilihan}}</h5>
                        <a href="/cardbahanpilihan/{{$bahanpilihan->id}}" class="btn btn-primary">Baca</a>
                    </div>
                </div>
            </div> 
            @endforeach
            <!-- End Recent Work -->
            </div>
    </section>
    <!-- End Service -->
@endsection