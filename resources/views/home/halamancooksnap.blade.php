@extends('layout.templateuser')

@section('content')

<div class="banner-wrapper bg-light">
    <div id="ban" class="banner-vertical-center-index container-fluid pt-5">
        
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-md-10">
                    <article class="post-author">
                        
                        <div class="card text-center">
                            <div class="mediasi">
                                
                                <div class="main-content">
                                    <section class="section">
                                      <div class="main">
                                        <h2>CookSnap</h2>
                                      </div>
                            
                                      <div class="section-body">
                                        <div class="post-author-count">
                                        <form method="post" action="{{route('komentarcooksnap',$recipes )}}" enctype="multipart/form-data">   
                                        @method('patch')
                                        @csrf
                                            <div class="form mb-4">
                                                <label for="gambar" class="form-label">Gambar</label><br>
                                                <input class="form-control @error('gambar') is-invalid @enderror" type="file" id="gambar" name="gambar">
                                              @error('gambar')
                                              <p class="ayyo text-danger">
                                                {{ $message }}
                                                </p>
                                              @enderror
                                            </div>
                                            <div class="form mb-4">
                                                    <label for="komentar">Tambahkan Komentar</label><br>
                                                    <input type="text" class="form-control" id="komentar" name="komentar" value="{{old('komentar')}}">
                                                    @error('komentar')
                                                        <p class="ayyo text-danger">
                                                            {{ $message }}
                                                        </p>
                                                    @enderror
                                                </div>
                                              <br><br>
                                            <div class="button">
                                                <a class="btn btn-secondary" href="#" role="button">Batal</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <button type="submit" class="btn btn-primary" name="submit">Posting</button>
                                            </div>
                                     </form>
                                        </div>
                                      </div>
                                    </section>
                                  

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
<script>
    document.addEventListener('trix-file-accept', function(e) {
        e.preventDefault();
    })
</script>

@endsection