@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-center-content">
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
                            <input type="text" name="genre_buku" class="form-control @error('poto') is-invalid $enderror" required>
                            @error('genre_buku')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label for="">Harga</label>
                            <input type="number" name="harga" class="form-control @error('poto') is-invalid $enderror" required>
                            @error('genre_buku')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label for="">Stok</label>
                            <input type="number" name="stok" id="" class="form-control @error('poto') is-invalid $enderror">
                            @error('genre_buku')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label for="">Penerbit</label>
                            <input type="text" name="penerbit" class="form-control @error('poto') is-invalid $enderror" required>
                            @error('genre_buku')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label for="">Tanggal Terbit</label>
                            <input type="date" name="tanggal_terbit" id="" class="form-control @error('poto') is-invalid $enderror">
                            @error('genre_buku')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label for="">Poto</label>
                            <input type="file" name="poto" id="" class="form-control @error('poto') is-invalid $enderror">
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