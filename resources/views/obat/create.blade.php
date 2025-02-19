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
                    <b><i>Tambah Data Obat</i></b>
                </div>
                <div class="card-body">
                    <form action="{{route('obat.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">Nama Obat</label>
                            <input type="text" name="nama_obat" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Jenis Obat</label>
                            <input type="text" class="form-control" name="jenis_obat" required>
                        </div>
                        <div class="form-group">
                            <label>Tanggal Kadaluarsa</label>
                            <input type="date" class="form-control" name="tgl_kadaluarsa" required>
                        </div>
                        <div class="form-group">
                            <label>Harga</label>
                            <input type="text" class="form-control" name="harga" required>
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
