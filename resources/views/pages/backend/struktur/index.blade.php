@extends('layouts.backend.master')
@section('title', 'Gambar Berita')
@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-end mb-4">
  <a href="{{ route('struktur.create')}}" class="btn btn-sm btn-success shadow-sm">
  <i class="fas fa-plus fa-sm text-white-100"></i> Tambah Gambar
  </a>
</div>

<div class="d-sm-flex d-flex justify-content-center">
        <h1 class="h3 mb-0 text-gray-800">Gambar Organisasi</h1>
    </div>

<div class="row">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-hover" width="100%" cellspacing="0">
                <thead class="thead-dark text-center">
                    <tr>
                        <th style="width: 5%">NO.</th>
                        <th>Gambar</th>                 
                        <th style="width: 18%">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 0;?>
                    @forelse ($items as $item)
                    <?php $no++ ;?>
                        <tr>
                            <td>{{ $no }}</td>
                            
                            <td style="text-align:center;">
                                <img src="{{ Storage::url($item->image) }}" alt="" style="width:500px; height:300px;" class="img-thumbnail">
                            </td>

                            <td style="text-align:center;">
                                <a href="{{ route('struktur.edit', $item->id) }}" class="btn btn-info">
                                <i class="fa fa-pencil-alt"></i>
                                </a>
                                <form action="{{ route('struktur.destroy', $item->id) }}" method="POST" class="d-inline">
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
                            Belum ada Struktur Organisasi
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
