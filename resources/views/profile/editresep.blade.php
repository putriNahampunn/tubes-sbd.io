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
                                        <h2>Update Resep</h2>
                                      </div>
                            
                                      <div class="section-body">
                                      <form method="post" action="{{ url('resep/'. $recipe->id )}}" enctype="multipart/form-data">   
                                        @method('patch')
                                        @csrf
                                            <div class="form">
                                                <input type="hidden" value="{{Auth::user()->id}}" class="form-control" id="author_id" name="author_id"><br>
                                            </div>
                                            <div class="form">
                                                <label for="judul_resep">Judul Resep</label>
                                                <br><br><br><input type="text" class="form-control @error('judul_resep') is-invalid @enderror" id="judul_resep" placeholder="Judul: Sup Ayam Favorit Keluarga" name="judul_resep" required autofocus value="{{ old('judul_resep', $recipe->judul_resep) }}">
                                                @error('judul_resep')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                                <br><br>
                                            </div>
                                            <div class="form">
                                                <label for="deskripsi_resep">Deskripsi Resep</label>
                                                <br><br><br>
                                                <div class="text-start">
                                                    <input id="deskripsi_resep" type="hidden" name="deskripsi_resep"  value="{{ old('deskripsi_resep',$recipe->deskripsi_resep) }}">
                                                    <trix-editor input="deskripsi_resep" placeholder="Ceritakan asal resepmu ini -  siapa yang menginspirasimu, apa yang membuatnya unik dan istimewa, untuk siapa kamu memasaknya."></trix-editor>
                                                </div>
                                                @error('deskripsi_resep')
                                                <p class="ayyo text-danger">
                                                    {{ $message }}
                                                </p>
                                                @enderror
                                                <br><br>
                                            </div>
                                           
                                            <div class="form">
                                                <label for="porsi">Porsi</label>
                                                <br><br><br><input type="text" class="form-control @error('porsi') is-invalid @enderror" id="porsi" placeholder="2 orang" name="porsi" required autofocus value="{{ old('porsi',$recipe->porsi) }}">
                                                @error('porsi')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                                <br><br>
                                            </div>
                                            <div class="form">
                                                <label for="lama_memasak">Lama Memasak</label>
                                                <br><br><br><input type="text" class="form-control @error('lama_memasak') is-invalid @enderror" id="lama_memasak" placeholder="1 jam 30 menit" name="lama_memasak" required autofocus value="{{ old('lama_memasak',$recipe->lama_memasak) }}">
                                                @error('lama_memasak')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                                <br><br>
                                            </div>
                                            <div class="form">
                                                <label for="bahan_bahan">Bahan-Bahan</label>
                                                <br><br><br> 
                                                <div class="text-start"><input id="bahan_bahan" type="hidden" name="bahan_bahan" value="{{ old('bahan_bahan',$recipe->bahan_bahan) }}">
                                                <trix-editor input="bahan_bahan" placeholder="1/2 ekor ayam"></trix-editor></div>
                                                @error('bahan_bahan')
                                                <p class="ayyo text-danger">
                                                    {{ $message }}
                                                </p>
                                                @enderror
                                                <br><br>
                                            </div>
                                            <div class="form">
                                                <label for="langkah_langkah">Langkah-Langkah</label>
                                                <br><br><br>
                                                <div class="text-start"><input id="langkah_langkah" type="hidden" name="langkah_langkah" value="{{ old('langkah_langkah',$recipe->langkah_langkah) }}">
                                                <trix-editor input="langkah_langkah" placeholder="Potong ayam menjadi beberapa bagian, sisihkan."></trix-editor></div>
                                                @error('langkah_langkah')
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
                                                <button type="submit" class="btn btn-primary" name="submit">Posting</button>
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