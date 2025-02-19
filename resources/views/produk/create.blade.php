@extends('layouts.app')
@section('content')

<style>
    body {
        background: linear-gradient(to right,rgb(0, 255, 166),rgb(0, 120, 94),rgb(0, 95, 59), rgb(0, 0, 0))
    }
    .card-header {
        background-color:rgb(0, 160, 120);
    }
</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <b><i>Tambah Data Kategori</i></b>
                </div>
                <div class="card-body">
                    <form action="{{route('produk.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Nama Produk</label>
                            <input type="text" class="form-control" name="nama_produk">
                        </div>
                        <div class="form-group">
                            <label>Harga</label>
                            <input type="text" class="form-control" name="harga">
                        </div>
                        <div class="form-group">
                            <label>Stok</label>
                            <input type="text" class="form-control" name="stok">
                        </div>
                        <div class="form-group">
                            <label>Id Kategori</label>
                            <select class="form-control" name="id_kategori">
                                @foreach($kategori as $data)
                                <option value="{{ $data->id }}">{{ $data->nama_kategori }}</option>
                                @endforeach
                            </select>
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
