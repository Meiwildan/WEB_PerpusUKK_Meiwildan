<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Buku extends Model
{
    use HasFactory;
    protected $table = 'books';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'judul_buku', 'jenis_buku', 'pengarang', 'tahun_terbit', 'penerbit', 'sinopsis', 'file_path', 'created_at', 'updated_at'];

    public function detailBuku($id)
    {
        return DB::table('books')->where('id', $id)->first();
    }
}

