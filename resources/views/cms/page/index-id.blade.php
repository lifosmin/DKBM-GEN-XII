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
              <a href="#about" class="btn-get-started scrollto">Profil</a>
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
            <!-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a> -->
          </div>

          <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5" data-aos="fade-left">
            <h3>Profil</h3>
            <p>Dewan Keluarga Besar universitas Multimedia Nusantara (DKBM UMN) adalah organisasi kemahasiswaan tertinggi di UMN yang bertindak sebagai badan legislatif dan yudikatif mahasiswa UMN. DKBM UMN berdiri pada tanggal 6 Januari 2011 dan memiliki perwakilan dari tiap fakultas.</p>
            
            <h4>Visi</h4>
            <p>Visi kami adalah mewujudkan DKBM menjadi organisasi yang transparan,kredibel,memiliki kompetensi dan menjadi jembatan aspirasi mahasiswa dengan rektorat demi tercapainya kesejahteraan bersama.</p>
            
            <h4>Misi</h4>

            <div class="icon-box" data-aos="zoom-in" data-aos-delay="100" style="margin-top: 10px;">
              <div class="icon"><i class="bx bxs-hot"></i></div>
              <p class="description" style="margin-top: 8px;">Memperjuangkan aspirasi KBM UMN dengan kritis dan penuh transparansi sehingga dapat menjunjung tinggi kesejahteraan KBM UMN</p>
            </div>

            <div class="icon-box" data-aos="zoom-in" data-aos-delay="200" style="margin-top: 10px;">
              <div class="icon"><i class="bx bx-right-top-arrow-circle"></i></div>
              <p class="description" style="margin-top: 8px;">Meningkatkan kesadaran dan keikutsertaan KBM UMN terhadap proses demokrasi kampus</p>
            </div>

            <div class="icon-box" data-aos="zoom-in" data-aos-delay="300" style="margin-top: 10px;">
              <div class="icon"><i class="bx bx-atom"></i></div>
              <p class="description" style="margin-top: 8px;">Memperkuat hubungan dan koordinasi antar organisasi dan juga komunitas KBM UMN</p>
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
            <h4>Bentuk Kegiatan</h4>
            <p>
              Merekrut, menyeleksi dan melantik anggota muda DKBM secara internal dengan tanda tangan surat perjanjian dan pengalungan KTA Angmud.
            </p>
            <h4>Tujuan</h4>
            <p>
              Menciptakan calon-calon anggota DKBM generasi selanjutnya yang berkualitas tinggi
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
            <h4>Bentuk Kegiatan</h4>
            <ul>
              <li><i class="bi bi-check"></i> Mengadakan FGD bertema “Curhat Dengan DKBM” bersama KBM UMN</li>
              <li><i class="bi bi-check"></i> Sosialisasi mengenai DKBM melalui sosial media milik DKBM</li>
              <li><i class="bi bi-check"></i> Wall Of Aspiration</li>
              <li><i class="bi bi-check"></i> Lomba twibbon untuk mengajak mahasiswa memberi aspirasi melalui form aspirasi</li>
            </ul>
            <h4>Tujuan</h4>
            <p>
              Memperkenalkan DKBM pada KBM UMN dan mengajak KBM UMN untuk berdiskusi mengenai permasalahan di kampus, serta mempererat hubungan KBM UMN dengan rektorat.
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
            <h4>Bentuk Kegiatan</h4>
            <p>
              Diskusi terbuka dengan pihak rektorat
            </p>
            <br>
            <h4>Tujuan</h4>
            <ul>
              <li><i class="bi bi-check"></i> Menjembatani KBM UMN untuk menyampaikan aspirasi kepada pihak rektorat</li>
              <li><i class="bi bi-check"></i> Mendapat jawaban langsung atas aspirasi mereka dari pihak rektorat</li>
              <li><i class="bi bi-check"></i> Mempererat hubungan KBM UMN dengan pihak rektorat</li>
            </ul>
          </div>
        </div>

        <div class="row content">
          <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
            <img src="{{ asset('img/stuban.png') }}" class="img-fluid" alt="">
          </div>
          <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
            <h3>Studi Banding</h3>
            <br>
            <h4>Bentuk Kegiatan</h4>
            <p>
              Berdiskusi dengan organisasi kemahasiswaan milik kampus lain secara online. Melakukan kunjungan ke kampus lain (offline).
            </p>
            <br>
            <h4>Tujuan</h4>
            <p>
              Mengembangkan kinerja DKBM atau menciptakan inovasi-inovasi baru dengan cara mencari referensi dari kampus-kampus lain, selain itu dapat juga membangun relasi dengan kampus lain.
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
            <h4>Bentuk Kegiatan</h4>
            <ul>
              <li><i class="bi bi-check"></i> Berdiskusi dengan gen atas sekaligus merayakan ulang tahun DKBM</li>
              <li><i class="bi bi-check"></i> Membuat acara sosial (contoh : donasi)</li>
              <li><i class="bi bi-check"></i> Membuat video kenangan</li>
            </ul>
            <br>
            <h4>Tujuan</h4>
            <p>
              Mendapatkan pandangan mengenai solusi permasalahan kehidupan sebagai mahasiswa di berbagai generasi serta Bonding antara anggota DKBM.
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
            <h4>Bentuk Kegiatan</h4>
            <p>
              Pembekalan teknis cara kerja per divisi di DKBM dan pendidikan mengenai apa yang harus dilakukan untuk mengembangkan dan memajukan organisasi
            </p>
            <br>
            <h4>Tujuan</h4>
            <p>
              Agar calon DKBM siap untuk mengemban tugas di DKBM.
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
            <h4>Bentuk Kegiatan</h4>
            <ul>
              <li><i class="bi bi-check"></i> Memperkenalkan fungsi DKBM dan BEM</li>
              <li><i class="bi bi-check"></i> Sharing organisasi</li>
              <li><i class="bi bi-check"></i> Bonding organisasi</li>
            </ul>
            <br>
            <h4>Tujuan</h4>
            <p>
            Memperkenalkan perbedaan fungsi DKBM dan BEM, serta membangun kedekatan dan kolaborasi antar organisasi.
            </p>
          </div>
        </div>
      </div>
    </section><!-- End Details Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Galeri</h2>
          <p>Dokumentasi Kegiatan</p>
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
                <img src="{{ asset('img/gallery/gallery-7.jpg') }}" alt="" class="img-fluid" style="height: 160px;">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item d-flex justify-content-center" data-aos="zoom-in" data-aos-delay="450">
              <a href="{{ asset('img/gallery/gallery-8.jpg') }}" class="gallery-lightbox">
                <img src="{{ asset('img/gallery/gallery-8.jpg') }}" alt="" class="img-fluid" style="height: 160px;">
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
          <h2>Anggota</h2>
          <p>Anggota DKBM Gen XI</p>
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
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapsed" data-bs-target="#faq-list-1">DKBM ngapain aja sih?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse" data-bs-parent=".faq-list">
                <ul>
                  <li><i class="bi bi-check"></i> Mengumpulkan, memproses, dan memberi solusi aspirasi mahasiswa</li>
                  <li><i class="bi bi-check"></i> Membuat, mengkaji, dan merevisi produk hukum (GBHO, AD-ART, SOP, dsb)</li>
                  <li><i class="bi bi-check"></i> Mengawasi kinerja eksekutif di UMN</li>
                  <li><i class="bi bi-check"></i> Mengadakan pertemuan dengan rektor untuk membahas isu kampus dan aspirasi mahasiswa</li>
                </ul>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Aspirasi mahasiswa tuh apa?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Harapan dan tujuan untuk keberhasilan pada masa yang akan datang dapat berupa opini, tanggapan, evaluasi dan pemikiran dari mahasiswa.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Jenis aspirasi yang di proses? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Akademik, Non-Akademik, Fasilitas, and Aktivitas.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Bagaimana cara menyampaikan aspirasi ke DKBM ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Bisa melalui form aspirasi yang tersedia di bio instagram DKBM atau dengan menghubungi media sosial DKBM.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Berapa lama masa jabatan DKBM ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Selama 1 periode kepengurusan organisasi atau selama 1 tahun.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="500">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-6" class="collapsed">Siapa aja yang boleh daftar ke DKBM ?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-6" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Mahasiswa UMN yang sedang menempuh semester 3 atau 5. Minimal IPK 2,75. Tidak pernah dikenakan sanksi akademik / non akademik. Tidak menjabat sebagai anggota media kampus. Mengikuti maksimal 2 organisasi. Lulus OMB.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="600">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-7" class="collapsed">DKBM punya divisi apa aja sih?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-7" class="collapse" data-bs-parent=".faq-list">
                <p>
                  DKBM punya 4 divisi, yaitu : divisi BPH (Badan Pengurus Harian), divisi PB (Pengawasan BEM), divisi Kesma (Kesejahteraan mahasiswa), dan divisi Medkom (Media komunikasi dan informasi).
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="700">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-8" class="collapsed">Jadi DKBM sibuk ga ya?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-8" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Ada kalanya sibuk, ada kalanya tidak. Saat menjelang program kerja besar tentunya kita akan sibuk merencanakan dan menyiapkan segala hal. Saat ada aspirasi/kasus yang masuk pasti kita akan banyak mengadakan pertemuan dengan berbagai pihak terkait. Saat minggu-minggu biasa kita hanya mengadakan rapat rutin.
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
          <h2>Kontak</h2>
          <p>Kontak Kami</p>
        </div>

        <div class="row">

          <div class="col-lg-4" data-aos="fade-right" data-aos-delay="100">
            <div class="info">
              <a href="https://goo.gl/maps/Hd1PddUoCqLSEVLP6">
                <div class="address">
                  <i class="bi bi-geo-alt"></i>
                  <h4>Lokasi:</h4>
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
          
          <!--<div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="200">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>-->

        </div>

      </div>
    </section><!-- End Contact Section -->
    
  </main><!-- End #main -->
@endsection

@section('custom-js')

@endsection