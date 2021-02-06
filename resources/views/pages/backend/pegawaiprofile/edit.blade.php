@extends('layouts.backend.master')
@section('title', 'Edit Profile Pegawai')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-center mb-4">
        <h1 class="h3 mb-0 text-gray-800">Form Edit Profile</h1>
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
            <div class="d-sm-flex justify-content-end mb-4">
                <a href="{{ route('pegawaiprofile.index') }}" class="btn btn-primary mt-3">Kembali</a>
            </div>
            <form action="{{ route('pegawaiprofile.update', $item->id) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
             @csrf
                <div class="form-group">
                    <label for="user_id">Nama User (Jangan Diubah)</label>
                    <select name="user_id" class="form-control" required>
                        <option value="{{ $item->user_id }}">Jangan Diubah</option>
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
                           value="{{ $item->nama_lengkap }}" required>
                </div>
                <div class="form-group">
                    <label for="nip">NIP</label>
                    <input type="text" class="form-control" name="nip" placeholder="NIP"
                           value="{{ $item->nip }}" required>
                </div>
                <div class="form-group">
                    <label for="pangkat">Pangkat</label>
                    <input type="text" class="form-control" name="pangkat" placeholder="Pangkat"
                           value="{{ $item->pangkat }}" required>
                </div>
                <div class="form-group">
                    <label for="jabatan">Jabatan</label>
                    <input type="text" class="form-control" name="jabatan" placeholder="Jabatan"
                           value="{{ $item->jabatan  }}" required>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea name="alamat" id="alamat" class="form-control" required>{{ $item->alamat  }}</textarea>
                </div>
                <div class="form-group">
                    <label for="no_telp">No. Telp.</label>
                    <input type="text" class="form-control" name="no_telp" placeholder="Nomor Telepon"
                           value="{{ $item->no_telp}}" required>
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
