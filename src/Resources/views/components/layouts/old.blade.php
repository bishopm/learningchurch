<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>LearningChurch</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('learningchurch/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('learningchurch/css/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('learningchurch/css/aos.css')}}" rel="stylesheet">
  <link href="{{asset('learningchurch/css/swiper-bundle.min.css')}}" rel="stylesheet">
  <link href="{{asset('learningchurch/css/glightbox.min.css')}}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{asset('learningchurch/css/main.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Blogy
  * Template URL: https://bootstrapmade.com/blogy-bootstrap-blog-template/
  * Updated: Feb 22 2025 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header position-relative">
    <div class="container-fluid container-xl position-relative">
      <div class="top-row d-flex align-items-center justify-content-between">
        <a href="{{url('/')}}" class="logo d-flex align-items-end">
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <img src="{{asset('learningchurch/images/logo.png')}}" alt="LearningChurch Logo">
          <h4 class="sitename">LearningChurch</h4>
        </a>
        <div class="d-flex align-items-center">
          @livewire('search')          
        </div>
      </div>

    </div>

    <div class="nav-wrap">
      <div class="container d-flex justify-content-center position-relative">
        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="{{url('/')}}">Home</a></li>
            <li><a href="{{url('/about')}}">About</a></li>
            <li><a href="{{url('/blog')}}">Blog</a></li>
            <li><a href="{{url('/liturgy')}}">Liturgy</a></li>
            <li><a href="{{url('/videos')}}">Videos</a></li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
      </div>
    </div>

  </header>

  <main class="main">

    {{$slot}}

  </main>

  <footer id="footer" class="footer">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="{{url('/')}}" class="logo d-flex align-items-center">
            <span class="sitename">LearningChurch</span>
          </a>
          <div class="footer-contact pt-3">
            <p><strong>Email:</strong> <span>hello@learningchurch.org</span></p>
          </div>
          <div class="social-links d-flex mt-4">
            <a target="_blank" href="https://www.facebook.com/LearningChurch" class="facebook"><i class="bi bi-facebook"></i></a>
            <a target="_blank" href="https://www.youtube.com/@LearningChurch" class="youtube"><i class="bi bi-youtube"></i></a>
            <a target="_blank" href="https://www.instagram.com/LearningChurch" class="instagram"><i class="bi bi-instagram"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Menu</h4>
          <ul>
            <li><a href="{{url('/')}}">Home</a></li>
            <li><a href="{{url('/about')}}">About</a></li>
            <li><a href="{{url('/blog')}}">Blog</a></li>
            <li><a href="{{url('/liturgy')}}">Liturgy</a></li>
            <li><a href="{{url('/videos')}}">Videos</a></li>
          </ul>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">LearningChurch</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        Based on the Blogy theme designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <script src="{{asset('learningchurch/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('learningchurch/js/aos.js')}}"></script>
  <script src="{{asset('learningchurch/js/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('learningchurch/js/glightbox.min.js')}}"></script>

  <!-- Main JS File -->
  <script src="{{asset('learningchurch/js/main.js')}}"></script>

</body>

</html>