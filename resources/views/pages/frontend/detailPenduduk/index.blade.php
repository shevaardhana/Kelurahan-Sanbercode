@extends('layouts.frontend.default')

@section('title', 'Detail Data Penduduk')
@section('content')

<div class="container-fluid mt-5 " style="padding-top: 80px; padding-bottom:70px; padding-left:50px; padding-right:50px;">

    <div class="d-sm-flex d-flex justify-content-center">
        <h1 class="h3 mb-0 text-gray-800 mb-5">Rekapitulasi Data Penduduk</h1>
    </div>

    <div class="row ">
            <div class="table-responsive">
                <table id="tablePegawai" class="table table-bordered table-hover" width="100%" cellspacing="0" data-form="deleteForm">
                    <thead class="thead-dark text-center">
                        <tr>
                            <th style="width: 5%;">NO</th>
                            <th>RT/Lingkungan</th>
                            <th>Jumlah Pria</th>
                            <th>Jumlah Wanita</th>
                            <th>Jumlah Kematian</th>
                            <th>Jumlah Kelahiran</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $no = 0;?>
                    @forelse ($items as $item)
                    <?php $no++ ;?>
                    <tr>
                        <td>{{ $no }}</td>
                        <td>{{ $item->nama_desa }} </td>
                        <td>{{ $item->jumlah_pria }} orang</td>
                        <td>{{ $item->jumlah_wanita }} orang</td>
                        <td>{{ $item->jumlah_kematian }} orang</td>
                        <td>{{ $item->jumlah_kelahiran }} orang</td>
                        <td>{{ $item->keterangan }}</td>
                    </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center">
                                Belum Ada Data Pegawai
                            </td>
                        </tr>
                    @endforelse

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

