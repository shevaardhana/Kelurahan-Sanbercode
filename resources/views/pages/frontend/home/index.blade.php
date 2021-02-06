@extends('layouts.frontend.default')

@section('title', 'Beranda')

@section('content')
@include ('includes.frontend.jumbotron')
@include ('includes.frontend.sambutan')
<div class="content mt-5 p-5">
        <div class="row">
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

            <!-- berita -->
            <div class="col-9">
                <div class="row d-flex justify-content-center" id="news">
                    <h2>Berita Terkini</h2>
                </div>
                <div class="row">               
                @foreach ($items as $item)                 
                    <div class="col-lg-6">
                        <div class="card shadow mb-4 card-img-home" style="">
                            <img src="{{ $item->galleries->count() ? Storage::url($item->galleries->first()->image) : '' }}" class="card-img-top" alt="{{ $item->title }}">
                            <div class="card-body" style="height: 300px;">
                              <h5 class="card-title">{{ $item->title }}</h5>                          
                              <p class="card-title"> Ditulis Oleh : {{ $item->user->name }} </p>
                              <p class="card-text">
                                <i class="fas fa-calendar-week"></i>
                               {{ \Carbon\Carbon::create($item->date)->isoFormat('dddd, D MMMM Y')}} 
                              </p>
                              <p class="card-text">{!! (str_word_count($item->descriptions) > 60 ? substr($item->descriptions, 0,200)." [...]." :($item->descriptions))  !!}</p>                              
                            </div>
                            <div class="d-flex justify-content-center" style="padding-bottom: 10px;">
                                    <a href=" {{ route('detail.berita', $item->slug) }} " 
                                       class="btn btn-primary btnPrimary"  target="_blank" 
                                       >
                                       Baca Selengkapnya ...
                                    </a>
                              </div>
                        </div>
                    </div>
                @endforeach

                    <!-- <div class="col-lg-6">
                        <div class="card mb-4" style="">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary btnPrimary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card mb-4" style="">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary btnPrimary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card mb-4" style="">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary btnPrimary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card mb-4" style="">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary btnPrimary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card mb-4" style="">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary btnPrimary">Go somewhere</a>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
</div>

@endsection