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
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <span>Data Buku</span> 
                    <a href="{{route('buku.create')}}" class="btn btn-primary" style="float: right">Tambah</a>
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
                                <th scope="col">Nama Buku</th>
                                <th scope="col">Genre Buku</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Stok</th>
                                <th scope="col">Penerbit</th>
                                <th scope="col">Tanggal Terbit</th>
                                <th scope="col">Foto </th>
                                <th scope="col">Aksi</th>
                            </thead>
                            <tbody>
                                @php $no=1; @endphp
                                @foreach($buku as $data)
                                <tr>
                                    <td scope="row">{{$no++}}</td>
                                    <td scope="row">{{$data->nama_buku}}</td>
                                    <td scope="row">{{$data->genre_buku}}</td>
                                    <td scope="row">{{$data->harga}}</td>
                                    <td scope="row">{{$data->stok}}</td>
                                    <td scope="row">{{$data->penerbit}}</td>
                                    <td scope="row">{{$data->tanggal_terbit}}</td>
                                    <td >
                                        <img src="{{asset('storage/buku/'. $data->foto)}}" alt="" style="width: 50px; height: 50px;">
                                    </td>
                                    <td>
                                        <form action="{{route('buku.destroy', $data->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{route('buku.edit', $data->id)}}" class="btn btn-sm btn-success">Edit</a> |
                                            <a href="{{route('buku.show', $data->id)}}" class="btn btn-sm btn-warning">Show</a> |
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