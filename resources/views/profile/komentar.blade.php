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
                                    <div class="col-md-2 text-end">
                                        <img src="//assets-global.cpcdn.com/assets/guest_user-9668e1190ab58cd58d666d5934e79c79da2e02f4421a6ed9abc4b163da97d6e7.png" class="img-thumbnail rounded float-start" width="108" height="108">
                                    </div>
                                    <div class="col-md-8 text-start">
                                        <div class="sike">
                                                <h4 class="media-heading">{{$aktivitas->author->name}}</h4>
                                            <div class="post-author-count">
                                                <br><p>{!!$aktivitas->pesan!!}</p>
                                            </div>
                                        </div>
                                        <form method="post" action="{{ route('postcomment', $aktivitas)}}" enctype="multipart/form-data">
                                            @method('patch')
                                            @csrf
                                            <div class="form-group">
                                                <label for="komentar">Tambahkan Komentar</label><br>
                                                <textarea name="komentar" id="komentar" cols="50" rows="1" placeholder="Masukkan komentar" required autofocus value="{{ old('komentar') }}"></textarea>
                                                @error('komentar')
                                                    <p class="ayyo text-danger">
                                                        {{ $message }}
                                                    </p>
                                                @enderror
                                            </div>
                                            <div class="button">
                                                <a class="btn btn-secondary" href="/aktivitas/user" role="button">Back</a>&nbsp;&nbsp;&nbsp;&nbsp;
                                                <button type="submit" class="btn btn-primary">Send</button>
                                            </div>
                                        </form>
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