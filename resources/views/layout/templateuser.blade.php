<!DOCTYPE html>
<html lang="en">

<head>
    <title>Mangaloppa</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.ico') }}">
    <!-- Load Require CSS -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font CSS -->
    <link href="{{ asset('assets/css/boxicon.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <!-- Load Tempalte CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/templatemo.css') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    <link rel="stylesheet" type="text/css" href="/css/trix.css">
    <script type="text/javascript" src="/js/trix.js"></script>
    <style>
        trix-toolbar [data-trix-button-group="file-tools"] {
            display: none
        }
    </style>
<!--
    
TemplateMo 561 Purple Buzz

https://templatemo.com/tm-561-purple-buzz

-->
</head>

<body>
    <!-- Header -->
        <nav id="main_nav" class="navbar navbar-expand-lg navbar-light bg-white shadow">
            <div class="container d-flex justify-content-between align-items-center">
                <a class="navbar-brand h1" href="index.html">
                    <i class='bx bx-buildings bx-sm text-dark'></i>
                    <span class="text-dark h4">MANGA</span> <span class="text-primary h4">LOPPA</span>
                </a>
                <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-toggler-success" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="navbar-toggler-success">
                    <div class="flex-fill mx-xl-5 mb-2">
                        <ul class="nav navbar-nav d-flex justify-content-between mx-xl-5 text-center text-dark">
                            <li class="nav-item">
                                <a class="nav-link btn-outline-primary rounded-pill px-3" href="/home">Beranda</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn-outline-primary rounded-pill px-3" href="/homecari">Cari</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn-outline-primary rounded-pill px-3" href="/tulis">Tulis Resep</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn-outline-primary rounded-pill px-3" href="/aktivitas/user">Aktivitas</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn-outline-primary rounded-pill px-3" href="/profil">Profil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn-outline-primary rounded-pill px-3" href="{{url('logout')}}">Logout</a>
                            </li>  
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    <!-- Close Header -->


    @yield('content')

    @include('layout.footer')


    <!-- Bootstrap -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!-- Load jQuery require for isotope -->
    <script src="assets/js/jquery.min.js"></script>
    <!-- Isotope -->
    <script src="assets/js/isotope.pkgd.js"></script>
    <!-- Page Script -->
    <script>
        $(window).load(function() {
            // init Isotope
            var $projects = $('.projects').isotope({
                itemSelector: '.project',
                layoutMode: 'fitRows'
            });
            $(".filter-btn").click(function() {
                var data_filter = $(this).attr("data-filter");
                $projects.isotope({
                    filter: data_filter
                });
                $(".filter-btn").removeClass("active");
                $(".filter-btn").removeClass("shadow");
                $(this).addClass("active");
                $(this).addClass("shadow");
                return false;
            });
        });
    </script>
    <!-- Templatemo -->
    <script src="assets/js/templatemo.js"></script>
    <!-- Custom -->
    <script src="assets/js/custom.js"></script>
    @include('sweetalert::alert')
    

</body>
</html>