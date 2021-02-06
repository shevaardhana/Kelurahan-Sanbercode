@extends('layouts.frontend.default')
@section('title', 'Detail Berita')

@section('content')
<!-- Breadcrumb -->
<div class="">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">Data Penduduk Kelurahan Sanbercode</li>
                </ol>
            </nav>
        </div>
</div>
<!-- Akhir Breadcrumb -->

<div class="contentDetailBerita">
      <div class="row d-flex justify-content-between">


        <div class="col-8 contentBerita">
                <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th style="width: 10px" class="bg-red bg-primary">No</th>
                        <th class="bg-red bg-primary">Nama Desa</th>
                        <th class="bg-red bg-primary">Jumlah Pria</th>
                        <th class="bg-red bg-primary">Jumlah Wanita</th>
                        <th class="bg-red bg-primary">Jumlah Kematian</th>
                        <th class="bg-red bg-primary">Jumlah Kelahiran</th>
                        <th class="bg-red bg-primary">Keterangan</th>
                      </tr>
                    </thead>
                    <tbody>
                        @forelse ($items as $key => $value)
                            <tr>
                                <td>{{ $key + 1}}</td>
                                <td>{{ $value->nama_desa }}</td>
                                <td>{{ $value->jumlah_pria }}</td>
                                <td>{{ $value->jumlah_wanita }}</td>
                                <td>{{ $value->jumlah_kematian }}</td>
                                <td>{{ $value->jumlah_kelahiran }}</td>
                                <td>{{ $value->keterangan }}</td>
                            </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-center">No Data</td>
                                </tr>
                        @endforelse
                    </tbody>
                  </table>
        </div>
      </div>
</div>
@endsection
