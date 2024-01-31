<?php

/*use Illuminate\Support\Facades\Route;
use App\Models\Kategori;
use App\Models\mahasiswa;


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

 /*Route::get('/', function () {
    return view('welcome');
});

//latihan
Route::get('/dasboard', function () {
    return view('index');
}); 

/*use App\Http\Controllers\KategoriController;
Route::get('/kategori/semua', [KategoriController::class, 'semua']);*/

use App\Http\Controllers\KategoriController2;
Route::resource('kategori',KategoriController2::class);

/*Route::get('kategori/tambah', function () {
    kategori ::create ([
        'nama_kategori' => "Pakaian Baru",
        'deskripsi' => "Semua Jenis Pakaian Baru"
    ]);
});

Route::get('/kategori/update/{id}', function ($id) {
    kategori::find($id)->update([
        'nama_kategori' => "Pakaian Anak",
        'deskripsi' => "Semua Jenis Pakaian Anak"
    ]);
});

Route::get('/kategori/hapus/{id}', function ($id) {
    kategori::find($id)->delete();
});

Route::get('mahasiswa/semua', function () {
    $mahasiswa = mahasiswa::all();
    foreach ($mahasiswa as $data) {
        echo $data->id . ". " . $data->mahasiswa . "<br>";
    }
}); */