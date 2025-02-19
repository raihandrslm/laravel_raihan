<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    use HasFactory;

    protected $fillable = ['id','nama_barang','merk','jumlah','stok'];
    public $timestamp = true;
}
        $validated = $request->validate([
            'nama_buku'      => 'required|unique:bukus',
            'genre_buku'     => 'required',
            'harga'          => 'required|numeric',
            'stok'           => 'required|numeric',
            'penerbit'       => 'required',
            'tanggal_terbit' => 'required',
            'poto'           => 'required|mimes:jpg,png|max:1024',
        ]);

        $buku = new Buku();
        $buku->nama_buku = $request->nama_buku;
        // dilanjutan dengan field yang lain
        // upload gambar atau foto
        $image = $request->file('poto');
        $image->storeAs('public/buku', $image->hashName());
        $buku->poto = $image->hashName();
        $buku->save();
        return redirect()->route('buku.index')->with('success', 'Data Berhasil Disimpan');