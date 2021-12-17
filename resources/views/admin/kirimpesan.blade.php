@extends('admin.sidebar')

@section('halaman')

<div class="content">
    <section class="section">
        <div class="section-body">
        <form method="post" action="{{url('aktivitas')}}" enctype="multipart/form-data">
        @method('patch')
        @csrf
            <div class="form">
                <input type="hidden" value="{{Auth::user()->id}}" class="form-control" id="author_id" name="author_id"><br>
            </div>
            <div class="form-group">
                <label for="pesan">Pesan</label><br>
                <input id="pesan" type="hidden" name="pesan"  value="{{ old('pesan') }}">
                        <trix-editor input="pesan" placeholder="masukkan pesan yang ingin disampaikan"></trix-editor>
                @error('pesan')
                    <p class="ayyo text-danger">
                        {{ $message }}
                    </p>
                @enderror
            </div>
            <div class="button">
                <a class="btn btn-secondary" href="/aktivitas" role="button">Batal</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <button type="submit" class="btn btn-primary">Posting</button>
            </div>
        </form>
        </div>
    </section>
</div>

@endsection