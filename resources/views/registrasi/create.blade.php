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
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Data Registrasi</div>
                <div class="card-body">
                    <form action="{{ route('registrasi.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama_lengkap" required>
                        </div>
                        <div class="form-group">
                            <label>Jenis Kelamin</label><br>
                            <input type="radio" class="form-check-input" name="jenis_kelamin" value="Laki-laki">Laki-laki
                            <input type="radio" class="form-check-input" name="jenis_kelamin" value="Perempuan">Perempuan
                        </div>
                        <div class="form-group">
                            <label>Tanggal Lahir</label>
                            <input type="date" class="form-control" name="tanggal_lahir" required>
                        </div>
                        <div class="form-group">
                            <label>Agama</label>
                            <select class="form-control" name="agama" required>
                                <option value="">--- Pilih Agama ---</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Budha">Budha</option>
                                <option value="Hindu">Hindu</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Asal Sekolah</label>
                            <input type="text" class="form-control" name="asal_sekolah" required>
                        </div><r>
                        <br>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection