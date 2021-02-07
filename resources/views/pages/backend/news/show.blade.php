@extends ('layouts.backend.master')

@section('title', 'Detail Berita')

@section('content')
    <div class="card p-5">
        <div class="d-sm-flex justify-content-end mb-4">
            <a href="{{ route('news.index') }}" class="btn btn-primary mt-3">Kembali</a>
        </div>
        <div class="card-header">
            <strong>Detail Berita</strong>
        </div>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Judul : {{ $items->title }}</h5>
                <p>Kategori :
                    <button type="button" class="btn btn-success">{{ $items->kategori }}</button>               
                </p> 
                <h5 class="card-title">Penulis : {{$items->user->name}}</h5>
                <h5 class="card-title">Lokasi : {{ $items->location }}</h5>
                <h5 class="card-title">Tanggal Publish : {{ $items->date }}</h5>
                <div class="row">
                    @foreach ($items->galleries as $gallery )
                    <div class="col-lg-3">
                        <div class="card-group">
                            <div class="card">
                                <img style="height:200px;" class="card-img-top" src="{{ Storage::url($gallery->image) }}" alt="Card image cap">
                            </div>
                        </div>
                    </div>
                     @endforeach
                </div>
                <h5 class="card-text mt-4">Deskripsi : </h5>
                <p class="card-text">{!! $items->descriptions !!}</p>
                <h5 class="card-title">Kategori/Tags :</h5>
            </div>
        </div>
    </div>
@endsection


