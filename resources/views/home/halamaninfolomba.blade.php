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
                                <div class="row justify-content-right">
                                    <div class="col-md-12 text-start">
                                        <div class="sike">
                                            <h4 class="media-heading text-center">{!!$infolombas->judul_lomba!!}</h4>
                                            <div class="mediapad text-center">
                                                <img src="{{ asset('storage/' . $infolombas->gambar) }}" style="height: 200px; width:400px">
                                            </div>
                                            <p class="text-center">BY : {!!$infolombas->author->name!!} || EMAIL : {!!$infolombas->author->email!!}</p>
                                            <div class="post-author-count">
                                                <p>{!!$infolombas->deskripsi_lomba!!}</p><br>
                                            </div>
                                            <!-- 
                                            SELECT infolombas.judul_lomba, infolombas.gambar, admins.name, admins.email, infolombas.deskripsi_lomba 
                                            FROM infolombas INNER JOIN admins
                                                    ON infolombas.author_id = admins.id
                                            WHERE infolombas.id = $id; 
                                         -->
                                        </div>
                                    </div>
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