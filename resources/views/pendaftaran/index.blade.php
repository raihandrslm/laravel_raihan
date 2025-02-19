@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Daftar PPDB
                    <a href="{{route('pendaftaran.create')}}" class="btn btn-sm btn-primary" style="float: right">
                        Tambah
                    </a>
                </div>
                <div class="card-body">
                    <div class="table">
                        <table class="table table-responsive">
                            <thead>
                                <th>No</th>
                                <th>NIK</th>
                                <th>Nama Lengkap</th>
                                <th>Asal Sekolah</th>
                                <th>Aksi</th>
                            </thead>
                            <tbody>
                                @php $no=1; @endphp
                                @foreach ($pendaftaran as $data)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$data->nik}}</td>
                                    <td>{{$data->nama_lengkap}}</td>
                                    <td>{{$data->asal_sekolah}}</td>
                                    <td>Aksi</td>
                                    <td>
                                        <form action="{{route('pendaftaran.destroy',$data->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{route('pendaftaran.edit',$data->id)}}" class="btn btn-sm btn-success">Edit</a>
                                            <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
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