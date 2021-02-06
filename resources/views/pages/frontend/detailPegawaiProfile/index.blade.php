@extends('layouts.frontend.default')

@section('title', 'Detail Profile Pegawai')
@section('content')

<div class="container-fluid mt-5 " style="padding-top: 80px; padding-bottom:70px; padding-left:50px; padding-right:50px;">

    <div class="d-sm-flex d-flex justify-content-center">
        <h1 class="h3 mb-0 text-gray-800">Daftar Pegawai</h1>
    </div>

    <div class="row ">
            <div class="table-responsive">
                <table id="tablePegawai" class="table table-bordered table-hover" width="100%" cellspacing="0" data-form="deleteForm">
                    <thead class="thead-dark text-center">
                        <tr>
                            <th style="width: 5%;">NO</th>
                            <th>Nama Lengkap</th>
                            <th>NIP</th>
                            <th>Pangkat</th>
                            <th>Jabatan</th>
                            <th>Alamat</th>
                            <th>No Telpon</th>
                            <th>Photo</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $no = 0;?>
                    @forelse ($items as $item)
                    <?php $no++ ;?>
                    <tr>
                        <td>{{ $no }}</td>
                        <td>{{ $item->nama_lengkap }}</td>
                        <td>{{ $item->nip }}</td>
                        <td>{{ $item->pangkat }}</td>
                        <td>{{ $item->jabatan }}</td>
                        <td>{{ $item->alamat }}</td>
                        <td>{{ $item->no_telp }}</td>
                        <td style="text-align:center;">
                            <img src="{{ Storage::url($item->photo) }}"
                                 alt="" style="width:150px; height:150px;" class="img-thumbnail">
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

@endsection

@push('after-scripts')
    <script src="{{ asset('sbadmin2/plugins/datatables/jquery.dataTables.js ') }}"></script>
    <script src="{{ asset('sbadmin2/plugins/datatables-bs4/js/dataTables.bootstrap4.js ') }}"></script>
    <script>
    $(function () {
        $("#tablePegawai").DataTable();
    });
    </script>
@endpush

<!-- Custom fonts for this template-->
<link href="{{ asset('sbadmin2/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

<!-- Custom styles for this template-->
<link href="{{ asset('sbadmin2/css/sb-admin-2.min.css') }}" rel="stylesheet">

 <!-- Data Tables -->
 <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.23/datatables.min.css"/>

