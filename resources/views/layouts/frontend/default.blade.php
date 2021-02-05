<!DOCTYPE html>
<html lang="en">
<head>
    @include ('includes.frontend.meta')
    @stack('before-style')
    @include ('includes.frontend.styles')
    @stack('after-style')   
</head>
<body>
    <!-- Navbar -->
    @include ('includes.frontend.navbar')
    <!-- Akhir Navbar -->

    <!-- Jumbotron -->
    <div class="jumbotron">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col">
                    <h1 class="">Selamat Datang</h1>
                    <p class="lead">Di Website Resmi Kelurahan Sanbercode</p>        
                    <p>Menuju Kelurahan Digital Revolusi Industri 4.0</p>
                    <a class="btn btn-primary btn-lg btnPrimary" href="#" role="button">Dapatkan Berita Terkini</a>
                </div>
                <div class="col">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="{{ asset('frontend/img/1.jpeg') }}" class="d-block w-100" alt="carousel1">
                          </div>
                          <div class="carousel-item">
                            <img src="{{ asset('frontend/img/2.jpeg') }}" class="d-block w-100" alt="carousel2">
                          </div>
                          <div class="carousel-item">
                            <img src="{{ asset('frontend/img/3.jpeg') }}" class="d-block w-100" alt="carousel3">
                          </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>                
            </div>            
        </div>        
    </div>
    <!-- Akhir Jumbotron -->

    <!-- Sambutan Lurah -->
    <div class="sambutan">
        <div class="container">
            <div class="row">
                <div class="col">
                    <img src="{{ asset('frontend/img/lurah.png') }}" alt="lurah" class="lurah">
                </div>
            </div>
            <div class="row sambutan-lurah">
                <div class="col">
                    <p>
                        Rasa syukur terbesar selalu terhaturkan kepada Allah SWT, karena nikmat kesehatan dan kesempatan dari-Nya, masyarakat kelurahan <strong>Sanbercode</strong>  tetap bersemangat menuju hidup sehat. Selamat datang di situs resmi Website Kelurahan Sanbercode. Website Kelurahan Ssanbercode ini memuat Profil Kelurahan Sanbercode dan informasi penting berbagai program dan kegiatan Kelurahan Sanbercode, Kami harap website ini dapat bermanfaat dalam memberikan data dan informasi yang dapat digunakan oleh masyarakat.
                    </p>
                    <p>
                       <strong>
                        Lurah Sanbercode 
                        <br>
                        Muhammad Abduh
                       </strong> 
                    </p>
                </div>
            </div>
        </div>       
    </div>
    <!-- Akhir Sambutan Lurah -->

    <!-- Content -->
        @yield('content')
    <!-- Akhir Content -->

    <!-- Footer -->
        @include ('includes.frontend.footer')
    <!-- Akhir Footer -->

    @stack('before-scripts')
    @include ('includes.frontend.scripts')
    @stack('after-scripts')
    
</body>
</html>