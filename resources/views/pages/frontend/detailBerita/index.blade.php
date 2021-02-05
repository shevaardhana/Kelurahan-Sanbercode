@extends('layouts.frontend.default')
@section('title', 'Detail Berita')

@section('content')
<!-- Breadcrumb -->
<div class="">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Detail Berita</li>
                </ol>
            </nav>
        </div>        
</div>
<!-- Akhir Breadcrumb -->

<div class="contentDetailBerita">
      <div class="row d-flex justify-content-between">
        <div class="col-3">
            <div class="card p-2">
                 <div class="card">
                    <div class="card-body">
                        <button type="button" class="btn btn-info btnSecondary">
                            <i class="fas fa-calendar-week"></i> 
                            Agenda kegiatan
                        </button>
                        <div class="card mt-2">
                            <div class="card-body">
                                <p>Maaf, Belum ada agenda kegiatan</p>                                
                            </div>
                        </div>                            
                    </div>
                 </div>

                 <div class="card mt-2">
                    <div class="card-body">
                        <button type="button" class="btn btn-info btnSecondary">
                            <i class="fas fa-calendar-week"></i> 
                            Agenda Rapat 
                        </button>
                        <div class="card mt-2">
                            <div class="card-body">
                                <p>Maaf, Belum ada agenda Rapat</p>                                
                            </div>
                        </div>                            
                    </div>
                 </div> 

                 <div class="card mt-2">
                    <div class="card-body">
                        <button type="button" class="btn btn-info btnSecondary mb-3"> 
                            <i class="fas fa-poll"></i>
                            Hasil Polling 
                        </button>
                        <p>Apakah Website ini bermanfaat ??</p>
                        <p class="mb-0">Sangat Bermanfaat</p>
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 40%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">40%</div>
                        </div> 
                        <br>
                        <p class="mb-0">Bermanfaat</p>
                        <div class="progress">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">25%</div>
                        </div>
                        <br>
                        <p class="mb-0">Cukup Bermanfaat</p>
                        <div class="progress">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 25%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">25%</div>
                        </div>  
                        <br>
                        <p class="mb-0">Kurang Bermanfaat</p>
                        <div class="progress">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 10%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">10%</div>
                        </div>                         
                    </div>
                 </div> 
                 
                 <div class="card mt-2">
                    <div class="card-body">
                        <button type="button" class="btn btn-info btnSecondary">
                            <i class="fas fa-map-marker-alt"></i>
                            Lokasi Kantor
                        </button>
                        <div class="card mt-2">
                            <div>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.002649907863!2d107.57798561431687!3d-6.890284669338911!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e7fa1ebd851b%3A0xffa829084444bc68!2ssanbercode!5e0!3m2!1sen!2sid!4v1612503964225!5m2!1sen!2sid" width="250" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            </div>                               
                        </div>                            
                    </div>
                 </div> 

                 <div class="card mt-2">
                    <div class="card-body">
                        <button type="button" class="btn btn-info btnSecondary">
                            <i class="fas fa-address-card"></i>
                            Hubungi Kami
                        </button>
                        <div class="card mt-2 p-2">
                            <strong>
                                <p>Alamat :</p>
                            </strong>
                            <p>Jalan Sukasari I No.4, Sukawarna, Kec.Sukajadi, Bandung, Jawa Barat - 40161</p>

                            <strong>
                                <p>Contact :</p>
                            </strong>
                            <span>
                                <a href="">
                                    <i class="fa-2x fas fa-phone"></i>
                                </a>
                                <a href="">
                                    <i class="fa-2x fab fa-whatsapp"></i>
                                </a>
                                <a href="">
                                    <i class="fa-2x fab fa-instagram"></i>
                                </a>   
                                <a href="">
                                    <i class="fa-2x fab fa-facebook"></i>
                                </a>  
                                <a href="">
                                    <i class="fa-2x fab fa-youtube"></i>
                                </a>                               
                            </span>
                        </div>                            
                    </div>
                 </div> 
            </div>  
        </div>

        <div class="col-8 contentBerita">            
            <div class="card mb-3">
                <h5 class="card-title">Judul</h5>
                <p class="card-text">Ditulis Oleh :</p>
                <img src="{{ asset('frontend/img/1.jpeg') }}" class="card-img-top" alt="gambar1" style="height: 350px;">
               <div class="row">
                   <div class="col-4">
                       <img src="{{ asset('frontend/img/1.jpeg') }}" alt="" class="img-fluid img-thumbnail">
                   </div>
                   <div class="col-4">
                    <img src="{{ asset('frontend/img/1.jpeg') }}" alt="" class="img-fluid img-thumbnail">
                    </div>
                    <div class="col-4">
                        <img src="{{ asset('frontend/img/1.jpeg') }}" alt="" class="img-fluid img-thumbnail">
                    </div>
                </div>
                <div class="card-body">
                    <p class="card-text">Tanggal : </p>
                    <p class="card-text">Deskripsi</p>
                </div>
            </div>        
                <p>Kategori/Tags :</p>
                <button type="button" class="btn btn-success">covid19</button>         
        </div>
      </div>
</div>
@endsection