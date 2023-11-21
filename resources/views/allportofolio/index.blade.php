
<!DOCTYPE html>
<html lang="en">
    

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>CV. Adino Graha Mandiri</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
<!-- Favicons -->
<link href="{{asset('assets/img/icon.png')}}" rel="icon">
<link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">


  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
  <link href="{{asset('style.css')}}" rel="stylesheet">

</head>


<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="{{route('home')}}"><img width="150" src="{{asset('assets/img/logo.png')}}" alt=""></a></h1>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="{{route('home')}}">Beranda</a></li>
          <li><a class="nav-link scrollto" href="{{route('home')}}">Tentang</a></li>
          <li><a class="nav-link scrollto" href="{{route('home')}}">Layanan</a></li>
          <li><a class="nav-link scrollto" href="{{route('home')}}">Portfolio</a></li>
          <li><a class="nav-link scrollto" href="{{route('home')}}">Testimoni</a></li>
          <li><a class="getstarted scrollto" href="{{route('home')}}">Konsultasi Gratis <i class="fas fa-phone"></i></a></li>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->


  <main id="main">

     <!-- ======= Portfolio Section ======= -->
     <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2 style="margin-top:50px;">Portofolio</h2>
        </div>

        
        <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
                <li data-filter="*" class="filter-active">All</li>
            @foreach($categories as $category)
                <li data-filter=".filter-{{ strtolower($category->nama_kategori) }}">{{ $category->nama_kategori }}</li>
            @endforeach
        </ul>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
            @foreach($portofolios as $portfolio)
                <div class="col-lg-4 col-md-6 portfolio-item filter-{{ strtolower($portfolio->kategori->nama_kategori) }}">
                    <div class="portfolio-img"><img src="{{ asset('storage/' . $portfolio->image_path) }}" class="img-fluid" alt=""></div>
                    <div class="portfolio-info">
                        <h4>{{ $portfolio->judul }}</h4>
                        <p>{{ $portfolio->kategori->nama_kategori }}</p>
                        <a href="{{ asset('storage/' . $portfolio->image_path) }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="{{ $portfolio->judul }}"><i class="bx bx-plus"></i></a>
                    </div>
                </div>
            @endforeach
        </div>


</div>

      </div>
    </section><!-- End Portfolio Section -->



  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 d-flex justify-content-center ">
            <img src="{{asset('assets/img/logo.png')}}" alt="">
          </div>

          <div class="col-lg-4 d-flex justify-content-center footer-links">
          <div class="social-links d-flex mt-4">
            <a href="#" class="youtube"><i class="bi bi-youtube"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="tiktok"><i class="bi bi-tiktok"></i></a>
          </div>
          </div>

          <div class="col-lg-4 text-end">
         
            <div class="mb-10">
              <a style="font-size:18px;" href="#">Jl. Mangga, Kota Padang, Sumatera Barat</a> <br>
            </div>
           <div>
              <a style="font-size:18px;" href="#">info@kontraktorkotapadang.com</a> <br>
           </div>
           <div>
            <a style="font-size:18px;" href="#">+62 812-7013-0782</a>
           </div>
         
          </div>

        </div>
      </div>
    </div>

    <div class="container d-flex justify-content-center footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>2023</span></strong> Adino Graha Mandiri | Powered by PT Metro Indonesia Software
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/waypoints/noframework.waypoints.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>
  

</body>

</html>