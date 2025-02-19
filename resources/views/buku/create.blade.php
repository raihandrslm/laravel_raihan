@extends('layouts.app')
@section('content')

<style>
    body {
        background: linear-gradient(to right,rgb(255, 255, 255),rgb(146, 146, 146),rgb(79, 79, 79), rgb(0, 0, 0))
    }
    .card-header {
        background-color:rgb(101, 101, 101);
    }
</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Tambah Data Buku
                </div>
                <div class="card-body">
                    <form action="{{route('buku.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-2">
                            <label for="">Nama Buku</label>
                            <input type="text" name="nama_buku" class="form-control" required>
                            @error('nama_buku')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label for="">Genre Buku</label><br>
                            <input type="text" name="genre_buku" class="form-control @error('foto') is-invalid @enderror" required>
                            @error('genre_buku')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label for="">Harga</label>
                            <input type="number" name="harga" class="form-control @error('foto') is-invalid @enderror" required>
                            @error('genre_buku')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label for="">Stok</label>
                            <input type="number" name="stok" id="" class="form-control @error('foto') is-invalid @enderror">
                            @error('genre_buku')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label for="">Penerbit</label>
                            <input type="text" name="penerbit" class="form-control @error('foto') is-invalid @enderror" required>
                            @error('genre_buku')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label for="">Tanggal Terbit</label>
                            <input type="date" name="tanggal_terbit" id="" class="form-control @error('foto') is-invalid @enderror">
                            @error('genre_buku')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label for="">Tambah  Foto</label>
                            <input type="file" name="foto" id="" class="form-control @error('foto') is-invalid @enderror">
                            @error('genre_buku')
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