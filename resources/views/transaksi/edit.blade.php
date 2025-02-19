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
                    <b><i>Edit Data Transaksi</i></b>
                </div>
                <div class="card-body">
                    <form action="{{route('transaksi.update',$transaksi->id)}}" method="POST" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="form-group">
                            <label for="">Tanggal Transaksi</label>
                            <input type="date" name="tanggal_transaksi" class="form-control" value="{{$transaksi->tanggal_transaksi}}" required>
                        </div>
                        <div class="form-group">
                            <label for="">Jumlah</label>
                            <input type="text" name="jumlah" class="form-control" value="{{$transaksi->jumlah}}" required>
                        </div>
                        <div class="form-group">
                            <label>Id Obat</label>
                            <select class="form-control" name="id_obat">
                                @foreach($obat as $data)
                                <option value="{{ $data->id }}" {{ $data->id == $transaksi->id_obat ? 'selected' : '' }}>{{ $data->nama_obat }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-2">
                            <label>Id Pembeli</label>
                            <select class="form-control" name="id_pembeli">
                                @foreach($pembeli as $data)
                                <option value="{{ $data->id }}" {{ $data->id == $transaksi->id_pembeli ? 'selected' : '' }}>{{ $data->nama_pembeli }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-2">
                            <button class="btn btn-primary" type="submit">Edit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
