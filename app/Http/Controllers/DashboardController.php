<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $title = 'home';
            $books = Buku::where('judul_buku','LIKE','%'.$request->search.'%')
                                ->orWhere('pengarang', 'like', '%'.$request->search.'%')
                                ->orWhere('penerbit', 'like', '%'.$request->search.'%')->paginate(10);
                                
            Session::put('halaman_url',request()->fullUrl());
            // halaman_url manggil mana ya
        }else {
            $title = 'home';
            $books = Buku::paginate(10);
            Session::put('halaman_url',request()->fullUrl());
        }
        return view('index',compact('books', 'title'));
        
    }
    public function detailBuku()
    {
        $books = Buku::all();
        $title = Buku::all();
        return view('detailBuku', [
            'books' => $books,
            'title' => $title,
        ]);
    }
    
}
