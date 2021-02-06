@extends('layouts.frontend.default')

@section('content')
<div class="container">

<h2 style="margin-top: 150px;" class="text-center mb-4">Data Pegawai Kelurahan Sanbercode</h2>

<div class="">
      <div class="row d-flex justify-content-between">
        <div class="table-responsive">
          <table class="table table-bordered table-hover" width="100%" cellspacing="0">
                    <thead class="thead-dark text-center">
                      <tr>
                        <th style="width: 10px">No</th>
                        <th>Nama Lengkap</th>
                        <th>NIP</th>
                        <th>Pangkat</th>
                        <th>Jabatan</th>
                        <th>Alamat</th>
                        <th>No. Telepon</th>
                        <th>Photo</th>
                      </tr>
                    </thead>
                    <tbody>
                        @forelse ($items as $key => $value)
                            <tr>
                                <td>{{ $key + 1}}</td>
                                <td>{{ $value->nama_lengkap }}</td>
                                <td>{{ $value->nip }}</td>
                                <td>{{ $value->pangkat }}</td>
                                <td>{{ $value->jabatan }}</td>
                                <td>{{ $value->alamat }}</td>
                                <td>{{ $value->no_telp }}</td>
                                <td style="text-align:center;">
                                    <img src="{{ Storage::url($value->photo) }}" 
                                          alt="" style="width:150px; height:150px;" class="img-thumbnail"> 
                                </td>
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

</div>

@endsection
