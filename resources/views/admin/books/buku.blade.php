@extends('layouts.app')
@section('title', 'Meiwildan | Data Buku')
@section('content')
<div class="container">
    <div class="title-top mb-5">
        <h2 class="fw-bold">Form Tambah Buku</h2>
    <form method="post" action="{{route('books.store')}}" enctype="multipart/form-data">
      {{csrf_field()}}
      <div class="form-group">
        <label>Masukkan Judul Buku</label>
        <input type="text" name="judul_buku" class="form-control"> 
    </div>
    <div class="form-group">
        <label>Masukkan Jenis Buku</label>
        <input type="text" name="jenis_buku" class="form-control"> 
    </div>
    <div class="form-group">
        <label>Masukkan Pengarang</label>
        <input type="text" name="pengarang" class="form-control"> 
    </div>
    <div class="form-group">
        <label>Masukkan Tahun Terbit</label>
        <input type="number" name="tahun_terbit" class="form-control"> 
    </div>
    <div class="form-group">
        <label>Masukkan Penerbit</label>
        <input type="text" name="penerbit" class="form-control"> 
    </div>
    <div class="form-group">
        <label>Masukkan Foto</label>
        <input type="file" name="file_path" class="form-control"> 
    </div>
    <br>  
      <button type="submit" class="btn btn-primary">Kirim</button>
    </form>
</div>

@endsection
