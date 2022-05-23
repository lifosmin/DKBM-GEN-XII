@extends('cms.base.app')

@section('custom-css')
  <style>
    .row1{
    text-align:center;
    margin:0 auto;
    }

    .row1 .col-lg-2{
      display:inline-block;
      vertical-align: middle;
      float: none;
    }

    .box {
      padding: 0 8px 0 8px;
    }
  </style>
@endsection

@section('content')
  <!-- ======= Hero Section ======= -->
  <section id="hero">

    <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
          <div data-aos="zoom-out">
            <h1>Dewan Keluarga Besar <span>Mahasiswa</span></h1>
            <h2>Universitas Multimedia Nusantara</h2>
            <div class="text-center text-lg-start">
              <a href="{{ route('resi') }}" class="btn-get-started scrollto">Check Your Aspirations</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
          <img src="{{ asset('img/kirim.png') }}" class="img animated" alt="" style="max-width: 450px;">
        </div>
      </div>
    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g>
    </svg>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row container m-auto">
          <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch" data-aos="fade-right" style="background-image: url('{{ asset('img/2021/Foto-bareng.png') }}');">
            <!-- <a href="https://youtu.be/ITz2WEf04os" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true" target="_blank"></a> -->
          </div>

          <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5" data-aos="fade-left">
            <h3>About Us</h3>
            <p>Dewan Keluarga Besar universitas Multimedia Nusantara (DKBM UMN) is the highest student organization in UMN which acts as a legislative and judicial body for UMN students. DKBM UMN was established on January 6, 2011 and has representatives from each faculty.</p>
            
            <h4>Vission</h4>
            <p>Our vision is to create a DKBM with integrity, transparent, active, and responsive in accommodating and realizing the aspirations of students for the common good.</p>
            
            <h4>Mission</h4>

            <div class="icon-box" data-aos="zoom-in" data-aos-delay="100" style="margin-top: 10px;">
              <div class="icon"><i class="bx bxs-hot"></i></div>
              <p class="description" style="margin-top: 8px;">Making DKBM a safe, responsive, and reliable place for student aspirations</p>
            </div>

            <div class="icon-box" data-aos="zoom-in" data-aos-delay="200" style="margin-top: 10px;">
              <div class="icon"><i class="bx bx-right-top-arrow-circle"></i></div>
              <p class="description" style="margin-top: 8px;">Become a communication bridge between students and the rectorate</p>
            </div>

            <div class="icon-box" data-aos="zoom-in" data-aos-delay="300" style="margin-top: 10px;">
              <div class="icon"><i class="bx bx-atom"></i></div>
              <p class="description" style="margin-top: 8px;">Improving DKBM performance in the supervisory function</p>
            </div>

            <div class="icon-box" data-aos="zoom-in" data-aos-delay="300" style="margin-top: 10px;">
              <div class="icon"><i class="bi bi-chat-dots"></i></div>
              <p class="description" style="margin-top: 8px;">Escalate communication and closeness between campus organizations</p>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Details Section ======= -->
    <section id="details" class="details">
      <div class="container">

        <div class="row content">
          <div class="col-md-4" data-aos="fade-right">
            <img src="{{ asset('img/dkbmmuda.jpg') }}" class="img-fluid" alt="">
          </div>
          <div class="col-md-8 pt-4" data-aos="fade-up">
            <h3>DKBM Muda</h3>
            <br>
            <h4>Activities</h4>
            <p>
              Recruit, select, and inaugurate D-Mud internally with the signature on the letter of agreement and the giving of D-Mud member card.
            </p>
            <h4>Goal</h4>
            <p>
              To create high quality member candidates for the next generation of DKBM or any other student organizations. 
            </p>
          </div>
        </div>

        <div class="row content">
          <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
            <img src="{{ asset('img/aspiration.png') }}" class="img-fluid" alt="">
          </div>
          <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
            <h3>Student Aspiration Week</h3>
            <br>
            <h4>Activities</h4>
            <ul>
              <li><i class="bi bi-check"></i> Hold a focus group discussion (FGD) or an open discussion forum with the students</li>
              <li><i class="bi bi-check"></i> Socialization about DKBM through</li>
              <li><i class="bi bi-check"></i> Wall Of Aspiration (Offline)</li>
              <li><i class="bi bi-check"></i> Twibbon competition to invite students to give aspirations through the aspiration form</li>
            </ul>
            <h4>Goal</h4>
            <p>
              To introduce DKBM to the students of Universitas Multimedia Nusantara and to invite students to discuss problems in their campus life, as well as strengthening between student and rectorate of Universitas Multimedia Nusantara.
            </p>
          </div>
        </div>

        <div class="row content">
          <div class="col-md-4" data-aos="fade-right">
            <img src="{{ asset('img/binhang.jpg') }}" class="img-fluid" alt="">
          </div>
          <div class="col-md-8 pt-5" data-aos="fade-up">
            <h3>Bincang Hangat</h3>
            <br>
            <h4>Activities</h4>
            <p>
              An open discussion form between students and rectorate
            </p>
            <br>
            <h4>Goal</h4>
            <ul>
              <li><i class="bi bi-check"></i> Bridging a connection between student to convey their aspirations to the rectorate</li>
              <li><i class="bi bi-check"></i> To accept direct answers from the rectorate</li>
              <li><i class="bi bi-check"></i> Strengthening the connection between student and the rectorate</li>
            </ul>
          </div>
        </div>

        <div class="row content">
          <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
            <img src="{{ asset('img/stuban.png') }}" class="img-fluid" alt="">
          </div>
          <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
            <h3>Comparative Study</h3>
            <br>
            <h4>Activities</h4>
            <p>
              Hold an online discussion with student organizations of other universities and visit student organizations of other universities.
            </p>
            <br>
            <h4>Goal</h4>
            <p>
              To develop DKBM performance or come up with innovations by looking for references from other universities, also to build a relationship with other universities.
            </p>
          </div>
        </div>

        <div class="row content">
          <div class="col-md-4" data-aos="fade-right">
            <img src="{{ asset('img/birthday.png') }}" class="img-fluid" alt="">
          </div>
          <div class="col-md-8 pt-4" data-aos="fade-up">
            <h3>DKBM Birthday</h3>
            <br>
            <h4>Activities</h4>
            <ul>
              <li><i class="bi bi-check"></i> Hold a discussion forum with former members of previous generations of DKBM</li>
              <li><i class="bi bi-check"></i> Hold a social or charity event (example: donation)</li>
              <li><i class="bi bi-check"></i> Make throwback video</li>
            </ul>
            <br>
            <h4>Goal</h4>
            <p>
              To earn perspectives from former members of previous generations of DKBM regarding solutions and problems on campus and bonding time among several generation of DKBM.
            </p>
          </div>
        </div>

        <div class="row content">
          <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
            <img src="{{ asset('img/journey.png') }}" class="img-fluid" alt="">
          </div>
          <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
            <h3>DKBM Journey</h3>
            <br>
            <h4>Activities</h4>
            <p>
              Technical briefing on work flow of divisions in dkbm and educate on what and how to develop DKBM into a better organization.
            </p>
            <br>
            <h4>Goal</h4>
            <p>
              To make sure that DKBM candidates are ready to carry out their duties in the next generation. 
            </p>
          </div>
        </div>

        <div class="row content">
          <div class="col-md-4" data-aos="fade-right">
            <img src="{{ asset('img/2021/logo-core.jpg') }}" class="img-fluid" alt="">
          </div>
          <div class="col-md-8 pt-4" data-aos="fade-up">
            <h3>CORE : Connect Communicate Collaborate</h3>
            <br>
            <h4>Activities</h4>
            <ul>
              <li><i class="bi bi-check"></i> To introduce the function of DKBM and BEM</li>
              <li><i class="bi bi-check"></i> Organizations sharing session</li>
              <li><i class="bi bi-check"></i> Organizations bonding time</li>
            </ul>
            <br>
            <h4>Goal</h4>
            <p>
            To introduce the difference between DKBM and BEM's function. Also, to build a bond and make a collaboration between organizations
            </p>
          </div>
        </div>
      </div>
    </section><!-- End Details Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Gallery</h2>
          <p>Our Activities</p>
        </div>

        <div class="row no-gutters" data-aos="fade-left">

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item d-flex justify-content-center" data-aos="zoom-in" data-aos-delay="100">
              <a href="{{ asset('img/gallery/gallery-1.JPG') }}" class="gallery-lightbox">
                <img src="{{ asset('img/gallery/gallery-1.JPG') }}" alt="" class="img-fluid" style="height: 160px;">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item d-flex justify-content-center" data-aos="zoom-in" data-aos-delay="150">
              <a href="{{ asset('img/gallery/gallery-2.JPG') }}" class="gallery-lightbox">
                <img src="{{ asset('img/gallery/gallery-2.JPG') }}" alt="" class="img-fluid" style="height: 160px;">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item d-flex justify-content-center" data-aos="zoom-in" data-aos-delay="200">
              <a href="{{ asset('img/gallery/gallery-3.JPG') }}" class="gallery-lightbox">
                <img src="{{ asset('img/gallery/gallery-3.JPG') }}" alt="" class="img-fluid" style="height: 160px;">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item d-flex justify-content-center" data-aos="zoom-in" data-aos-delay="250">
              <a href="{{ asset('img/gallery/gallery-4.png') }}" class="gallery-lightbox">
                <img src="{{ asset('img/gallery/gallery-4.png') }}" alt="" class="img-fluid" style="height: 160px;">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item d-flex justify-content-center" data-aos="zoom-in" data-aos-delay="300">
              <a href="{{ asset('img/gallery/gallery-5.png') }}" class="gallery-lightbox">
                <img src="{{ asset('img/gallery/gallery-5.png') }}" alt="" class="img-fluid" style="height: 160px;">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item d-flex justify-content-center" data-aos="zoom-in" data-aos-delay="350">
              <a href="{{ asset('img/gallery/gallery-6.png') }}" class="gallery-lightbox">
                <img src="{{ asset('img/gallery/gallery-6.png') }}" alt="" class="img-fluid" style="height: 160px;">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item d-flex justify-content-center" data-aos="zoom-in" data-aos-delay="400">
              <a href="{{ asset('img/gallery/gallery-7.jpg') }}" class="gallery-lightbox">
                <img src="{{ asset('img/gallery/gallery-7.JPG') }}" alt="" class="img-fluid" style="height: 160px;">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item d-flex justify-content-center" data-aos="zoom-in" data-aos-delay="450">
              <a href="{{ asset('img/gallery/gallery-8.jpg') }}" class="gallery-lightbox">
                <img src="{{ asset('img/gallery/gallery-8.JPG') }}" alt="" class="img-fluid" style="height: 160px;">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item d-flex justify-content-center" data-aos="zoom-in" data-aos-delay="450">
              <a href="{{ asset('img/gallery/gallery-8.jpg') }}" class="gallery-lightbox">
                <img src="{{ asset('img/2021/core-bem.png') }}" alt="" class="img-fluid" style="height: 160px;">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item d-flex justify-content-center" data-aos="zoom-in" data-aos-delay="450">
              <a href="{{ asset('img/gallery/gallery-8.jpg') }}" class="gallery-lightbox">
                <img src="{{ asset('img/2021/dkbm-muda.png') }}" alt="" class="img-fluid" style="height: 160px;">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item d-flex justify-content-center" data-aos="zoom-in" data-aos-delay="450">
              <a href="{{ asset('img/gallery/gallery-8.jpg') }}" class="gallery-lightbox">
                <img src="{{ asset('img/2021/foto-rapat.jpg') }}" alt="" class="img-fluid" style="height: 160px;">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item d-flex justify-content-center" data-aos="zoom-in" data-aos-delay="450">
              <a href="{{ asset('img/gallery/gallery-8.jpg') }}" class="gallery-lightbox">
                <img src="{{ asset('img/2021/rapat-lagi.png') }}" alt="" class="img-fluid" style="height: 160px;">
              </a>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Member</h2>
          <p>DKBM Gen XI Member</p>
        </div>

        <div class="row1" data-aos="fade-left" style="align-items: center; margin-bottom: 20px;">

          <div class="col-lg-2 col-md-6 mt-5 mt-md-0 box">
            <div class="member" data-aos="zoom-in" data-aos-delay="200">
              <div class="pic"><img src="{{ asset('img/2021/anggota/Jazzy.png') }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Jazzy Gratia</h4>
                <span>Ketua</span>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 mt-5 mt-lg-0 box">
            <div class="member" data-aos="zoom-in" data-aos-delay="400">
              <div class="pic"><img src="{{ asset('img/2021/anggota/Nisa.png') }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Nyi Ayu Shafannisa</h4>
                <span>Wakil Ketua</span>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 mt-5 mt-lg-0 box">
            <div class="member" data-aos="zoom-in" data-aos-delay="300">
              <div class="pic"><img src="{{ asset('img/2021/anggota/Anton.png') }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Antonius Kevin</h4>
                <span>Sekretaris & Bendahara</span>
              </div>
            </div>
          </div>

          

          <div class="col-lg-2 col-md-6 box">
            <div class="member" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic"><img src="{{ asset('img/2021/anggota/Diego.png') }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Benediktus Diego</h4>
                <span>Kesejahteraan Mahasiswa</span>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 mt-5 mt-lg-0 box">
            <div class="member" data-aos="zoom-in" data-aos-delay="400">
              <div class="pic"><img src="{{ asset('img/2021/anggota/Aurel.png') }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Anggrita Aurelia</h4>
                <span>Kesejahteraan Mahasiswa</span>
              </div>
            </div>
          </div>

          

        <div class="row1" data-aos="fade-left" style="align-items: center;">        
          <div class="col-lg-2 col-md-6 mt-5 mt-lg-0 box">
              <div class="member" data-aos="zoom-in" data-aos-delay="400">
                <div class="pic"><img src="{{ asset('img/2021/anggota/Cindy.png') }}" class="img-fluid" alt=""></div>
                <div class="member-info">
                  <h4>Cindy Lea Valerie</h4>
                  <span>Medkom</span>
                </div>
              </div>
            </div>
         
          <div class="col-lg-2 col-md-6 mt-5 mt-lg-0 box">
            <div class="member" data-aos="zoom-in" data-aos-delay="300">
              <div class="pic"><img src="{{ asset('img/2021/anggota/Linus.png') }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Linus Gregorius</h4>
                <span>Medkom</span>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 mt-5 mt-md-0 box">
            <div class="member" data-aos="zoom-in" data-aos-delay="200">
              <div class="pic"><img src="{{ asset('img/2021/anggota/Alivia.png') }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Alivia Syaidha</h4>
                <span>Medkom</span>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 mt-5 mt-lg-0 box">
            <div class="member" data-aos="zoom-in" data-aos-delay="400">
              <div class="pic"><img src="{{ asset('img/2021/anggota/Ricky.png') }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Ricky</h4>
                <span>Pengawasan BEM</span>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 box">
            <div class="member" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic"><img src="{{ asset('img/2021/anggota/Acel.png') }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Eleonora Axcel</h4>
                <span>Pengawasan BEM</span>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 box">
            <div class="member" data-aos="zoom-in" data-aos-delay="400">
              <div class="pic"><img src="{{ asset('img/2021/anggota/Sopia.png') }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Sopia Zalsabillah</h4>
                <span>Pengawasan BEM</span>
              </div>
            </div>
          </div>

         
        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>F.A.Q</h2>
          <p>Frequently Asked Questions</p>
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapsed" data-bs-target="#faq-list-1">What does DKBM do?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse" data-bs-parent=".faq-list">
                <ul>
                  <li><i class="bi bi-check"></i> Collect, process, and provide solutions to student aspirations</li>
                  <li><i class="bi bi-check"></i> Create, review, and revise legal products (GBHO, AD-ART, SOP, etc.)</li>
                  <li><i class="bi bi-check"></i> Supervise the performance of the executive at UMN</li>
                  <li><i class="bi bi-check"></i> Hold a meeting with the rectorate to discuss campus issues and student aspirations</li>
                </ul>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">What are the student's aspirations?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Hopes and goals for future success can be in the form of opinions, responses, evaluations and thoughts from students
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">What types of aspirations can be processed? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Academic, Non-Academic, Facility, and Activities.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">How to deliver aspirations to DKBM? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                <p>
                  It can be through the aspiration form available in the DKBM Instagram bio or by contacting the DKBM social media.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">How long is the term of office of DKBM? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                <p>
                  During 1 organizational management period or for 1 year.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="500">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-6" class="collapsed">Who can register to DKBM? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-6" class="collapse" data-bs-parent=".faq-list">
                <p>
                  UMN students who are taking semester 3 or 5, Minimum GPA 2.75, Never been subject to academic/non-academic sanctions, Not serving as a member of the campus media, Join a maximum of 2 organizations, Pass Student Orientation.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="600">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-7" class="collapsed">What divisions does DKBM have?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-7" class="collapse" data-bs-parent=".faq-list">
                <p>
                  DKBM has 4 divisions, namely: BPH division (Daily Management Body), PB division (BEM Supervision), Kesma division (Student welfare), and Medkom division (Communication and information media).
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="700">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-8" class="collapsed">How busy is DKBM?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-8" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Sometimes it's busy, sometimes it's not. When approaching a major work program, of course, we will be busy planning and preparing everything. When there are aspirations/cases that come in, we will definitely hold many meetings with various related parties. During the week we usually only hold regular meetings.
                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section><!-- End F.A.Q Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </div>

        <div class="row">

          <div class="col-lg-4" data-aos="fade-right" data-aos-delay="100">
            <div class="info">
              <a href="https://goo.gl/maps/Hd1PddUoCqLSEVLP6">
                <div class="address">
                  <i class="bi bi-geo-alt"></i>
                  <h4>Location:</h4>
                  <p>New Media Tower, C306 <br>Universitas Multimedia Nusantara</p>
                </div>
              </a>

              <a href="mailto:dkbm@umn.ac.id">
                <div class="email">
                  <i class="bi bi-envelope"></i>
                  <h4>Email:</h4>
                  <p>dkbm@umn.ac.id</p>
                </div>
              </a>

              <a href="https://instagram.com/dkbmumn">
                <div class="phone" >
                  <i class="bi bi-phone"></i>
                  <h4>Instagram:</h4>
                  <p>@dkbmumn</p>
                </div>
              </a>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="200">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.0483694725717!2d106.61609671431056!3d-6.257358863004425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fb56b25975f9%3A0x50c7d605ba8542f5!2sMultimedia%20Nusantara%20University!5e0!3m2!1sen!2sid!4v1631263243622!5m2!1sen!2sid" height="100%" width="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>
          

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
@endsection

@section('custom-js')

@endsection