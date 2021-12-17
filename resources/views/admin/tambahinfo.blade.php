@extends('admin.sidebar')

@section('halaman')

<div class="content">
    <section class="section">
        <div class="section-body">
        <form method="post" action="{{url('infolomba')}}" enctype="multipart/form-data">
        @method('patch')
        @csrf
            <div class="form">
                <input type="hidden" value="{{Auth::user()->id}}" class="form-control" id="author_id" name="author_id"><br>
            </div>
            <div class="form-group">
                <label for="judul_lomba">Judul Lomba</label>
                <input type="text" class="form-control @error('judul_lomba') is-invalid @enderror" id="judul_lomba" placeholder="masukkan judul" name="judul_lomba" required autofocus value="{{ old('judul_lomba') }}">
                @error('judul_lomba')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="deskripsi_lomba">Deskripsi lomba</label><br>
                <div class="text-start">
                    <input id="deskripsi_lomba" type="hidden" name="deskripsi_lomba"  value="{{ old('deskripsi_lomba') }}">
                        <trix-editor input="deskripsi_lomba" placeholder="masukkan keterangan lomba"></trix-editor>
                </div>
                @error('deskripsi_lomba')
                    <p class="ayyo text-danger">
                        {{ $message }}
                    </p>
                @enderror
            </div>
            <div class="form mb-3">
                <label for="gambar" class="form-label">Gambar</label><br>
                <input class="form-control @error('gambar') is-invalid @enderror" type="file" id="gambar" name="gambar">
                @error('gambar')
                <p class="ayyo text-danger">
                {{ $message }}
                </p>
                @enderror
            </div>
            <div class="button">
                <a class="btn btn-secondary" href="/infolomba" role="button">Batal</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <button type="submit" class="btn btn-primary">Posting</button>
            </div>
        </form>
        </div>
    </section>
</div>

@endsection