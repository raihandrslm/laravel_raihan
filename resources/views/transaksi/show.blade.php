@extends('layouts.app')
@section('content')

<style>
    body {
        background: linear-gradient(to right,rgb(255, 255, 255),rgb(164, 164, 164),rgb(91, 91, 91), rgb(0, 0, 0))
    }
    .card-header {
        background-color:rgb(0, 193, 227);
    }
</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <b><i>Menampilkan Data Transaksi</i></b>
                </div>
                <div class="card-body">
                    <form action="{{route('transaksi.update',$transaksi->id)}}" method="POST" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="from-group">
                            <label for="">Tanggal Transaksi</label>
                            <input type="text" name="tanggal_transaksi" class="form-control" value="{{$transaksi->tanggal_transaksi}}" disabled>
                        </div>
                        <div class="from-group">
                            <label for="">Jumlah</label>
                            <input type="text" name="jumlah" class="form-control" value="{{ $transaksi->jumlah }}" disabled>
                        </div>
                        <div class="form-group">
                            <label for="">Id Obat</label>
                            <input type="text" name="id_obat" class="form-control" value="{{ $transaksi->id_obat }}" disabled>
                        </div>
                        <div class="mb-2">
                            <label for="">Id Pembeli</label>
                            <input type="text" name="id_pembeli" class="form-control" value="{{ $transaksi->id_pembeli }}" disabled>
                        </div>
                        <div>
                            <a href="{{ route('transaksi.index') }}" class="btn btn-primary">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
