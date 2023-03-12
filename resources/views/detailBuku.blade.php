@extends('layouts.main')

@section ('container')
    
{{-- <div class="container">
    <div class="row">
        <div class="col-md-4 mt-4">
            <img src="{{ asset('uploads/' . $books->file_path) }}" width="390" alt="...">
        </div>
        <div class="col-md-8 mt-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title label"><strong>Judul Buku :</strong> {{ $books->judul_buku}}</h5>
            <h5 class="label"><strong>Jenis Buku :</strong> {{ $books->jenis_buku}}</h5>
            <h5><strong>Pengarang :</strong> {{ $books->pengarang}}</h5>
            <h5><strong>Tahun Terbit:</strong> {{ $books->tahun_terbit}}</h5>
            <h5><strong>Penerbit :</strong> {{ $books->penerbit}}</h5>
            <a href="/" type="button" class="btn btn-danger">Kembali</a>
                </div>
            </div>
            
        </div>
    </div>

</div> --}}

<div class="container mt-4">
    <style>
           .label {
               display: inline-block;
               width: 80px;
               font-weight: bold;
               margin-right: 5px;
           }
       </style>
  
    <div class="row">
           <div class="col-md-4 mt-3">
             <img src="{{ asset('uploads/'.$books->file_path)}}" alt="" style="width: 100%; height: auto;">
           </div>
           <div class="col-md-8 mt-3">
            <div class="card">
                <div class="card-body text-secondary">
                    <h2 class="card-title mb-5" style="color:#302b63; font-weight: bold;" >{{$books->judul_buku}}</h2>
                    <div style="margin-top: 10px; margin-bottom: 10px;">
                       <h7 class="card-text label" style="margin-right: 24px;">Kategori</h7>
                       <h7 class="card-text" style="margin-left: -10px;">: {{$books->jenis_buku}}</h7>
                   </div>
                    <div style="margin-top: 10px; margin-bottom: 10px;">
                       <h7 class="card-text label" style="margin-right: 24px;">Penulis</h7>
                       <h7 class="card-text" style="margin-left: -10px;">: {{$books->pengarang}}</h7>
                   </div>
                   <div style="margin-top: 10px; margin-bottom: 10px;">
                       <h7 class="card-text label" style="margin-right: 24px;">Penerbit</h7>
                       <h7 class="card-text" style="margin-left: -10px;">: {{$books->penerbit}}</h7>
                   </div>
                   <div style="margin-top: 10px; margin-bottom: 10px;">
                       <h7 class="card-text label" style="margin-right: 24px;">Terbit</h7>
                       <h7 class="card-text" style="margin-left: -10px;">: {{$books->tahun_terbit}}</h7>                       
                   </div> 
                   <div style="margin-top: 10px; margin-bottom: 10px;">
                       <h7 class="card-text label" style="margin-right: 24px;">Sinopsis</h7>
                       <h7 class="card-text" style="margin-left: -10px;">: {{$books->sinopsis}}</h7>                       
                   </div> 
                   <a href = '\' class="btn btn-danger w-100" style="background-color: red; border: 2px solid rgba(255, 255, 255, 0.247); margin-top: 80px;">Kembali</a>

                </div>
            </div>
                  
              </div>           
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