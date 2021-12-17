@extends('layout.templateuser')

@section('content')

<div class="banner-wrapper bg-light">
    <div id="index_banner" class="banner-vertical-center-index container-fluid pt-5">
        
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-md-8">
                    <article class="post-author">
                        
                        <div class="card text-center">
                            <div class="mediapad">
                                <div class="row justify-content-center">
                                    <div class="col-md-2 text-end">
                                        <img src="/uploaded/avatar/avatar.png" class="img-thumbnail rounded float-start" width="108" height="108">
                                    </div>
                                    <div class="col-md-5 text-start">
                                        <div class="sike">
                                            <h4 class="media-heading">{{Auth::user()->name}}</h4>
                                            <div class="post-author-count">
                                                <p>{{Auth::user()->email}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5 text-end">
                                        <a href="/profil/edit/{{Auth::user()->id}}"><i class='bx bx-edit bx-sm text-primary'></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card text-center">
                            <div class="service-tag py-2 bg-secondary rounded">
                              <ul class="nav d-flex justify-content-center">
                                <li class="nav-item mx-lg-4">
                                  <a class="nav-link btn-outline-primary rounded-pill text-light px-4 light-300" aria-current="page" href="/resep">Resep saya</a>
                                </li>
                                <li class="nav-item mx-lg-4">
                                  <a class="nav-link btn-outline-primary rounded-pill text-light px-4 light-300" aria-current="page" href="/cooksnap">Cooksnap</a>
                                </li>
                                <li class="nav-item mx-lg-4">
                                    <a class="nav-link btn-outline-primary rounded-pill text-light px-4 light-300" aria-current="page" href="/tips">Tips</a>
                                  </li>
                              </ul>
                            </div>
                            <div class="mediasi">
                                <img src="//assets-global.cpcdn.com/assets/empty_states/no_bookmarks-3d5c88bd5596ecc62d8d814690a914648f992603cc58f8b58134bfb190023db3.svg" />
                              <h5 class="card-title"><br>Simpan dan temukan resep dari pengguna favoritmu di sini.</h5>
                              <p class="card-text">Simpan resep dengan menandai simbol Cookmark pada halaman resep.</p>
                                <div class="mediatek">
                                    <a href="/home" class="btn btn-primary ">Mulai pencarian baru</a>
                                </div>
                            </div>
                          </div>
                    </article>
                </div>
            </div>
        </div>

    <section class="container overflow-hidden py-5">
        <div class="row gx-5 gx-sm-3 gx-lg-5 gy-lg-5 gy-3 pb-3 projects">
            
        </div>
    </section>
    
</div>
</div>
@endsection