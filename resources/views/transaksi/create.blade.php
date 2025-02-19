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
                    <b><i>Tambah Data Transaksi</i></b>
                </div>
                <div class="card-body">
                    <form action="{{route('transaksi.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Tanggal Transaksi</label>
                            <input type="date" class="form-control" name="tanggal_transaksi" required>
                        </div>
                        <div class="form-group">
                            <label>Jumlah</label><br>
                            <input type="text" name="jumlah" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Id Obat</label>
                            <select name="id_obat" class="form-control">
                                @foreach($obat as $data)
                                <option value="{{$data->id}}">{{$data->nama_obat}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-2">
                            <label>Id Pembeli</label>
                            <select name="id_pembeli" class="form-control">
                                @foreach($pembeli as $data)
                                <option value="{{$data->id}}">{{$data->nama_pembeli}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-2">
                            <button class="btn btn-primary" type="submit">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
