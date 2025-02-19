@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="cold-md-10">
            <div class="card">
                <div class="card-header">Tambah Pendaftaran</div>
                <div class="card-body">
                    <form action="{{route('pendaftaran.update',$pendaftaran->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-2">
                            <label for="">NIK</label>
                            <input type="text" name="nik" class="form-control"
                             value="{{$pendaftaran->nik}}" required>
                        </div>
                        <div class="mb-2">
                            <label for="">Nama Lengkap</label>
                            <input type="text" name="nama_lengkap" class="form-control" 
                             value="{{$pendaftaran->nama_lengkap}}" required>
                        </div>
                        <div class="mb-2">
                            <label for="">Jenis Kelamin</label>
                            <select name="jenis_kelamin" id="" class="form-control">
                                <option value="laki-laki" {{$pendaftaran->jenis_kelamin == "Laki-laki"? 'selected':''}}>Laki-laki</option>
                                <option value="perempuan" {{$pendaftaran->jenis_kelamin == "Perempuan"? 'selected':''}}>Perempuan</option>
                            </select>
                        </div>
                        <div class="mb-2">
                            <label for="">Tanggal Lahir</label>
                            <input type="date" name="tanggal_lahir" class="form-control" value="{{$pendaftaran->tanggal_lahir}}" required>
                        </div>
                        <div class="mb-2">
                            <label for="">Agama</label>
                            <select name="agama" id="" class="form-control">
                                <option value="islam" {{$pendaftaran->agama == "Islam"? 'selected':''}}>Islam</option>
                                <option value="kristen" {{$pendaftaran->agama == "Kristen"? 'selected':''}}>Kristen</option>
                                <option value="hindu" {{$pendaftaran->agama == "Hindu"? 'selected':''}}>Hindu</option>
                                <option value="buddha" {{$pendaftaran->agama == "Buddha"? 'selected':''}}>Buddha</option>
                            </select>
                        </div>
                        <div class="mb-2">
                            <label for="">Asal Sekolah</label>
                            <input type="text" name="asal_sekolah" class="form-control" value="{{$pendaftaran->asal_sekolah}}" required>
                        </div>
                        <div class="mb-2">
                            <label for="">Alamat</label>
                            <textarea name="alamat" id="" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                        <div class="mb-2">
                            <button class="btn btn-primary" type="submit">
                                Gaskeun
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection