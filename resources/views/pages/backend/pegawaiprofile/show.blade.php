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
        <div class="row">
            <div class="col-4">
                <div class="card" style="">
                    <img class="card-img-top" src="{{ Storage::url($items->photo) }}" alt="Card image cap" style="width:330px; height:330px;">
                </div>  
            </div>

            <div class="col-8">
                <div class="card" style="">
                    <div class="card-body">
                        <h5 class="card-title">Nama Lengkap : {{ $items->nama_lengkap }}</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Username : {{ $items->user->name }}</li>
                        <li class="list-group-item">NIP: {{ $items->nip }}</li>
                        <li class="list-group-item">Alamat: {{ $items->alamat }}</li>
                        <li class="list-group-item">Jabatan : {{$items->jabatan}}</li>
                        <li class="list-group-item">No. Telepon : {{ $items->no_telp }}</li>                
                    </ul>
                </div>  
            </div>
        </div>

            
    </div>
@endsection


