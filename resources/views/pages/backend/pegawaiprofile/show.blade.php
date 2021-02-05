@extends ('layouts.backend.master')

{{-- @section('title', 'Detail Berita') --}}

@section('content')
    <div class="card p-5">
        <div class="d-sm-flex justify-content-end mb-4">
            <a href="{{ route('pegawaiprofile.index') }}" class="btn btn-primary mt-3">Kembali</a>
        </div>
        <div class="card-header">
            <strong>Detail Profil Pegawai</strong>
        </div>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Nama Lengkap : {{ $items->nama_lengkap }}</h5>
                <h5 class="card-title">Alamat : {{ $items->alamat }}</h5>
                <h5 class="card-title">No Telpon : {{ $items->no_telp }}</h5>
                <h5 class="card-text">Jabatan : {{$items->jabatan}}</h5>
            </div>
        </div>
    </div>
@endsection


