@extends('layouts.backend.master')

@section('title', 'Buat Berita')
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

  <!-- Card Form tambah berita -->
  <div class="card shadow">
    <div class="card-body">
        <form action="{{ route('news.store')}}" method="POST" enctype="multipart/form-data">
         @csrf
            <div class="form-group">
                <label for="title">Judul</label>
                <input type="text" class="form-control" name="title" placeholder="Judul" value="{{ old('title')}}" required>
            </div> 
            <div class="form-group">
                <label for="location">Lokasi</label>
                <input type="text" class="form-control" name="location" placeholder="Lokasi" value="{{ old('location')}}" required>
            </div>             
            <div class="form-group">
                <label class="CkDes" for="descriptions">Content Descriptions</label>
                <textarea name="descriptions" id="descriptions" class="form-control" required>{{ old('descriptions') }}</textarea>
            </div>         
            <div class="form-group">
                <label for="date">Tanggal</label>
                <input type="date" class="form-control" name="date" placeholder="Tanggal Publish" value="{{ old('date')}}" required>
            </div> 
            <button type="submit" class="btn btn-primary btn-block">Simpan</button>
        </form>
     </div>
    </div>
</div>
@endsection