<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');      

Route::get('/books/detailBuku/{id}', [BukuController::class, 'detail'])->name('books.detail');

Route::get('/about', function () {
    return view('about', [
    "title" => "About",
    "nama" => "Meiwildan Muhammad Farrel",
    "email" => "3103120133@student.smktelkom-pwt.sch.id",
    "gambar" => "Farrel.jpeg"
    ]);
});
Route::get('/gallery', function () {
    return view('gallery', [
        "title" => "Gallery"
    ]);
});
// Route::resource('/contacts', ContactController::class);
Route::get('/contacts/create', [ContactController::class, 'create'])->name('contacts.create');
Route::post('/contacts/store', [ContactController::class, 'store'])->name('contacts.store');
Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/contacts/index', [ContactController::class, 'index'])->name('contacts.index');
    Route::get('/contacts/{id}/edit', [ContactController::class, 'edit'])->name('contacts.edit');
    Route::post('/contacts/{id}/update', [ContactController::class, 'update'])->name('contacts.update');
    Route::get('/contacts/{id}/destroy', [ContactController::class, 'destroy'])->name('contacts.destroy');
    
    Route::get('/books/{id}/edit', [BukuController::class, 'edit'])->name('books.edit');
    Route::post('/books/{id}/update', [BukuController::class, 'update'])->name('books.update');
    Route::get('/books/{id}/destroy', [BukuController::class, 'destroy'])->name('books.destroy');
    Route::get('/books/indexBuku', [BukuController::class, 'index'])->name('books.index');
    Route::get('/books/buku', [BukuController::class, 'index'])->name('books.buku');
    Route::post('/books/store', [BukuController::class, 'store'])->name('books.store');
    Route::get('/books/create', [BukuController::class, 'create'])->name('books.create');
    Route::get('/books/exportpdf', [BukuController::class, 'exportpdf'])->name('exportpdf');
    Route::get('/books/exportexcel', [BukuController::class, 'exportexcel'])->name('exportexcel');
});