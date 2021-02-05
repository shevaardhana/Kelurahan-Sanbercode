@extends('layouts.backend.master')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-center mb-4">
        <h1 class="h3 mb-0 text-gray-800">Form Tambah Berita</h1>
    </div>

    <!-- Munculkan error -->
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif


    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('pegawaiprofile.store')}}" method="POST" enctype="multipart/form-data">
             @csrf
                <div class="form-group">
                    <label for="nama_lengkap">Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama_lengkap" placeholder="Nama Lengkap" value="{{ old('title')}}" required>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" name="alamat" placeholder="Alamat" value="{{ old('location')}}" required>
                </div>
                <div class="form-group">
                    <label for="no_telp">No Telpon</label>
                    <input type="text" class="form-control" name="no_telp" placeholder="Nomor Telpon" value="{{ old('location')}}" required>
                </div>
                <div class="form-group">
                    <label for="jabatan">Jabatan</label>
                    <input type="text" class="form-control" name="jabatan" placeholder="Jabatan" value="{{ old('location')}}" required>
                </div>

                <button type="submit" class="btn btn-primary btn-block">Simpan</button>
            </form>
         </div>
        </div>
</div>

@endsection
