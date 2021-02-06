@extends ('layouts.backend.master')

@section('title', 'Detail Berita')

@section('content')
    <div class="card p-5">
        <div class="d-sm-flex justify-content-end mb-4">
            <a href="{{ route('penduduk.index') }}" class="btn btn-primary mt-3">Kembali</a>
        </div>
        <div class="card-header">
            <strong>Detail Data Penduduk</strong>
        </div>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Nama Desa : {{ $items->nama_desa}}</h5>
                <h5 class="card-title">Jumlah Pria : {{ $items->jumlah_pria }} Jiwa</h5>
                <h5 class="card-title">Jumlah Wanita : {{ $items->jumlah_wanita }} Jiwa</h5>
                <h5 class="card-text">Jumlah Kematian : {{$items->jumlah_kematian}} Jiwa</h5>
                <h5 class="card-text">Jumlah Kelahiran : {{$items->jumlah_kelahiran}} Jiwa</h5>
                <h5 class="card-text">Keterangan : {{$items->keteragan}}</h5>
            </div>
        </div>
    </div>
@endsection


