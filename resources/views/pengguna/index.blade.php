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
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <span><b><i>Data Pengguna</i></b></span> 
                    <a href="{{route('pengguna.create')}}" class="btn btn-primary" style="float: right">Tambah</a>
                </div> 
                <div class="card-body">  
                    @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{session('success')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    <div class="table">
                        <table class="table table-responsive">
                            <thead>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Aksi</th>
                            </thead>
                            <tbody>
                                @php $no=1; @endphp
                                @foreach($pengguna as $data)
                                <tr>
                                    <td scope="row">{{$no++}}</td>
                                    <td scope="row">{{$data->nama}}</td>
                                    <td>
                                        <form action="{{route('pengguna.destroy', $data->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{route('pengguna.edit', $data->id)}}" class="btn btn-sm btn-success">Edit</a>
                                            <a href="{{route('pengguna.show', $data->id)}}" class="btn btn-sm btn-warning">Show</a>
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda Yakin?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection