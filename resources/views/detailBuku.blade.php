@extends('layouts.main')

@section ('container')
    
<div class="container">
    <div class="row">
        <div class="col-md-4 mt-4">
            <img src="{{ asset('uploads/' . $books->file_path) }}" width="390" alt="...">
        </div>
        <div class="col-md-8 mt-4">
            <h5 style="color: whitesmoke"><strong>Judul Buku :</strong> {{ $books->judul_buku}}</h5>
            <h5 style="color: whitesmoke"><strong>Jenis Buku :</strong> {{ $books->jenis_buku}}</h5>
            <h5 style="color: whitesmoke"><strong>Pengarang :</strong> {{ $books->pengarang}}</h5>
            <h5 style="color: whitesmoke"><strong>Tahun Terbit:</strong> {{ $books->tahun_terbit}}</h5>
            <h5 style="color: whitesmoke"><strong>Penerbit :</strong> {{ $books->penerbit}}</h5>
            <a href="/" type="button" class="btn btn-danger">Kembali</a>
        </div>
    </div>

</div>

@endsection