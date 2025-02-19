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
                    <b><i>Tambah Data Pembeli</i></b>
                </div>
                <div class="card-body">
                    <form action="{{route('pembeli.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Nama Pembeli</label>
                            <input type="text" class="form-control" name="nama_pembeli" required>
                        </div>
                        <div class="form-group">
                            <label>Jenis Kelamin</label><br>
                            <input type="radio" name="jenis_kelamin" value="Laki-laki" required>Laki-laki
                            <br>
                            <input type="radio" name="jenis_kelamin" value="Perempuan" required>Perempuan
                        </div>
                        <div class="mb-2">
                            <label>Telepon</label>
                            <input type="text" class="form-control" name="telepon">
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
