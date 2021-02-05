@extends('layouts.backend.master')
@section('title', 'Tambah Gambar')
@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Tambah Gambar</h1>
</div>

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
        <form action="{{ route('struktur.store')}}" method="POST" enctype="multipart/form-data">
         @csrf
           <div class="form-group">
                <label for="image">Gambar Struktur</label>
                <input type="file" class="form-control" name="image" placeholder="image" required>
           </div>
           <button type="submit" class="btn btn-primary btn-block">Save</button>
        </form>
    </div>
</div>

</div>
<!-- /.container-fluid -->
@endsection
