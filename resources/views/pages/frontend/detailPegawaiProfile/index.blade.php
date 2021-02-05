@extends('layouts.frontend.default')
@section('title', 'Detail Berita')

@section('content')
<!-- Breadcrumb -->
<div class="">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">Detail Pegawai</li>
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
                        <th class="bg-red bg-primary">Nama Lengkap</th>
                        <th class="bg-red bg-primary">Alamat</th>
                        <th class="bg-red bg-primary">No Telpon</th>
                        <th class="bg-red bg-primary">Jabatan</th>
                      </tr>
                    </thead>
                    <tbody>
                        @forelse ($items as $key => $value)
                            <tr>
                                <td>{{ $key + 1}}</td>
                                <td>{{ $value->nama_lengkap }}</td>
                                <td>{{ $value->alamat }}</td>
                                <td>{{ $value->no_telp }}</td>
                                <td>{{ $value->jabatan }}</td>
                            </tr>
                            @empty
                                <tr>
                                    <td colspan="4" align="center">No Data</td>
                                </tr>
                        @endforelse
                    </tbody>
                  </table>
                <div class="card-body">
                    <p>Kategori/Tags :
                        <button type="button" class="btn btn-success">Covid19</button>
                        <button type="button" class="btn btn-success">PKH</button>
                        <button type="button" class="btn btn-success">Kemensos</button>
                    </p>
                </div>

        </div>
      </div>
</div>
@endsection
