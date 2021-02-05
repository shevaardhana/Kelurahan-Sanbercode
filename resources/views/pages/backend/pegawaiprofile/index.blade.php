@extends('layouts.backend.master')

@section('content')
    <!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex justify-content-end mb-4">
        <a href="{{ route('pegawaiprofile.create') }}" class="btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-plus fa-sm text-white-100"></i> Tambah Profil Pegawai
        </a>
    </div>

    <div class="d-sm-flex d-flex justify-content-center">
        <h1 class="h3 mb-0 text-gray-800">Daftar Pegawai</h1>
    </div>

    <div class="row">
        <div class="card-body">
            @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                {{ session('success') }}
            </div>
            @endif

            <div class="table-responsive">
                <table id="tableNews" class="table table-bordered table-hover" width="100%" cellspacing="0" data-form="deleteForm">
                    <thead class="thead-dark">
                        <tr>
                            <th style="width: 5%;">NO</th>
                            <th>Nama Lengkap</th>
                            <th style="width: 15%;">Alamat</th>
                            <th>Nomor Telpon</th>
                            <th style="width: 15%;">Jabatan</th>
                            <th style="width: 18%;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $no = 0;?>
                    @forelse ($items as $value)
                    <?php $no++ ;?>
                        <tr>
                            <td>{{ $no }}</td>
                            <td>{{ $value->nama_lengkap }}</td>
                            <td>{{ $value->alamat }}</td>
                            <td>{{ $value->no_telp }}</td>
                            <td>{{ $value->jabatan }}</td>
                            <td style="text-align:center;">
                                <a href="{{ route('pegawaiprofile.show', $value->id) }}" class="btn btn-primary" data-toggle="tooltip" data-placement="bottom" title="detail">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="{{ route('pegawaiprofile.edit', $value->id) }}" class="btn btn-info" data-toggle="tooltip" data-placement="bottom" title="edit">
                                    <i class="fa fa-pencil-alt"></i>
                                </a>
                                <form action="{{ route('pegawaiprofile.destroy', $value->id) }}"
                                    method="POST" class="d-inline form-delete">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger" data-toggle="tooltip" data-placement="bottom" title="delete">
                                        <i class="fa fa-trash" ></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center">
                                Belum Ada Data Pegawai
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
@include('includes.backend.ModalDelete')

@endsection

@push('after-scripts')
    <script src="{{ asset('sbadmin2/plugins/datatables/jquery.dataTables.js ') }}"></script>
    <script src="{{ asset('sbadmin2/plugins/datatables-bs4/js/dataTables.bootstrap4.js ') }}"></script>
    <script>
    $(function () {
        $("#tableNews").DataTable();
    });
    </script>
@endpush
