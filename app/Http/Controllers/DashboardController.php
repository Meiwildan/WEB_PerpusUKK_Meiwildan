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
            $books = Buku::where('judul_buku','LIKE','%'.$request->search.'%')->paginate(10);
        }else {
            $title = 'home';
            $books = Buku::paginate(10);
        }
        return view('index',compact('books', 'title'));
        
    }
    public function detailBuku()
    {
        $books = Buku::all();
        $title = 'home';
        return view('detailBuku', [
            'books' => $books,
            'title' => $title,
        ]);
    }
    
}
