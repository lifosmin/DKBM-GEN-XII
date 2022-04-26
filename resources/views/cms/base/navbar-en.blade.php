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
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#details">Programs</a></li>
          <li><a class="nav-link scrollto" href="#gallery">Gallery</a></li>
          <li><a class="nav-link scrollto" href="#team">Member</a></li>
          <li><a class="nav-link scrollto" href="#faq">FAQ</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="{{ route('home') }}" id="dropdown09" data-toggle="dropdown" aria-haspopup="true" data-bs-auto-close="true" aria-expanded="false"> </span> English</a>
            <div class="dropdown-menu" aria-labelledby="dropdown09">
                <a class="dropdown-item active" href="{{ route('home') }}" style="color: black; padding-right:10px;"><span class="flag-icon flag-icon-us"> </span>  English</a>
                <a class="dropdown-item" href="{{ route('home-id') }}" style="color: black; padding-right:10px;"><span class="flag-icon flag-icon-id"> </span>  Indonesia</a>
            </div>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->