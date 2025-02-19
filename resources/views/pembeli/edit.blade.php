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
                    <b><i>Edit Data Pembeli</i></b>
                </div>
                <div class="card-body">
                    <form action="{{route('pembeli.update',$pembeli->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Nama Pembeli</label>
                            <input type="text" name="nama_pembeli" class="form-control" value="{{$pembeli->nama_pembeli}}" required>
                        </div>
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <input type="text" name="jenis_kelamin" class="form-control" value="{{$pembeli->jenis_kelamin}}" required>
                        </div>
                        <div class="mb-2">
                            <label>Telepon</label>
                            <input type="text" name="telepon" class="form-control" value="{{$pembeli->telepon}}" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
