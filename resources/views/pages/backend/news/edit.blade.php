@extends('layouts.backend.master')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Berita  {{ $item->title }} </h1> 
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
        <form action="{{ route('news.update', $item->id)}}" method="POST" enctype="multipart/form-data">
         @method('PUT')
         @csrf
            <div class="form-group">
                <label for="title">Judul</label>
                <input type="text" class="form-control" name="title" placeholder="Title" value="{{ $item->title }}">
            </div>
            <div class="form-group">
                <label for="location">Lokasi</label>
                <input type="text" class="form-control" name="location" placeholder="Lokasi" value="{{ $item->location }}">
            </div>             
            <div class="form-group">
                <label for="descriptions">Deskripsi</label>
                <textarea name="descriptions" id="descriptions" rows="10" class="form-control">{{ $item->descriptions }}</textarea>
            </div>           
            <div class="form-group">
                <label for="date">Tanggal</label>
                <input type="date" class="form-control" name="date" placeholder="Tanggal Publish" value="{{ $item->date }}">
            </div>           
            <button type="submit" class="btn btn-primary btn-block">Ubah</button>
        </form>
     </div>
    </div>


</div>
<!-- /.container-fluid -->

@endsection