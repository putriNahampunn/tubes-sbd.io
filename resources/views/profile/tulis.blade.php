@extends('layout.templateuser')

@section('content')

<div class="banner-wrapper bg-light">
    <div id="index_banner" class="banner-vertical-center-index container-fluid pt-5">
        
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-md-5">
                    <article class="post-author">
                        
                        <div class="card text-center">
                            <div class="mediasi">
                                
                                <div class="main-content">
                                    <section class="section">
                                        <div class="med">
                                            <img src="https://assets-global.cpcdn.com/assets/empty_states/no_recipes-17207357d165f4f1da68619d8033eed4abec11385b76e2d53efe02fd06384737.svg" />
                                        <h5 class="card-title"><br>Buat baru</h5>
                                        <p class="card-text"> Bagikan inspirasi masak bagi pengguna lainnya</p>
                                            <div class="meds">
                                                <a class="btn btn-primary" href="/resep/tulis" role="button">Resep</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <a class="btn btn-primary" href="/tips/tulis" role="button">Tips</a>
                                            </div>
                                        </div>
                                    </section>
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