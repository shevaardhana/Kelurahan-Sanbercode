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
                <h5 class="card-title">Lokasi : {{ $items->location }}</h5>
                <h5 class="card-title">Tanggal Publish : {{ $items->date }}</h5>
                <h5 class="card-text">Deskripsi : </h5> 
                <p class="card-text">{{ $items->descriptions }}</p>
                <h5 class="card-title">Gambar Berita</h5>
                
                <div>
                    @foreach ($items->galleries as $gallery )
                    <div class="col-lg-3">
                        <img src="{{ Storage::url($gallery->image) }}" alt=""> 
                    </div>                                           
                    @endforeach
                </div>
               
            </div>
        </div>
    </div>
@endsection


