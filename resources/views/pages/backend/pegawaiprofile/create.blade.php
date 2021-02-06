@extends('layouts.backend.master')
@section('title', 'Tambah Profile Pegawai')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-center mb-4">
        <h1 class="h3 mb-0 text-gray-800">Form Tambah Profile</h1>
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
            <form action="{{ route('pegawaiprofile.store') }}" method="POST" enctype="multipart/form-data">
             @csrf
                <div class="form-group">
                    <label for="user_id">Nama User</label>
                    <select name="user_id" class="form-control" required>
                        <option value="">Pilih User</option>
                        @foreach ($users as $user)
                            <option value="{{ $user->id }}">
                                {{ $user->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="nama_lengkap">Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama_lengkap" placeholder="Nama Lengkap"
                           value="{{ old('nama_lengkap') }}" required>
                </div>
                <div class="form-group">
                    <label for="nip">NIP</label>
                    <input type="text" class="form-control" name="nip" placeholder="NIP"
                           value="{{ old('nip') }}" required>
                </div>
                <div class="form-group">
                    <label for="pangkat">Pangkat</label>
                    <input type="text" class="form-control" name="pangkat" placeholder="Pangkat"
                           value="{{ old('pangkat') }}" required>
                </div>
                <div class="form-group">
                    <label for="jabatan">Jabatan</label>
                    <input type="text" class="form-control" name="jabatan" placeholder="Jabatan"
                           value="{{ old('jabatan') }}" required>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea name="alamat" id="alamat" class="form-control" required>{{ old('alamat') }}</textarea>
                </div>
                <div class="form-group">
                    <label for="no_telp">No. Telp.</label>
                    <input type="text" class="form-control" name="no_telp" placeholder="Nomor Telepon"
                           value="{{ old('no_telp') }}" required>
                </div>
                <div class="form-group">
                    <label for="photo">Photo</label>
                    <input type="file" class="form-control" name="photo" placeholder="photo" required>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Simpan</button>
            </form>
         </div>
        </div>
</div>

@endsection
