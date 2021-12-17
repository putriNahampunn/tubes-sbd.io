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
                                            <h4 class="media-heading text-center">{!!$recipes->judul_resep!!}</h4>
                                            <div class="mediapad text-center">
                                                <img src="{{ asset('storage/' . $recipes->gambar) }}" style="height: 200px; width:400px">
                                            </div>
                                            <p class="text-center">BY : {!!$recipes->author->name!!} || EMAIL : {!!$recipes->author->email!!}</p>
                                            <div class="post-author-count">
                                                <p>{!!$recipes->deskripsi_resep!!}</p><br>
                                                <h5>Bahan-bahan</h5>
                                                <p>
                                                    {!!$recipes->bahan_bahan!!}
                                                </p>
                                                <h5>Porsi</h5>
                                                <p>
                                                    {!!$recipes->porsi!!}
                                                </p><br>
                                                <h5>Lama Memasak</h5>
                                                <p>
                                                    {!!$recipes->lama_memasak!!}
                                                </p><br>
                                                <h5>Langkah-langkah</h5>
                                                <p>
                                                    {!!$recipes->langkah_langkah!!}
                                                </p>

                                                <!-- 
                                                    SELECT recipes.judul_resep, recipes.gambar, users.name, users.email, recipes.deskripsi_resep, recipes.bahan_bahan,
                                                            recipes.porsi, recipes.lama_memasak, recipes.langkah_langkah FROM recipes 
                                                    INNER JOIN users
                                                        ON recipes.author_id = users.id
                                                    WHERE recipes.id = $id;
                                                 -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="card text-center">
                            <div class="mediasi">
                                
                                <div class="main-content">
                                    <section class="section">
                                        <div class="med">
                                            <img src="https://assets-global.cpcdn.com/assets/empty_states/no_cooksnaps-03e1a30ca5ed86a36caf4ffd588e9c1990cd1e81fbb97540135f45c5dbcad4dc.svg" />
                                        <h5 class="card-title"><br>CookSnap</h5>
                                        <p class="card-text"> Bagikan Cooksnapmu dengan penulis!</p>
                                            <div class="meds">
                                                <a class="btn btn-primary" href="/cooksnap/tulis/{{$recipes->id}}" role="button">Upload Cooksnap</a>
                                            </div>
                                        </div>
                                    </section>
                                </div>

                            </div>
                          </div>
                        <br>
                        <div class="card text-center">
                            <div class="mediapad">
                                <div class="row justify-content-right">
                                    <div class="col-md-12 text-start">
                                    @foreach($cooksnaps as $cooksnap)
                                    @if($cooksnap->recipe_id == $id)
                                        <div class="sike">
                                        <h6>Cooksnap By :{{$cooksnap->user['name']}}</h6>
                                            <div class="post-author-count">
                                                <div class="mediapad text-center">
                                                    <img src="{{ asset('storage/' . $cooksnap->gambar) }}" style="height: 200px; width:400px">
                                                    <p>
                                                        {{$cooksnap->komentar}}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                        @endforeach

                                        <!-- 
                                            SELECT  users.name, cooksnaps.gambar, cooksnaps.komentar FROM cooksnaps 
                                                INNER JOIN recipes 
                                                    ON cooksnaps.recipe_id = recipes.id 
                                                INNER JOIN users
                                                    ON cooksnaps.user_id = users.id
                                            WHERE recipe.id = $id; 
                                         -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="card text-center">
                            <div class="mediapad">
                                <div class="row justify-content-right">
                                    <div class="col-md-12 text-start">
                                        <div class="sike">
                                            <h2>Komentar</h2>
                                            <div class="post-author-count">
                                            <form method="post" action="{{ route('komentarresep', $recipes)}}" enctype="multipart/form-data">
                                                @method('patch')
                                                @csrf
                                                <div class="form-group">
                                                    <label for="komentar">Tambahkan Komentar</label><br>
                                                    <input type="text" class="form-control" id="komentar" name="komentar" value="{{old('komentar')}}">
                                                    @error('komentar')
                                                        <p class="ayyo text-danger">
                                                            {{ $message }}
                                                        </p>
                                                    @enderror
                                                </div>
                                                <div class="button">
                                                    <a class="btn btn-secondary" href="/cardresep" role="button">Back</a>&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <button type="submit" class="btn-sm btn-primary">Send</button>
                                                </div>
                                             </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="card text-center">
                            <div class="mediapad">
                                <div class="row justify-content-right">
                                    <div class="col-md-12 text-start">
                                    @foreach($komentars as $komentar)
                                    @if($komentar->recipe_id == $id)
                                        <div class="sike">
                                        <h6>{{$komentar->user['name']}}</h6>
                                            <div class="post-author-count">
                                                <p>
                                                    {{$komentar->komentar}}
                                                </p>
                                            </div>
                                        </div>
                                        @endif
                                        @endforeach

                                        <!-- 
                                            SELECT users.name, komentarreseps.komentar FROM komentarreseps 
                                                INNER JOIN recipes 
                                                    ON komentarreseps.recipe_id = recipes.id 
                                                INNER JOIN users
                                                    ON komentarreseps.user_id = users.id
                                            WHERE recipes.id = $id; 
                                         -->
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