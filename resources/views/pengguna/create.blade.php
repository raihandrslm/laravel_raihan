@extends('layouts.app')
@section('content')

<style>
    body {
        background: linear-gradient(to right,rgb(0, 204, 255),rgb(0, 110, 147),rgb(0, 82, 103), rgb(0, 0, 0))
    }
    .card-header {
        background-color:rgb(0, 115, 165);
    }
</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <b><i>Tambah Data Nama Pengguna</i></b>
                </div>
                <div class="card-body">
                    <form action="{{route('pengguna.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-2">
                            <label for="">Nama Pengguna</label>
                            <input type="text" name="nama" class="form-control" required>
                            @error('nama')
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
