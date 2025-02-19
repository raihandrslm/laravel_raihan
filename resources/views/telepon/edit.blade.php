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
                    <b><i>Edit Data Telepon</i></b>
                </div>
                <div class="card-body">
                    <form action="{{route('telepon.update',$telepon->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf    
                    @method('PUT')
                        <div class="form-group">
                            <label>Nomor</label>
                            <input type="text" name="nomor" class="form-control" value="{{$telepon->nomor}}" required>
                        </div>
                        <div class="form-group">
                            <label>Id Pengguna</label>
                            <select class="form-control" name="id_pengguna">
                                @foreach($pengguna as $data)
                                <option value="{{ $data->id }}" {{ $data->id == $telepon->id_pengguna ? 'selected' : '' }}>{{ $data->nama }}</option>
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