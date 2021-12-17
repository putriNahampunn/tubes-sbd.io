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
                                    <img src="//assets-global.cpcdn.com/assets/guest_user-9668e1190ab58cd58d666d5934e79c79da2e02f4421a6ed9abc4b163da97d6e7.png" class="img-thumbnail rounded float-start" width="108" height="108">
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
                                  <a class="nav-link active btn-outline-primary rounded-pill text-light px-4 light-300" aria-current="page" href="/cooksnap">Cooksnap</a>
                                </li>
                                <li class="nav-item mx-lg-4">
                                    <a class="nav-link btn-outline-primary rounded-pill text-light px-4 light-300" aria-current="page" href="/tips">Tips</a>
                                  </li>
                              </ul>
                            </div>
                            <div class="mediasi">
                            @foreach ($cooksnaps as $cooksnap)
                            @if($cooksnap->user_id == Auth::user()->id)
                                <div class="text-start">
                                    <div class="mediapad ">
                                        <p>{{$cooksnap->recipes['judul_resep']}} </p>
                                        <img src="{{ asset('storage/' . $cooksnap->gambar) }}" style="height: 100px; width:200px">
                                    </div>
                                </div>
                            {{--@else
                                <img src="//assets-global.cpcdn.com/assets/empty_states/no_cooksnaps-03e1a30ca5ed86a36caf4ffd588e9c1990cd1e81fbb97540135f45c5dbcad4dc.svg" />
                                <h5 class="card-title"><br>Yuk kirim Cooksnap!</h5>
                                <p class="card-text">Mengirim Cooksnap membantu mencatat perjalanan memasakmu dan membagikan pengalamanmu ke komunitas. Yuk jelajahi resep untuk menemukan inspirasi!</p>
                                <div class="mediatek">
                                    <a href="/home" class="btn btn-primary ">Temukan inspirasi resep</a>
                                </div>--}}
                            @endif
                            @endforeach
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