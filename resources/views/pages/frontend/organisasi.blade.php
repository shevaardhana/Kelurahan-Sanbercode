@extends('layouts.frontend.default')

@section('title', 'Struktur Organisasi')
@section('content')

<div class="container-fluid mt-5 " style="padding-top: 80px; padding-bottom:70px; padding-left:50px; padding-right:50px;">
    <div class="">
        <img src="{{ Storage::url($items->image) }}" class="card-img-top" alt="">
    </div>
</div>           
@endsection