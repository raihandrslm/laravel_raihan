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
                    <b><i>Edit Data Produk</i></b>
                </div>
                <div class="card-body">
                    <form action="{{route('produk.update',$produk->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf    
                    @method('PUT')
                        <div class="form-group">
                            <label>Nama Produk</label>
                            <input type="text" name="nama_produk" class="form-control" value="{{$produk->nama_produk}}" required>
                        </div>
                        <div class="form-group">
                            <label>Harga</label>
                            <input type="text" name="harga" class="form-control" value="{{$produk->harga}}" required>
                        </div>
                        <div class="form-group">
                            <label>Stok</label>
                            <input type="text" name="stok" class="form-control" value="{{$produk->stok}}" required>
                        </div>
                        <div class="form-group">
                            <label>Id Kategori</label>
                            <select class="form-control" name="id_kategori">
                                @foreach($kategori as $data)
                                <option value="{{ $data->id }}" {{ $data->id == $produk->id_kategori ? 'selected' : '' }}>{{ $data->nama_kategori }}</option>
                                @endforeach
                            </select>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection