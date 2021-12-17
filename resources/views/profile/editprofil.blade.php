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
                                      <div class="main">
                                        <h2>Update Akun</h2>
                                      </div>
                            
                                      <div class="section-body">
                                      <form method="post" action="{{url('profil/'.Auth::user()->id)}}" enctype="multipart/form-data">   
                                        @method('patch')
                                        @csrf
                                            <div class="form">
                                                <label for="name">Nama</label>
                                                <br><br><input type="text" value="{{Auth::user()->name}}" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Masukkan Nama Anda" name="name" required autofocus value="{{ old('name') }}">
                                                @error('name')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                                <br>
                                            </div>
                                            <div class="form">
                                                <label for="email">Email</label>
                                                <br><br><input type="text" value = "{{Auth::user()->email}}" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukkan Email Anda" name="email" required autofocus value="{{ old('email') }}">
                                                @error('email')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                                <br>
                                            </div>
                                            <div class="button">
                                                <a class="btn btn-secondary" href="/profil" role="button">Batal</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <button type="submit" class="btn btn-primary">Update</button>
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

@endsection