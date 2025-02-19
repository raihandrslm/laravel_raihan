<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            ['title'=>'Tips Cepat Pintar','Content'=>'lorem ipsum'],
            ['title'=>'Haruskah Menunda Belajar','Content'=>'lorem ipsum'],
            ['title'=>'Membangun Visi Misi Kesuksesan','Content'=>'lorem ipsum'],
        ];
        // masukkan data ke database
        DB::table('posts')->insert($posts);
    }
}
