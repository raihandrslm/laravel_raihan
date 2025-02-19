<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barangs = [
            ['nama_barang'=>'Sepatu','merk'=>'Nike','jumlah'=>10,'stok'=>35],
            ['nama_barang'=>'Carrier','merk'=>'Osprey','jumlah'=>5,'stok'=>15],
            ['nama_barang'=>'Jaket','merk'=>'The North Face','jumlah'=>4,'stok'=>22],
            ['nama_barang'=>'Celana','merk'=>'FjallRaven','jumlah'=>7,'stok'=>13],
            ['nama_barang'=>'Baju','merk'=>'Dickies','jumlah'=>2,'stok'=>9]
        ];
        // masukkan data ke database
        DB::table('barangs')->insert($barangs);
    }
}
