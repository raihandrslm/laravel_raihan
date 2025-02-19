<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;

    protected $fillable = ['id','nik','nama_lengkap','jenis_kelamin','tanggal_lahir','agama','alamat','asal_sekolah'];
    public $timestamp = true;
}
