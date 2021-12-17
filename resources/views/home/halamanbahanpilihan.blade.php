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
                                            <h4 class="media-heading text-center">{!!$bahanpilihans->judul_bahanpilihan!!}</h4>
                                            <div class="mediapad text-center">
                                                <img src="{{ asset('storage/' . $bahanpilihans->gambar) }}" style="height: 200px; width:400px">
                                            </div>
                                            <p class="text-center">BY : {!!$bahanpilihans->author->name!!} || EMAIL : {!!$bahanpilihans->author->email!!}</p>
                                            <div class="post-author-count">
                                                <p>{!!$bahanpilihans->deskripsi_bahanpilihan!!}</p><br>
                                            </div>
                                            <!-- 
                                                SELECT bahanpilihans.judul_bahanpilihan, bahanpilihans.gambar, admins.name, admins.email, 
                                                bahanpilihans.deskripsi_bahanpilihan FROM bahanpilihans 
                                                INNER JOIN admins 
                                                    ON bahanpilihans.author_id = admins.id
                                                WHERE id = $id
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