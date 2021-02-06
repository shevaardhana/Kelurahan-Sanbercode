@extends('layouts.backend.master')

@section('title', 'Ubah Penduduk')
@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Penduduk Desa {{ $items->nama_desa }} </h1>
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
        <form action="{{ route('penduduk.update', $items->id)}}" method="POST" enctype="multipart/form-data">
         @method('PUT')
         @csrf
         <div class="form-group">
            <label for="nama_desa">Nama Desa</label>
            <input type="text" class="form-control" name="nama_desa" value="{{ $items->nama_desa}}" required>
        </div>
        <div class="form-group">
            <label for="jumlah_pria">Jumlah Pria</label>
            <input type="text" class="form-control" name="jumlah_pria" value="{{ $items->jumlah_pria }}" required>
        </div>
        <div class="form-group">
            <label for="jumlah_wanita">Jumlah Wanita</label>
            <input type="text" class="form-control" name="jumlah_wanita" value="{{ $items->jumlah_wanita }}" required>
        </div>
        <div class="form-group">
            <label for="jumlah_kematian">Jumlah Kematian</label>
            <input type="text" class="form-control" name="jumlah_kematian" value="{{ $items->jumlah_kematian }}" required>
        </div>
        <div class="form-group">
            <label for="jumlah_kelahiran">Jumlah Kelahiran</label>
            <input type="text" class="form-control" name="jumlah_kelahiran" value="{{ $items->jumlah_kelahiran }}" required>
        </div>
        <div class="form-group">
            <label class="Keterangan" for="keterangan">Keterangan</label>
            <textarea name="keterangan" id="keterangan" class="form-control" >{{ $items->keterangan }}</textarea>
        </div>
            <button type="submit" class="btn btn-primary btn-block">Ubah</button>
        </form>
     </div>
    </div>


</div>
<!-- /.container-fluid -->

@endsection
