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
                    <b><i>Edit Data Nama Kategori</i></b>
                </div>
                <div class="card-body">
                    <form action="{{route('kategori.update',$kategori->id)}}" method="POST" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="mb-2">
                            <label for="">Nama Kategori</label>
                            <input type="text" name="nama_kategori" class="form-control" value="{{$kategori->nama_kategori}}" required>
                            @error('nama_kategori')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
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
