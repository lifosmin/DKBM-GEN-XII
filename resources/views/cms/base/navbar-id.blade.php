<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="{{ route('home') }}"><span>DKBM UMN</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="{{ route('home') }}"><img src="{{ asset('img/logo.png') }}" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <!-- <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
          <li><a class="nav-link scrollto" href="#about">Profil</a></li>
          <li><a class="nav-link scrollto" href="#details">Kegiatan</a></li>
          <li><a class="nav-link scrollto" href="#gallery">Galeri</a></li>
          <li><a class="nav-link scrollto" href="#team">Anggota</a></li>
          <li><a class="nav-link scrollto" href="#faq">FAQ</a></li>
          <li><a class="nav-link scrollto" href="#contact">Kontak</a></li> -->
          <li class="nav-item dropdown">
            <a class="nav-link scrollto active dropdown-toggle" id="dropdown09" data-toggle="dropdown" aria-haspopup="true" data-bs-auto-close="true" aria-expanded="false"> </span>Beranda</a>
            <div class="dropdown-menu menuHome" aria-labelledby="dropdown09">
              <a class="dropdown-item nav-link scrollto active bi-house-door" href="#hero">Beranda</a>
              <a class="dropdown-item nav-link scrollto bi bi-person-check-fill" href="#about">Profil</a>
              <a class="dropdown-item nav-link scrollto bi bi-journal-bookmark" href="#details">Kegiatan</a>
              <a class="dropdown-item nav-link scrollto bi bi-images" href="#gallery">Galeri</a>
              <a class="dropdown-item nav-link scrollto bi bi-people-fill" href="#team">Anggota</a>
              <a class="dropdown-item nav-link scrollto bi bi-question-circle-fill" href="#faq">FAQ</a>
              <a class="dropdown-item nav-link scrollto bi bi-telephone-fill" href="#contact">Kontakk</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="{{ route('home-id') }}" id="dropdown09" data-toggle="dropdown" aria-haspopup="true" data-bs-auto-close="true" aria-expanded="false"> </span> Indonesia</a>
            <div class="dropdown-menu" aria-labelledby="dropdown09">
                <a class="dropdown-item" href="{{ route('home') }}" style="color: black; padding-right:10px;"><span class="flag-icon flag-icon-us"> </span>  English</a>
                <a class="dropdown-item active" href="{{ route('home-id') }}" style="color: black; padding-right:10px;"><span class="flag-icon flag-icon-id"> </span>  Indonesia</a>
            </div>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->