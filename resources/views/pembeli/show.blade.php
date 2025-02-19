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
                    <b><i>Menampilkan Data Pembeli</i></b>
                </div>
                <div class="card-body">
                    <form action="{{route('pembeli.update',$pembeli->id)}}" method="POST" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="mb-2">
                            <label for="">Nama Pembeli</label>
                            <input type="text" name="nama_pembeli" class="form-control" value="{{$pembeli->nama_pembeli}}" disabled>
                        </div>
                        <div class="mb-2">
                            <label for="">Jenis Kelamin</label>
                            <input type="text" name="jenis_kelamin" class="form-control" value="{{ $pembeli->jenis_kelamin }}" disabled>
                        </div>
                        <div class="mb-2">
                            <label for="">Telepon</label>
                            <input type="text" name="telepon" class="form-control" value="{{ $pembeli->telepon }}" disabled>
                        </div>
                        <div>
                            <a href="{{ route('pembeli.index') }}" class="btn btn-primary">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
