@extends('layouts.app')
@section('content')

<style>
    body {
        background: linear-gradient(to right,rgb(0, 60, 255),rgb(0, 42, 120),rgb(0, 20, 95), rgb(0, 0, 0))
    }
    .card-header {
        background-color:rgb(0, 40, 160);
    }
</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <b><i>Menampilkan Id Pengguna</i></b>
                </div>
                <div class="card-body">
                    <form action="{{route('telepon.update',$telepon->id)}}" method="POST" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="mb-2">
                            <label for="">Id Pengguna</label>
                            <input type="text" name="id_pengguna" class="form-control" value="{{$telepon->nomor}}" disabled>
                        </div>
                        <div class="mb-2">
                            <label for="">Nama</label>
                            <input type="text" name="nama" class="form-control" value="{{ $telepon->pengguna->nama }}" disabled>
                        </div>
                        <div>
                            <a href="{{ route('telepon.index') }}" class="btn btn-primary">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
