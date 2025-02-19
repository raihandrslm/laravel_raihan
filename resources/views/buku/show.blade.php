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
                    Menampilkan Data Buku
                </div>
                <div class="card-body">
                    <form action="{{route('buku.update',$buku->id)}}" method="POST" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="mb-2">
                            <label for="">Nama Buku</label>
                            <input type="text" name="nama_buku" class="form-control" value="{{$buku->nama_buku}}" disabled>
                            @error('nama_buku')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label for="">Genre Buku</label><br>
                            <input type="text" name="genre_buku" class="form-control @error('poto') is-invalid @enderror" value="{{$buku->genre_buku}}" disabled>
                            @error('genre_buku')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label for="">Harga</label>
                            <input type="number" name="harga" class="form-control @error('poto') is-invalid @enderror" value="{{$buku->harga}}" disabled>
                            @error('harga')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label for="">Stok</label>
                            <input type="number" name="stok" id="" class="form-control @error('poto') is-invalid @enderror" value="{{$buku->stok}}" disabled>
                            @error('stok')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label for="">Penerbit</label>
                            <input type="text" name="penerbit" class="form-control @error('poto') is-invalid @enderror" value="{{$buku->penerbit}}" disabled>
                            @error('penerbit')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label for="">Tanggal Terbit</label>
                            <input type="date" name="tanggal_terbit" id="" class="form-control @error('poto') is-invalid @enderror" value="{{$buku->tanggal_terbit}}" disabled>
                            @error('tanggal_terbit')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label for="">Foto</label>
                            <br>
                            <img src="{{asset('storage/buku/'. $buku->foto)}}" alt="" style="width: 150px; height: 120px;">
                        </div>
                        <div>
                            <a href="{{ route('buku.index') }}" class="btn btn-primary">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection