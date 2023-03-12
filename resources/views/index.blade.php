@extends('layouts.main')

@section ('container')
    
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="mb-3" style="color:white">Halaman Beranda</h1>
                
            </div>
            @foreach ($books as $book )
            <div class="col-md-3 mt-4">
                <div class="card" style="width: 200; border-top: 4px solid #ffffff;
                border-left: 4px solid #ffffff;
                border-right: 4px solid #ffffff;">
                    <img src="{{ asset('uploads/' . $book->file_path) }}" height="425" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{ $book->judul_buku}}</h5>
                      <p class="card-text">{{ $book->pengarang}}</p>
                      <a href="{{ route('books.detail', $book->id)}}" class="btn btn-danger w-100" style="background-color: #302b63; border: 2px solid rgba(255, 255, 255, 0.247); margin-top: 10px;">Lihat Buku</a>
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