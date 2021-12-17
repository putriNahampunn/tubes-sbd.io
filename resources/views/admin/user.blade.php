@extends('admin.sidebar')

@section('halaman')
<!-- Main Content -->
          <div class="section-body">
          <table class="table">
                <thead class="thead-dark">
                    <tr>
                      <th scope="col">id</th>
                      <th scope="col">Nama</th>
                      <th scope="col">Email</th>
                      <th scope="col">Password</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                      <th scope="row">{{$user->id}}</th>
                      <td>{{$user->name}}</td>
                      <td>{{$user->email}}</td>
                      <td>{{$user->password}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
          </div>
@endsection