<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light navbar-bg">
        <div class="container">
            <a class="navbar-brand" href=" {{ route('home') }} ">
                <img src="{{ asset('frontend/img/logo1.png') }}" alt="navbar-brand">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="nav navbar-nav text-uppercase mx-auto">
                <li class="nav-item">
                  <a class="nav-link mr-5 text-white @if(Request::is('/')) active @endif"
                     href=" {{ route('home') }} ">Beranda <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle mr-5 text-white  @if(Request::is('detailpegawaiprofile')) active @endif"
                      href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Profile
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href=" {{ route('detail.pegawai') }} ">Data Pegawai</a>
                      <a class="dropdown-item" href="#">Struktur Organisasi</a>
                    </div>
                  </li>
                <li class="nav-item">
                  <a class="nav-link text-white @if(Request::is('detailpenduduk')) active @endif"
                     href="{{ route('detail.penduduk') }}">Data Penduduk</a>
                </li>
              </ul>
            </div>
        </div>
</nav>
