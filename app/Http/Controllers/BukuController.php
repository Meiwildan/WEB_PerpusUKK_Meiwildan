<?php

namespace App\Http\Controllers;

use App\Exports\BookExport;
use App\Models\Buku;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Facades\Excel;
use PDF;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->has('search')) 
        {
        $books = Buku::where('judul_buku', 'LIKE', '%' .$request->search. '%')->paginate(4);
        }
        else
        {
        $books = Buku::paginate(4);  
        }

        return view('admin/books/indexBuku', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.books.buku');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'judul_buku' => 'required',
            'jenis_buku' => 'required',
            'pengarang' => 'required',
            'tahun_terbit' => 'required|max:4',
            'penerbit' => 'required',
            'file_path' => 'required',
        ]);

        if (!empty($request->file('file_path'))) {
            $books = $request->all();
            $books['file_path'] = $request->file('file_path')->store('books');

            Buku::create($books);

            return redirect()->route('books.index')->with('success', 'Buku Berhasil di Tambah!');
        } else{
            $books = $request->all();
            Buku::create($books);

            return redirect()->route('books.index')->with('success', 'Buku Berhasil di Tambah!');
        }

        // if ($request->hasFile('file')) {

        //     $request->validate([
        //         'image' => 'mimes:jpeg,bmp,png,jfif,jpg'
        //     ]);

        //     $request->file('file_path')->move('fotoBuku/', $request->file('file_path')->getClientOriginalName());

        //     $books = Buku::create([
        //         "judul_buku" => $request->get('judul_buku'),
        //         "jenis_buku" => $request->get('jenis_buku'),
        //         "pengarang" => $request->get('pengarang'),
        //         "tahun_terbit" => $request->get('tahun_terbit'),
        //         "penerbit" => $request->get('penerbit'),
        //         "file_path" => $request->file->hashName()
        //     ]);
        //     $books->file_path = $request->file('file_path')->getClientOriginalName();
        //     $books->save(); // Finally, save the record.
        // }

        // // $books = Buku::create($request->all());
        // // $books->save();
        // return redirect()->route('books.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $books = Buku::findOrFail($id);
        return view('admin.books.editBuku', compact('books'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (empty($request->file('file_path'))) {

            $books = Buku::find($id);
            $books->update([
                'judul_buku' => $request->judul_buku,
                'jenis_buku' => $request->jenis_buku,
                'pengarang' => $request->pengarang,
                'tahun_terbit' => $request->tahun_terbit,
                'penerbit' => $request->penerbit,
            ]);
            return redirect()->route('books.index')->with('success', 'Buku Berhasil di Ubah!');
        } else {
            
            $books = Buku::find($id);
            Storage::delete($books->file_path);
            $books->update([
                'judul_buku' => $request->judul_buku,
                'jenis_buku' => $request->jenis_buku,
                'pengarang' => $request->pengarang,
                'tahun_terbit' => $request->tahun_terbit,
                'penerbit' => $request->penerbit,
                'file_path' => $request->file('file_path')->store('books'),
            ]);
            return redirect()->route('books.index')->with('success', 'Buku Berhasil di Ubah!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $books = Buku::findOrFail($id);
        $books->delete();

        return redirect()->route('books.index')->with('success', 'Buku Berhasil di Hapus!');
    }

    public function exportpdf()
    {
        $books= Buku::all();

        view()->share('books', $books);
        $pdf = PDF::loadview('bukuPDF');
        return $pdf->download('DataBuku.pdf');
    }
    
    public function detail($id)
    {
        $books = Buku::where('id', $id)->first();
        $title = Buku::all();
        return view('detailBuku', [
            'books' => $books,
            'title' => $title
        ]);
    }

    public function exportExcel()
    {
        return Excel::download(new BookExport, 'DataBuku.xlsx');
    }
}
