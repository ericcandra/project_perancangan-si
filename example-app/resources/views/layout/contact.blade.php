
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>bengkel al auto Speed</title>
  <meta name="description" content="">
  <meta name="keywords" content=""> 

  <!-- Favicons -->
  <link href={{url ("assets/img/favicon.png")}} rel="icon">
  <link href={{url ("assets/img/apple-touch-icon.png")}} rel="apple-touch-icon">

  <!-- Fonts -->
  <link href={{url ("https://fonts.googleapis.com")}} rel="preconnect">
  <link href={{url ("https://fonts.gstatic.com")}} rel="preconnect" crossorigin>
  <link href={{url ("https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap")}} rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href={{url ("assets/vendor/bootstrap/css/bootstrap.min.css")}} rel="stylesheet">
  <link href={{url ("assets/vendor/bootstrap-icons/bootstrap-icons.css")}} rel="stylesheet">
  <link href={{url ("assets/vendor/aos/aos.css")}} rel="stylesheet">
  <link href={{url ("assets/vendor/animate.css/animate.min.css")}} rel="stylesheet">
  <link href={{url ("assets/vendor/glightbox/css/glightbox.min.css")}} rel="stylesheet">
  <link href={{url ("assets/vendor/swiper/swiper-bundle.min.css")}} rel="stylesheet">

  <!-- Main CSS File -->
  <link href={{url ("assets/css/main.css")}} rel="stylesheet">

</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

        {{-- <div class="col-3 col-lg-3">
          <h1 class="my-0 site-logo"><img src="{{url('images')}}/speed.jpg" width="50%" height="80px">
            
        </div> --}}
      
      <a href class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">Bengkel Al auto Speed</h1>
      </a>
      <div class="col-3 col-lg-3">
        <h1 class="my-0 site-logo"><img src="{{url('images')}}/speed.jpg" width="50%" height="80px">
          {{-- <a href="{{url ('index.html')}}"></a></h1> --}}
      </div>
      

      <nav id="navmenu" class="navmenu">
        <ul>
          <li class="nav-item">
            <a class="nav-link" href="{{url('home')}}">
              <i class="mdi mdi-view-quilt menu-icon"></i>
              <span class="menu-title">Home</span>
            </a>
          </li>
          {{-- <li><a href="{{url ('home')}}" class="active">Home</a></li> --}}
          {{-- <li class="nav-item">
            <a class="nav-link" href="{{url('about')}}">
              <i class="mdi mdi-view-quilt menu-icon"></i>
              <span class="menu-title">About</span>
            </a>
          </li> --}}
          {{-- <li><a href="{{url ('about')}}">About</a></li> --}}
          <li class="nav-item">
            <a class="nav-link" href="{{url('produk')}}">
              <i class="mdi mdi-view-quilt menu-icon"></i>
              <span class="menu-title">Produk</span>
            </a>
          </li>
          {{-- <li><a href="{{url ('produk')}}">Produk</a></li> --}}
          <li class="nav-item">
            <a class="nav-link" href="{{url('stok')}}">
              <i class="mdi mdi-view-quilt menu-icon"></i>
              <span class="menu-title">Stok</span>
            </a>
          </li>
          {{-- <li><a href="{{url ('stok')}}">Stok</a></li> --}}
          <li class="nav-item">
            <a class="nav-link" href="{{url('transaksi')}}">
              <i class="mdi mdi-view-quilt menu-icon"></i>
              <span class="menu-title">Transaksi</span>
            </a>
          </li>
        </li>
        {{-- <li><a href="{{url ('stok')}}">Stok</a></li> --}}
        <li class="nav-item">
          <a class="nav-link" href="{{url('notifikasi')}}">
            <i class="mdi mdi-view-quilt menu-icon"></i>
            <span class="menu-title">Notifikasi</span>
          </a>
        </li>
          {{-- <li><a href="{{url ('transaksi')}}">Transaksi</a></li> --}}
          <li class="nav-item">
            <a class="nav-link" href="{{url('riwayat')}}">
              <i class="mdi mdi-view-quilt menu-icon"></i>
              <span class="menu-title">Riwayat</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('contact')}}">
              <i class="mdi mdi-view-quilt menu-icon"></i>
              <span class="menu-title">Contact</span>
            </a>
          </li>
          {{-- <li><a href="{{url ('laporan')}}">Laporan</a></li> --}}
          {{-- <li><a href="{{url ('#contact')}}">Contact</a></li> --}}
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <main class="main">
       <!-- Hero Section -->
  <section id="hero" class="hero section dark-background">

      <div id="hero-carousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">

        <!-- Slide 1 -->
        <div class="carousel-item active">
          <div class="carousel-container">
            <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Bengkel Al auto Speed</span></h2>
            <p class="animate__animated animate__fadeInUp">Bengkel mobil kami adalah tempat di mana kendaraan diperbaiki atau mendapatkan perawatan. Bengkel ini biasanya menawarkan berbagai layanan untuk kendaraan, seperti perbaikan mesin, ganti oli, perbaikan rem, pemeriksaan AC, hingga perbaikan body kendaraan.</p>
            <a href={{url ("home")}} class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
          </div>
        </div>


        <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>

      <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
        <defs>
          <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></path>
        </defs>
        <g class="wave1">
          <use xlink:href="#wave-path" x="50" y="3"></use>
        </g>
        <g class="wave2">
          <use xlink:href="#wave-path" x="50" y="0"></use>
        </g>
        <g class="wave3">
          <use xlink:href="#wave-path" x="50" y="9"></use>
        </g>
      </svg>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="main-panel">
        <div class="content-wrapper">
            @yield('content')
        </div>
      </div>

      
          

  </main>

  <footer id="footer" class="footer dark-background">
    <div class="container">
      <h3 class="sitename">Bengkel Al auto Speed</h3>
      <p>Untuk Informasi lebih lanjut bisa hubungi kami melalui media sosial media kami di bawah ini</p>
      <div class="social-links d-flex justify-content-center">
        <a href={{url ("")}}><i class="bi bi-twitter-x"></i></a>
        <a href={{url ("")}}><i class="bi bi-facebook"></i></a>
        <a href={{url ("")}}><i class="bi bi-instagram"></i></a>
        <a href={{url ("")}}><i class="bi bi-linkedin"></i></a>
      </div>
      <div class="container">
        <div class="copyright">
          <span>Copyright</span> <strong class="px-1 sitename">Bengkel Al auto Speed</strong> <span>All Rights Reserved</span>
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you've purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
          Designed by <a href="https://bootstrapmade.com/">Team ENAPY</a> Distributed By <a href="https://themewagon.com">Multi Data Palembang</a>
        </div>
      </div>
    </div>
  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>

