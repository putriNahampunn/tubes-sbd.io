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
                                  <a class="nav-link active btn-outline-primary rounded-pill text-light px-4 light-300" aria-current="page" href="/resep">Resep saya</a>
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
                                @foreach ($recipes as $recipe)
                                @if ($recipe->author_id == Auth::user()->id)
                                <div class="asking">
                                    <div class="row">
                                        <div class="col-md-10 text-start">
                                                <ul>
                                                    <li><a href="/cardresep/{{$recipe->id}}" class="link"><h5>{{$recipe->judul_resep}}</h5></a></li>
                                                </ul>
                                        </div>
                                        <div class="col-md-1">
                                            <a class="btn btn-sm btn-primary bx bx-edit bx-sm" href="{{ url('resep/edit/'. $recipe->id )}}"></a>
                                        </div>
                                        <div class="col-md-1">
                                            <form action="{{ url('resep/hapus/'. $recipe->id )}}" method="post">
                                            @method('delete')
                                            @csrf
                                            <button class="btn btn-sm btn-danger bx bx-trash bx-sm text-white" onclick="return confirm('Apakah anda yakin ?')"></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @endforeach

                                {{-- @else
                                    <div class="text-centre">
                                        <img src="//assets-global.cpcdn.com/assets/empty_states/no_bookmarks-3d5c88bd5596ecc62d8d814690a914648f992603cc58f8b58134bfb190023db3.svg" />
                                        <h5 class="card-title"><br>Belum ada resep yang dibuat</h5>
                                        <div class="mediatek">
                                            <a href="/resep/tulis" class="btn btn-primary ">Buat resep anda</a>
                                        </div>
                                    </div> --}}

                                <div class="skrtt">
                                    <a href="/resep/tulis" class="btn btn-primary ">Buat resep baru</a>
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