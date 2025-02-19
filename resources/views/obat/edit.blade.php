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
                    <b><i>Edit Data Obat</i></b>
                </div>
                <div class="card-body">
                    <form action="{{route('obat.update',$obat->id)}}" method="POST" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="mb-2">
                            <label for="">Nama Obat</label>
                            <input type="text" name="nama_obat" class="form-control" value="{{$obat->nama_obat}}" required>
                        </div>
                        <div class="mb-2">
                            <label for="">Jenis Obat</label>
                            <input type="text" name="jenis_obat" class="form-control" value="{{$obat->jenis_obat}}" required>
                        </div>
                        <div class="mb-2">
                            <label for="">Tanggal Kadaluarsa</label>
                            <input type="date" name="tgl_kadaluarsa" class="form-control" value="{{$obat->tgl_kadaluarsa}}" required>
                        </div>
                        <div class="mb-2">
                            <label for="">Harga</label>
                            <input type="text" name="harga" class="form-control" value="{{$obat->harga}}" required>
                        </div>
                        <br>
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
