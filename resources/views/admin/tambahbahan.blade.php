@extends('admin.sidebar')

@section('halaman')

<div class="content">
    <section class="section">
        <div class="section-body">
        <form method="post" action="{{url('bahanpilihan')}}" enctype="multipart/form-data">
        @method('patch')
        @csrf
            <div class="form">
                    <input type="hidden" value="{{Auth::user()->id}}" class="form-control" id="author_id" name="author_id"><br>
            </div>
            <div class="form-group">
                <label for="judul_bahanpilihan">Judul Bahan</label>
                <input type="text" class="form-control @error('judul_bahanpilihan') is-invalid @enderror" id="judul_bahanpilihan" placeholder="masukkan judul" name="judul_bahanpilihan" required autofocus value="{{ old('judul_bahanpilihan') }}">
                @error('judul_bahanpilihan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="deskripsi_bahanpilihan">Deskripsi Bahan</label><br>
                <div class="text-start">
                    <input id="deskripsi_bahanpilihan" type="hidden" name="deskripsi_bahanpilihan"  value="{{ old('deskripsi_bahanpilihan') }}">
                        <trix-editor input="deskripsi_bahanpilihan" placeholder="masukkan deskripsi bahan pilihan"></trix-editor>
                </div>
                @error('deskripsi_bahanpilihan')
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
                <a class="btn btn-secondary" href="/bahanpilihan" role="button">Batal</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <button type="submit" class="btn btn-primary">Posting</button>
            </div>
        </form>
        </div>
    </section>
</div>

@endsection