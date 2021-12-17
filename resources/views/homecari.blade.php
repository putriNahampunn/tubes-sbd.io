@extends('layout.templateuser')

@section('content')

<div class="container">

    <!-- Start of searching form -->
    <div class="row justify-content-center mb-3 mt-5">
        <div class="col-md-6">
            <div class="content-center mb-3">
                <i class="bi bi-search text-dark"></i>
                <span class="text-dark h4">CARI</span>
            </div>
            <form action="/homecari">
                <div class="input-group mb-1">
                    <input type="text" class="form-control" placeholder="Cari resep, tip, info lomba, dan bahan pilihan disini..." name="search">
                    <button type="submit" class="btn btn-primary">Cari</button>
                </div>
            </form>
        </div>
    </div>
    <!-- End of searching form -->

    <h5>Resep</h5>
    <section class="container overflow-hidden py-5">
        <div class="row gx-5 gx-sm-3 gx-lg-5 gy-lg-5 gy-3 pb-3 projects">
            <!-- Start Recent Work -->
            @foreach($recipes as $recipe)
            <div class="col-xl-3 col-md-4 col-sm-6 project ui graphic">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('storage/' . $recipe->gambar) }}"  alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{$recipe->judul_resep}}</h5>
                        <p class="card-text">{{$recipe->excerpt}}</p>
                        <a href="/cardresep/{{$recipe->id}}" class="btn btn-primary">Selengkapnya</a>
                    </div>
                </div>
            </div> 
            @endforeach
            <!-- End Recent Work -->
        </div>
    </section>

    <h5>Tips</h5>
    <section class="container overflow-hidden py-5">
        <div class="row gx-5 gx-sm-3 gx-lg-5 gy-lg-5 gy-3 pb-3 projects">
            <!-- Start Recent Work -->
            @foreach($tips as $tip)
                    <div class="col-xl-3 col-md-4 col-sm-6 project ui graphic">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="{{ asset('storage/' . $tip->gambar) }}"  alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">{{$tip->judul_tips}}</h5>
                                <a href="/cardtip/{{$tip->id}}" class="btn btn-primary">Baca</a>
                            </div>
                        </div>
                    </div> 
            @endforeach
            <!-- End Recent Work -->
        </div>
    </section>

    <h5>Bahan Pilihan</h5>
    <section class="container overflow-hidden py-5">
        <div class="row gx-5 gx-sm-3 gx-lg-5 gy-lg-5 gy-3 pb-3 projects">           
            <!-- Start Recent Work -->
            @foreach($bahanpilihans as $bahanpilihan)
                    <div class="col-xl-3 col-md-4 col-sm-6 project ui graphic">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="{{ asset('storage/' . $bahanpilihan->gambar) }}"  alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">{{$bahanpilihan->judul_bahanpilihan}}</h5>
                                <a href="/cardbahanpilihan/{{$bahanpilihan->id}}" class="btn btn-primary">Baca</a>
                            </div>
                        </div>
                    </div> 
            @endforeach
            <!-- End Recent Work -->
        </div>
    </section>
    

    

</div>
@endsection