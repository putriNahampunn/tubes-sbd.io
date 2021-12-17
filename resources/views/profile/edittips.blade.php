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
                                        <h2>Tulis Tips</h2>
                                      </div>
                            
                                      <div class="section-body">
                                      <form method="post" action="{{ url('tips/'. $tip->id )}}" enctype="multipart/form-data">   
                                        @method('patch')
                                        @csrf
                                            <div class="form">
                                                <input type="hidden" value="{{Auth::user()->id}}" class="form-control" id="author_id" name="author_id"><br>
                                            </div>
                                            <div class="form">
                                                <label for="judul_tips">Judul Tips</label>
                                                <br><br><br><input type="text" class="form-control @error('judul_tips') is-invalid @enderror" id="judul_tips" placeholder="Judul: Cara memotong bawang bombay" name="judul_tips" required autofocus value="{{ old('judul_tips',$tip->judul_tips) }}">
                                                @error('judul_tips')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                                <br><br>
                                            </div>
                                            <div class="form">
                                                <label for="langkah_langkah_tips">Langkah - Langkah</label>
                                                <br><br><br>
                                                <div class="text-start"><input id="langkah_langkah_tips" type="hidden" name="langkah_langkah_tips"  value="{{ old('langkah_langkah_tips',$tip->langkah_langkah_tips) }}">
                                                <trix-editor input="langkah_langkah_tips" placeholder="Mis: Untuk memotong bawang bombay, mulailah dengan membelah bawang jadi dua dari arah atas ke bawah..."></trix-editor></div>
                                                @error('langkah_langkah_tips')
                                                <p class="ayyo text-danger">
                                                    {{ $message }}
                                                </p>
                                                @enderror
                                                <br><br>
                                            </div>
                                            <div class="form mb-3">
                                                <label for="gambar" class="form-label">Gambar</label><br><br><br>
                                                <input class="form-control @error('gambar') is-invalid @enderror" type="file" id="gambar" name="gambar">
                                              @error('gambar')
                                              <p class="ayyo text-danger">
                                                {{ $message }}
                                                </p>
                                              @enderror
                                            </div>
                                              <br><br>
                                            <div class="button">
                                                <a class="btn btn-secondary" href="/tulis" role="button">Batal</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <button type="submit" class="btn btn-primary">Posting</button>
                                            </div>
                                     </form>
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