@extends('layout.templateuser')

@section('content')

<div class="banner-wrapper bg-light">
    
    <div id="index_banner" class="banner-vertical-center-index container-fluid pt-5">
    
        <div class="container">
        @foreach($aktivitass as $aktivitas)
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <article class="post-author">
                        
                        <div class="card text-center">
                            <div class="mediapad">
                                <div class="row justify-content-right">
                                    <div class="col-md-2 text-end">
                                        <img src="//assets-global.cpcdn.com/assets/guest_user-9668e1190ab58cd58d666d5934e79c79da2e02f4421a6ed9abc4b163da97d6e7.png" class="img-thumbnail rounded float-start" width="108" height="108">
                                    </div>
                                    <div class="col-md-8 text-start">
                                        <div class="sike">
                                            <a href="/aktivitas/user/{{$aktivitas->id}}">
                                                <h4 class="media-heading">{{$aktivitas->author->name}}</h4>
                                            </a>
                                            <div class="post-author-count">
                                                <br><p>{!!$aktivitas->pesan!!}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
            @endforeach
        </div>
        
    <section class="container overflow-hidden py-5">
        <div class="row gx-5 gx-sm-3 gx-lg-5 gy-lg-5 gy-3 pb-3 projects">
        </div>
    </section>
    
</div>

</div>
@endsection