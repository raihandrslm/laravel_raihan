<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\PendaftaranController;
use App\Models\Barang;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\TeleponController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\PembeliController;
use App\Http\Controllers\TransaksiController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function(){
    return 'Ini Halaman About';
});

Route::get('/contact', function(){
    return 'Ini Halaman Contact';
});

Route::get('biodata', function(){
    return "Nama Depan    : Raihan"."<br>".
           "Nama Belakang : Darussalam"."<br>".
           "Tanggal Lahir : 19 November 2008"."<br>".
           "Jenis Kelamin : Laki-laki"."<br>".
           "Agama         : Islam"."<br>".
           "Alamat        : JL.Cibiuk"."<br>".
           "Telepon       : 0888-0637-3394"."<br>";
});

Route::get('biodata2/{depan}/{belakang}/{tgl_lahir}/{jk}/{agama}/{alamat}/{telp}', function($depan,$belakang,$tgl_lahir,$jk,$agama,$alamat,$telp){
    return "Nama Depan    : $depan"."<br>".
           "Nama Belakang : $belakang"."<br>".
           "Tanggal Lahir : $tgl_lahir"."<br>".
           "Jenis Kelamin : $jk"."<br>".
           "Agama         : $agama"."<br>".
           "Alamat        : $alamat"."<br>".
           "Telepon       : $telp"."<br>";
});

// Parameter
Route::get('aritmatika/{bilangan1}/{bilangan2}', function($bilangan1,$bilangan2){
    $penjumlahan = $bilangan1 + $bilangan2;
    $pengurangan = $bilangan1 - $bilangan2;
    $perkalian = $bilangan1 * $bilangan2;
    $pembagian = $bilangan2 != 0 ? $bilangan1 / $bilangan2 : "Tidak dapat dibagi dengan nol";
    return "Bilangan 1    : <b>$bilangan1</b>"."<br>".
           "Bilangan 2    : <b>$bilangan2</b>"."<br>".
           "Penjumlahan    : <b><i>$penjumlahan</i></b>"."<br>".
           "Pengurangan    : <b><i>$pengurangan</b></i>"."<br>".
           "Perkalian    : <b><i>$perkalian</b></i>"."<br>".
           "Pembagian    : <b><i>$pembagian</b></i>";
});

Route::get('/murid', function(){
    $data_murid = ["Raihan Ganteng","Raihan juga","Masih Raihan","Raihan lagi","Raihan aja"];
    $data_kelas = ["XI RPL 2","XI RPL 2","XI RPL 3","XI RPL 3","XI RPL 2"];
    return view('halaman_murid', compact('data_murid','data_kelas'));
});


Route::get('/barang', function(){

    $barang = Barang::all();
    return view('tampil_barang',compact('barang'));
});

Route::get('/post',[PostsController::class, 'menampilkan']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// crud pendaftaran
Route::resource('pendaftaran',PendaftaranController::class);
Route::resource('registrasi',RegistrasiController::class);
Route::resource('buku',BukuController::class);
Route::resource('pengguna',PenggunaController::class);
Route::resource('telepon', TeleponController::class);
Route::resource('kategori', KategoriController::class);
Route::resource('produk', ProdukController::class);
Route::resource('obat', ObatController::class);
Route::resource('pembeli', PembeliController::class);
Route::resource('transaksi', TransaksiController::class);
