<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $fillable = ['id','tanggal_transaksi','jumlah','id_obat','id_pembeli'];
    public $timestamp = true;

    public function Obat()
    {
        return $this->belongsTo(Obat::class, 'id_obat');
    }
    public function Pembeli()
    {
        return $this->belongsTo(Pembeli::class, 'id_pembeli');
    }
}
