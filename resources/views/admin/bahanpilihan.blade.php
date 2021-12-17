@extends('admin.sidebar')

@section('halaman')
<!-- Main Content -->
<div class="section-body">
    <div class="skrtt">
        <a href="/bahanpilihan/tambah" class="btn btn-primary "><h6>Tambah Bahan</h6></a>
        <br><br>
    </div>
    <table class="table">
          <thead class="thead-dark">
              <tr>
                <th scope="col">id</th>
                <th scope="col">Gambar</th>
                <th scope="col">Judul Bahan</th>
                <th scope="col">Nama Penulis</th>
                <th scope="col">Penjelasan</th>
              </tr>
          </thead>
          <tbody>
                @foreach($bahanpilihans as $bahanpilihan)
                <tr>
                <th scope="row">{{$bahanpilihan->id}}</th>
                <td><img src="{{asset('storage/'. $bahanpilihan->gambar) }}" alt="" width="130" height="100"></td>
                <td>{{$bahanpilihan->judul_bahanpilihan}}</td>
                <td>{{$bahanpilihan->author->name}}</td>
                <td>{!!$bahanpilihan->deskripsi_bahanpilihan!!}</td>
                </tr>
                @endforeach
            </tbody>
    </table>
</div>
@endsection