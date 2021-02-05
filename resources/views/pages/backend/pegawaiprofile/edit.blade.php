@extends('layouts.backend.master')

{{-- @section('title', 'Ubah Berita') --}}
@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Pegawai  {{ $items->nama_lengkap }} </h1>
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

  <!-- Card Form tambah berita -->
  <div class="card shadow">
    <div class="card-body">
        <form action="{{ route('pegawaiprofile.update', $items->id)}}" method="POST" enctype="multipart/form-data">
         @method('PUT')
         @csrf
            <div class="form-group">
                <label for="nama_lengkap">Nama Lengkap</label>
                <input type="text" class="form-control" name="nama_lengkap" value="{{ $items->nama_lengkap }}" required>
            </div>
            <div class="form-group">
                <label for="alamat">Jumlah Pria</label>
                <input type="text" class="form-control" name="alamat" value="{{ $items->alamat }}" required>
            </div>
            <div class="form-group">
                <label for="no_telp">No Telpon</label>
                <input type="text" class="form-control" name="no_telp" value="{{ $items->no_telp }}" required>
            </div>
            <div class="form-group">
                <label for="jabatan">Jabatan</label>
                <input type="text" class="form-control" name="jabatan" value="{{ $items->jabatan }}" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Ubah</button>
        </form>
     </div>
    </div>


</div>
<!-- /.container-fluid -->

@endsection
