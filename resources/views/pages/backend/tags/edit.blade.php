@extends('layouts.backend.master')

@section('title', 'Ubah Berita')
@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit kategori  {{ $item->tag_name }} </h1>
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
        <form action="{{ route('tags.update', $item->id) }}" method="POST" enctype="multipart/form-data">
         @method('PUT')
         @csrf
            <div class="form-group">
                <label for="tag_name">Kategori</label>
                <input type="text" class="form-control" name="tag_name" placeholder="tag_name" value="{{ $item->tag_name }}" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Ubah</button>
        </form>
     </div>
    </div>
</div>
<!-- /.container-fluid -->

@endsection

