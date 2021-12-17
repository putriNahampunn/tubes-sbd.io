@extends('admin.sidebar')

@section('halaman')
<!-- Main Content -->
<div class="section-body">
    <div class="skrtt">
            <a href="/aktivitas/tambah" class="btn btn-primary "><h6>Kirim Pesan</h6></a>
            <br><br>
    </div>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">id</th>
                <th scope="col">Nama Penulis</th>
                <th scope="col">Pesan</th>
            </tr>
        </thead>
        <tbody>
                @foreach($aktivitass as $aktivitas)
                <tr>
                <th scope="row">{{$aktivitas->id}}</th>
                <td>{{$aktivitas->author->name}}</td>
                <td>{!!$aktivitas->pesan!!}</td>
                </tr>
                @endforeach
            </tbody>
    </table>
</div>
@endsection