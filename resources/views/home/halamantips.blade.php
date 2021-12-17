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
                                            <h4 class="media-heading text-center">{!!$tips->judul_tips!!}</h4>
                                            <div class="mediapad text-center">
                                                <img src="{{ asset('storage/' . $tips->gambar) }}" style="height: 200px; width:400px">
                                            </div>
                                            <p class="text-center">BY : {!!$tips->author->name!!} || EMAIL : {!!$tips->author->email!!}</p>
                                            <div class="post-author-count">
                                                <h5>Langkah-langkah</h5>
                                                <p>
                                                    {!!$tips->langkah_langkah_tips!!}
                                                </p>

                                                 <!-- 
                                                    SELECT tips.judul_tips, users.name, users.email, tips.gambar,
                                                    tips.langkah_langkah_tips FROM tips INNER JOIN users
                                                    ON tips.author_id = users.id WHERE tips.id = $id;
                                                 -->
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
                                        <div class="sike">
                                            <h2>Komentar</h2>
                                            <div class="post-author-count">
                                            <form method="post" action="{{ route('komentartips', $tips)}}" enctype="multipart/form-data">
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
                                                    <a class="btn btn-secondary" href="/cardtip" role="button">Back</a>&nbsp;&nbsp;&nbsp;&nbsp;
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
                                    @if($komentar->tip_id == $id)
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
                                    </div>
                                    <!-- 
                                            SELECT users.name, komentartips.komentar FROM komentartips 
                                                INNER JOIN tips 
                                                    ON komentartips.tips_id = tips.id 
                                                INNER JOIN users
                                                    ON komentartips.user_id = users.id
                                            WHERE tips.id = $id; 
                                         -->
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