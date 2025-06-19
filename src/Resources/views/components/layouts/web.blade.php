<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>LearningChurch</title>
  <meta name="description" content="LearningChurch: we make practical resources for the local church. Browse our site for lectionary devotionals, ministry and tech training.">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="{{asset('learningchurch/img/favicon.png')}}" rel="icon">
  <link href="{{asset('learningchurch/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&amp;family=Oswald:wght@700&amp;display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('learningchurch/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('learningchurch/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('learningchurch/vendor/aos/aos.css')}}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{asset('learningchurch/css/main.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: ZenBlog
  * Template URL: https://bootstrapmade.com/zenblog-bootstrap-blog-template/
  * Updated: Aug 08 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container position-relative d-flex align-items-center justify-content-between">
      <a href="{{url('/')}}" class="logo d-flex align-items-center me-auto me-xl-0">
        <img src="https://learningchurch.org/themes/learningchurch/assets/images/lc.png"> 
        <span class="text-white" style="font-family:'Oswald'">LearningChurch</span>
      </a>
      <nav id="navmenu" class="navmenu">
        <ul>
          <li class="text-white dropdown">
            <a class="text-white" href="https://web.archive.org/web/20240901020849/https://learningchurch.org/blog">
              <b>Blogs</b>
            </a>
            <ul class="dropdown-menu dropdown-menu-right">
              <li><a class="dropdown-item" href="https://web.archive.org/web/20240901020849/https://learningchurch.org/blog/kym">Kym</a></li>
              <li><a class="dropdown-item" href="https://web.archive.org/web/20240901020849/https://learningchurch.org/blog/michael">Michael</a></li>
            </ul>
          </li>
          <li>
            <a class="text-white" href="https://web.archive.org/web/20240901020849/https://learningchurch.org/devotional">
              <b>Devotional</b>
            </a>
          </li>
          <li class="nav-item  text-white">
            <a class="nav-link text-white" href="https://web.archive.org/web/20240901020849/https://learningchurch.org/good-to-know">
              <b>Good to Know</b>
            </a>
          </li>
          <li class="nav-item  text-white">
            <a class="nav-link text-white" href="https://web.archive.org/web/20240901020849/https://learningchurch.org/liturgy">
              <b>Liturgy</b>
            </a>
          </li>
          <li class="nav-item  text-white dropdown">
            <a class="nav-link text-white" href="https://web.archive.org/web/20240901020849/https://learningchurch.org/ministry">
              <b>Ministry</b>
            </a>
            <ul class="dropdown-menu dropdown-menu-right">
              <li><a class="dropdown-item" href="https://web.archive.org/web/20240901020849/https://learningchurch.org/ministry/preaching">Preaching</a></li>
            </ul>
          </li>
          <li class="nav-item  text-white dropdown">
            <a class="nav-link text-white" href="https://web.archive.org/web/20240901020849/https://learningchurch.org/spirituality">
              <b>Spirituality</b>
            </a>
            <ul class="dropdown-menu dropdown-menu-right">
              <li><a class="dropdown-item" href="https://web.archive.org/web/20240901020849/https://learningchurch.org/spirituality/prayer">Prayer</a></li>
            </ul>
          </li>
          <li class="nav-item  text-white dropdown">
            <a class="nav-link text-white" href="https://web.archive.org/web/20240901020849/https://learningchurch.org/tech">
              <b>Tech</b>
            </a>
            <ul class="dropdown-menu dropdown-menu-right">
              <li><a class="dropdown-item" href="https://web.archive.org/web/20240901020849/https://learningchurch.org/tech/obsidian">Obsidian</a></li>
              <li><a class="dropdown-item" href="https://web.archive.org/web/20240901020849/https://learningchurch.org/tech/openlp">OpenLP</a></li>
              <li><a class="dropdown-item" href="https://web.archive.org/web/20240901020849/https://learningchurch.org/tech/tech-tips">Tech tips</a></li>
            </ul>
          </li>
        </ul>
        <i class="text-white mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
      <div class="header-social-links">
        <a href="https://www.facebook.com/LearningChurch" target="_blank"><i class="text-white bi bi-facebook"></i></a>
        <a href="https://www.instagram.com/LearningChurch" target="_blank"><i class="text-white bi bi-instagram"></i></a>
        <a href="https://www.youtube.com/@LearningChurch" target="_blank"><i class="text-white bi bi-youtube"></i></a>
      </div>

    </div>
  </header>
  <img src="https://learningchurch.org/themes/learningchurch/assets/images/siteheader.png" width="100%" class="img-fluid">
  <main class="main">
    {{$slot}}
  </main>

  <footer id="footer" class="footer dark-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <span class="sitename">LearningChurch</span>
          </a>
          <div class="footer-contact">
            We make practical resources for the local church<br>
            <a class="text-white" href="{{url('/about')}}"><u>More about us</u></a><br><br>
          </div>
          <h5>Connect with us</h5>
          <div class="social-links d-flex mt-4">
            <a href="https://www.facebook.com/LearningChurch" target="_blank"><i class="text-white bi bi-facebook"></i></a>
            <a href="https://www.instagram.com/LearningChurch" target="_blank"><i class="text-white bi bi-instagram"></i></a>
            <a href="https://www.youtube.com/@LearningChurch" target="_blank"><i class="text-white bi bi-youtube"></i></a>
          </div>
        </div>

        <div class="col-lg-8 col-md-3 footer-links">
          <h4>Recent Posts</h4>
          <ul>
            
          </ul>
        </div>
      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>©{{date('Y')}} <span>Copyright</span> <strong class="px-1 sitename">LearningChurch</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Based on a theme by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{asset('learningchurch/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('learningchurch/vendor/aos/aos.js')}}"></script>

  <!-- Main JS File -->
  <script src="{{asset('learningchurch/js/main.js')}}"></script>

</body>

</html>