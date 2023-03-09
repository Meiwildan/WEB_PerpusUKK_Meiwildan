@extends('layouts.app')
@section('title', 'Meiwildan | Data bukus')
@section('content')
<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        
                        <div class="row">
                           
                            <div class="col-md-12">
                                <form class="form-inline" action="{{ route('books.index') }}" method="GET ">
                                    <div class="form-group mb-3">
                                      <input type="search" name="search" class="form-control" placeholder="Search" aria-describedby="password">
                                    </div>
                                    
                                  </form>
                                    <h2 class="title-1">List Data Buku</h2>
                                    <div class="d-flex flex-row-reverse ">
                                        <a href="exportpdf" type="button" class="btn btn-danger ml-3">Export PDF</a>

                                    <a href="exportexcel" type="button" class="btn btn-success">Export Excel</a>
                                    </div>
                                    
                                
                                
                                
                            </div>
                        </div>
                        <div class="row m-t-30">
                            <div class="col-md-12">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3" >
                                        <thead>
                                            <tr style="background-color:#2193b0">
                                                <th>No</th>
                                                <th nowrap>Judul Buku</th>
                                                <th npwrap>Jenis Buku</th>
                                                <th>Pengarang</th>
                                                <th nowrap>Tahun Terbit</th>
                                                <th>Penerbit</th>
                                                <th nowrap>Cover Buku</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($books as $index => $buku)
                                            <tr>
                                                <td> {{ $index + 1}}</td>
                                                <td> {{ $buku->judul_buku}}</td>
                                                <td> {{ $buku->jenis_buku}}</td>
                                                <td> {{ $buku->pengarang}}</td>
                                                <td> {{ $buku->tahun_terbit}}</td>
                                                <td> {{ $buku->penerbit}}</td>
                                                <td><img src="{{ asset('uploads/' . $buku->file_path) }}" width="80"></td>
                                                <td>
                                                    <a href="{{ route('books.edit', $buku->id)}}"><i class="fas fa-edit"></i></a>
                                                    |
                                                    <a href="{{ route('books.destroy', $buku->id)}}"><i class="fas fa-trash" style="color:red"></i></a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    {{ $books->links() }}
                                </div>
                                <!-- END DATA TABLE-->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection