@extends('layouts.app')
@section('title', 'Meiwildan | Data bookss')
@section('content')
<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                     
                        <div class="row">
                            <div class="col-lg-12">
                            <div class="card">
                                    <div class="card-header">
                                        <strong>Form Edit</strong> Buku
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="{{ route('books.update', $books->id)}}" enctype="multipart/form-data" method="post" class="">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Judul Buku</label>
                                                <input type="text" name="judul_buku" class="form-control" value="{{ $books->judul_buku}}">
                                            </div>
                                            <div class="form-group">
                                                <label class=" form-control-label">jenis_buku</label>
                                                <input type="text" name="jenis_buku" class="form-control" value="{{ $books->jenis_buku}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="nf-password" class=" form-control-label">Pengarang</label>
                                                <input type="text" name="pengarang" class="form-control" value="{{ $books->pengarang}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="nf-password" class=" form-control-label">Tahun Terbit</label>
                                                <input type="text" name="tahun_terbit" class="form-control" value="{{ $books->tahun_terbit}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="nf-password" class=" form-control-label">Penerbit</label>
                                                <input type="text" name="penerbit" class="form-control" value="{{ $books->penerbit}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="nf-password" class=" form-control-label">Gambar Buku</label>
                                                <input type="file" name="file_path" class="form-control" {{ $books->file_path}}> 
                                            </div>
                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-primary btn-sm">
                                                    <i class="fa fa-dot-circle-o"></i> Ubah
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection