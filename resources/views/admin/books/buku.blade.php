@extends('layouts.app')
@section('title', 'Meiwildan | Data Buku')
@section('content')
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
         
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header" style="background-color: #302b63">
                            <p style="color: white"><strong>Form Tambah</strong> Buku</p>
                        </div>
                        <div class="card-body card-block">
                            <div class="title-top mb-5">
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
                                <label>Masukkan Sinopsis</label>
                                <textarea  type="text" name="sinopsis" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Masukkan Foto</label>
                                <input type="file" name="file_path" class="form-control"> 
                            </div>
                            <div class="card-footer" style="background-color: #302b63">
                                <button type="submit" class="btn btn-success shadow-sm" >Tambah</button>
                                <a href="{{ route('books.index') }}" class="btn btn-danger shadow-sm">Kembali</a>
                            </div>
                            </form>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
