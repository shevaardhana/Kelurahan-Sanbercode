@extends('layouts.backend.master')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-end mb-4"> 
  <a href="{{ route('image.create')}}" class="btn btn-sm btn-success shadow-sm">
  <i class="fas fa-plus fa-sm text-white-100"></i> Tambah Gambar
  </a>
</div>

<div class="d-sm-flex align-items-center justify-content-center">
  <h1 class="h3 mb-0 text-gray-800">Gambar Berita</h1>    
  </a>
</div>

<div class="row">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-hover" width="100%" cellspacing="0">
            <thead class="thead-dark">
                <tr>
                    <th>NO.</th>
                    <th>Judul Berita</th>
                    <th>Gambar</th>                 
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($items as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->news->title }}</td>                       
                        <td style="text-align:center;">
                            <img src="{{ Storage::url($item->image) }}" alt="" style="width:150px" class="img-thumbnail"> 
                        </td>
                       
                        <td style="text-align:center;">
                            <a href="{{ route('image.edit', $item->id) }}" class="btn btn-info">
                            <i class="fa fa-pencil-alt"></i>                            
                            </a>  
                            <form action="{{ route('image.destroy', $item->id) }}" method="POST" class="d-inline">
                                @csrf 
                                @method('delete')
                                <button class="btn btn-danger">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </form>                          
                        </td>
                    </tr>
                @empty
                    <tr>
                      <td colspan="7" class="text-center">
                        Belum Ada Gambar Berita
                      </td>
                    </tr>
                @endforelse                
            </tbody>
            </table>
        </div>
    </div>
</div>


</div>
<!-- /.container-fluid -->
@endsection
