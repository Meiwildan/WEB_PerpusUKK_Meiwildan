<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;

class DashboardController extends Controller
{
    public function index()
    {
        $books = Buku::all();
        $title = 'home';
        return view('index', [
            'books' => $books,
            'title' => $title,
        ]);
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
