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
                                  <a class="nav-link btn-outline-primary rounded-pill text-light px-4 light-300" aria-current="page" href="/cooksnap">Cooksnap</a>
                                </li>
                                <li class="nav-item mx-lg-4">
                                    <a class="nav-link active btn-outline-primary rounded-pill text-light px-4 light-300" aria-current="page" href="/tips">Tips</a>
                                  </li>
                              </ul>
                            </div>
                            <div class="mediasi">
                                @foreach ($tips as $tip)
                                    @if ($tip->author_id == Auth::user()->id)
                                        <div class="asking">
                                            <div class="row">
                                                <div class="col-md-10 text-start">
                                                    <ul>
                                                        <li><a href="/cardtip/{{$tip->id}}" class="link"><h5>{{$tip->judul_tips}}</h5></a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-1">
                                                    <a class="btn btn-sm btn-primary bx bx-edit bx-sm" href="{{ url('tips/edit/'. $tip->id )}}"></a>
                                                </div>
                                                <div class="col-md-1">
                                                    <form action="{{ url('tips/hapus/'. $tip->id )}}" method="post">
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
                                        <div class="mediasi text-centre">
                                            <img src="//assets-global.cpcdn.com/assets/empty_states/no_tips-fd1ed0d1d8ed1f32e9ee40d6c15b52d51cdc98502f86ca75574102730e7023aa.svg" />
                                            <h5 class="card-title"><br>Belum ada tips</h5>
                                            <div class="mediatek">
                                                <a href="/tips/tulis" class="btn btn-primary ">Buat tips</a>
                                            </div>
                                        </div> --}}

                                <div class="skrtt">
                                    <a href="/tips/tulis" class="btn btn-primary ">Buat tips baru</a>
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