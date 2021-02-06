@extends('layouts.backend.master')
@section('title', 'Tambah Data Penduduk')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-center mb-4">
        <h1 class="h3 mb-0 text-gray-800">Form Data Penduduk</h1>
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
            <form action="{{ route('penduduk.store')}}" method="POST" enctype="multipart/form-data">
             @csrf
                <div class="form-group">
                    <label for="nama_desa">Nama Desa</label>
                    <input type="text" class="form-control" name="nama_desa" placeholder="Isi Nama Desa" value="{{ old('title')}}" required>
                </div>
                <div class="form-group">
                    <label for="jumlah_pria">Jumlah Pria</label>
                    <input type="text" class="form-control" name="jumlah_pria" placeholder="Isi Jumlah Pria" value="{{ old('location')}}" required>
                </div>
                <div class="form-group">
                    <label for="jumlah_wanita">Jumlah Wanita</label>
                    <input type="text" class="form-control" name="jumlah_wanita" placeholder="Isi Jumlah Wanita" value="{{ old('location')}}" required>
                </div>
                <div class="form-group">
                    <label for="jumlah_kematian">Jumlah Kematian</label>
                    <input type="text" class="form-control" name="jumlah_kematian" placeholder="Isi Jumlah Kematian" value="{{ old('location')}}" required>
                </div>
                <div class="form-group">
                    <label for="jumlah_kelahiran">Jumlah Kelahiran</label>
                    <input type="text" class="form-control" name="jumlah_kelahiran" placeholder="Isi Jumlah Kelahiran" value="{{ old('location')}}" required>
                </div>
                <div class="form-group">
                    <label class="Keterangan" for="keterangan">Keterangan</label>
                    <textarea name="keterangan" id="keterangan" class="form-control" >{{ old('keterangan') }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Simpan</button>
            </form>
         </div>
        </div>
</div>

@endsection
