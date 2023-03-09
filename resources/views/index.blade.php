@extends('layouts.main')

@section ('container')
    <h1 style="color:white">Halaman Beranda</h1>
    <div class="container">
        <div class="row">
            @foreach ($books as $book )
            <div class="col-md-3 mt-3">
                <div class="card" style="width: 200">
                    <img src="{{ asset('uploads/' . $book->file_path) }}" height="425" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{ $book->judul_buku}}</h5>
                      <p class="card-text">{{ $book->pengarang}}</p>
                      <a href="{{ route('books.detail', $book->id)}}"class="btn btn-primary">Lihat Buku</a>
                    </div>
                  </div>
               </div>
            @endforeach
        </div>
    </div>
           

           
    <div class="footer p-2 mt-3" >
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    
                </div>
                <div class="col-md-3">
                    
                </div>
                <div class="col-md-3">
                   
                </div>
            </div>
        </div>
    </div>
    @endsection