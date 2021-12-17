@extends('admin.sidebar')

@section('halaman')
<!-- Main Content -->
<div class="section-body">
    <table class="table" cellspacing="2">
            <thead class="thead-dark">
                <tr>
                <th scope="col">No</th>
                <th scope="col">User</th>
                <th scope="col">ID_Postingan Pesan</th>
                <th scope="col">Komentar</th>
                </tr>
            </thead>
            <tbody>
                @foreach($komentars as $komentar)
                <tr>
                <th scope="row">{{$komentar->id}}</th>
                <td>{{$komentar->user->name}}</td>
                <td>{{$komentar->aktivitas_id}}</td>
                <td>{{$komentar->komentar}}</td>
                </tr>
                @endforeach
            </tbody>
    </table>
</div>
@endsection