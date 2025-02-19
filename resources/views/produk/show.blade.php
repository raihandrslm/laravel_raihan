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
                    <b><i>Menampilkan Id Kategori</i></b>
                </div>
                <div class="card-body">
                    <form action="{{route('produk.update',$produk->id)}}" method="POST" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="mb-2">
                            <label for="">Nama Produk</label>
                            <input type="text" name="nama_produk" class="form-control" value="{{$produk->nama_produk}}" disabled>
                        </div>
                        <div class="mb-2">
                            <label for="">Harga</label>
                            <input type="text" name="harga" class="form-control" value="{{ $produk->harga }}" disabled>
                        </div>
                        <div class="mb-2">
                            <label for="">Stok</label>
                            <input type="text" name="stok" class="form-control" value="{{ $produk->stok }}" disabled>
                        </div>
                        <div class="mb-2">
                            <label for="">Id Kategori</label>
                            <input type="text" name="id_kategori" class="form-control" value="{{ $produk->id_kategori }}" disabled>
                        </div>
                        <div>
                            <a href="{{ route('produk.index') }}" class="btn btn-primary">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
