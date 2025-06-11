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
        <a href="index.html" class="logo d-flex align-items-end">
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <img src="{{asset('learningchurch/images/logo.png')}}" alt="LearningChurch Logo">
          <h4 class="sitename">LearningChurch</h4>
        </a>

        <div class="d-flex align-items-center">
          <div class="social-links">
            <a target="_blank" href="https://www.facebook.com/LearningChurch" class="facebook"><i class="bi bi-facebook"></i></a>
            <a target="_blank" href="https://www.youtube.com/@LearningChurch" class="youtube"><i class="bi bi-youtube"></i></a>
            <a target="_blank" href="https://www.instagram.com/LearningChurch" class="instagram"><i class="bi bi-instagram"></i></a>
          </div>

          <form class="search-form ms-4">
            <input type="text" placeholder="Search..." class="form-control">
            <button type="submit" class="btn"><i class="bi bi-search"></i></button>
          </form>
        </div>
      </div>

    </div>

    <div class="nav-wrap">
      <div class="container d-flex justify-content-center position-relative">
        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="index.html" class="active">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="category.html">Category</a></li>
            <li><a href="blog-details.html">Blog Details</a></li>
            <li><a href="author-profile.html">Author Profile</a></li>
            <li class="dropdown"><a href="#"><span>Pages</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <li><a href="about.html">About</a></li>
                <li><a href="category.html">Category</a></li>
                <li><a href="blog-details.html">Blog Details</a></li>
                <li><a href="author-profile.html">Author Profile</a></li>
                <li><a href="search-results.html">Search Results</a></li>
                <li><a href="404.html">404 Not Found Page</a></li>

                <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                  <ul>
                    <li><a href="#">Deep Dropdown 1</a></li>
                    <li><a href="#">Deep Dropdown 2</a></li>
                    <li><a href="#">Deep Dropdown 3</a></li>
                    <li><a href="#">Deep Dropdown 4</a></li>
                    <li><a href="#">Deep Dropdown 5</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="contact.html">Contact</a></li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
      </div>
    </div>

  </header>

  <main class="main">

    <!-- Blog Hero Section -->
    <section id="blog-hero" class="blog-hero section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="blog-grid">

          <!-- Featured Post (Large) -->
          <article class="blog-item featured" data-aos="fade-up">
            <img src="assets/img/blog/blog-post-3.webp" alt="Blog Image" class="img-fluid">
            <div class="blog-content">
              <div class="post-meta">
                <span class="date">Apr. 14th, 2025</span>
                <span class="category">Technology</span>
              </div>
              <h2 class="post-title">
                <a href="blog-details.html" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a>
              </h2>
            </div>
          </article><!-- End Featured Post -->

          <!-- Regular Posts -->
          <article class="blog-item" data-aos="fade-up" data-aos-delay="100">
            <img src="assets/img/blog/blog-post-portrait-1.webp" alt="Blog Image" class="img-fluid">
            <div class="blog-content">
              <div class="post-meta">
                <span class="date">Apr. 14th, 2025</span>
                <span class="category">Security</span>
              </div>
              <h3 class="post-title">
                <a href="blog-details.html" title="Sed do eiusmod tempor incididunt ut labore">Sed do eiusmod tempor incididunt ut labore</a>
              </h3>
            </div>
          </article><!-- End Blog Item -->

          <article class="blog-item" data-aos="fade-up" data-aos-delay="200">
            <img src="assets/img/blog/blog-post-9.webp" alt="Blog Image" class="img-fluid">
            <div class="blog-content">
              <div class="post-meta">
                <span class="date">Apr. 14th, 2025</span>
                <span class="category">Career</span>
              </div>
              <h3 class="post-title">
                <a href="blog-details.html" title="Ut enim ad minim veniam, quis nostrud exercitation">Ut enim ad minim veniam, quis nostrud exercitation</a>
              </h3>
            </div>
          </article><!-- End Blog Item -->

          <article class="blog-item" data-aos="fade-up" data-aos-delay="300">
            <img src="assets/img/blog/blog-post-7.webp" alt="Blog Image" class="img-fluid">
            <div class="blog-content">
              <div class="post-meta">
                <span class="date">Apr. 14th, 2025</span>
                <span class="category">Cloud</span>
              </div>
              <h3 class="post-title">
                <a href="blog-details.html" title="Adipiscing elit, sed do eiusmod tempor incididunt">Adipiscing elit, sed do eiusmod tempor incididunt</a>
              </h3>
            </div>
          </article><!-- End Blog Item -->

          <article class="blog-item" data-aos="fade-up" data-aos-delay="400">
            <img src="assets/img/blog/blog-post-6.webp" alt="Blog Image" class="img-fluid">
            <div class="blog-content">
              <div class="post-meta">
                <span class="date">Apr. 14th, 2025</span>
                <span class="category">Programming</span>
              </div>
              <h3 class="post-title">
                <a href="blog-details.html" title="Excepteur sint occaecat cupidatat non proident">Excepteur sint occaecat cupidatat non proident</a>
              </h3>
            </div>
          </article><!-- End Blog Item -->

        </div>

      </div>

    </section><!-- /Blog Hero Section -->

    <!-- Category Section Section -->
    <section id="category-section" class="category-section section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Older posts</h2>
        <div> <span class="description-title">Category Section</span></div>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <!-- Featured Posts -->
        <div class="row gy-4 mb-4">
          <div class="col-lg-4">
            <article class="featured-post">
              <div class="post-img">
                <img src="assets/img/blog/blog-post-6.webp" alt="" class="img-fluid" loading="lazy">
              </div>
              <div class="post-content">
                <div class="category-meta">
                  <span class="post-category">Health</span>
                  <div class="author-meta">
                    <img src="assets/img/person/person-f-13.webp" alt="" class="author-img">
                    <span class="author-name">William G.</span>
                    <span class="post-date">28 April 2024</span>
                  </div>
                </div>
                <h2 class="title">
                  <a href="blog-details.html">Sed ut perspiciatis unde omnis iste natus error sit voluptatem</a>
                </h2>
              </div>
            </article>
          </div>

          <div class="col-lg-4">
            <article class="featured-post">
              <div class="post-img">
                <img src="assets/img/blog/blog-post-7.webp" alt="" class="img-fluid" loading="lazy">
              </div>
              <div class="post-content">
                <div class="category-meta">
                  <span class="post-category">Education</span>
                  <div class="author-meta">
                    <img src="assets/img/person/person-m-10.webp" alt="" class="author-img">
                    <span class="author-name">Emma D.</span>
                    <span class="post-date">30 May 2024</span>
                  </div>
                </div>
                <h2 class="title">
                  <a href="blog-details.html">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis</a>
                </h2>
              </div>
            </article>
          </div>

          <div class="col-lg-4">
            <article class="featured-post">
              <div class="post-img">
                <img src="assets/img/blog/blog-post-5.webp" alt="" class="img-fluid" loading="lazy">
              </div>
              <div class="post-content">
                <div class="category-meta">
                  <span class="post-category">Gaming</span>
                  <div class="author-meta">
                    <img src="assets/img/person/person-f-14.webp" alt="" class="author-img">
                    <span class="author-name">James F.</span>
                    <span class="post-date">3 June 2024</span>
                  </div>
                </div>
                <h2 class="title">
                  <a href="blog-details.html">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit</a>
                </h2>
              </div>
            </article>
          </div>
        </div>

        <!-- List Posts -->
        <div class="row">
          <div class="col-xl-4 col-lg-6">
            <article class="list-post">
              <div class="post-img">
                <img src="assets/img/blog/blog-post-6.webp" alt="" class="img-fluid" loading="lazy">
              </div>
              <div class="post-content">
                <div class="category-meta">
                  <span class="post-category">Gaming</span>
                </div>
                <h3 class="title">
                  <a href="blog-details.html">Quis autem vel eum iure reprehenderit qui in ea voluptate</a>
                </h3>
                <div class="post-meta">
                  <span class="read-time">2 mins read</span>
                  <span class="post-date">6 April 2026</span>
                </div>
              </div>
            </article>
          </div>

          <div class="col-xl-4 col-lg-6">
            <article class="list-post">
              <div class="post-img">
                <img src="assets/img/blog/blog-post-9.webp" alt="" class="img-fluid" loading="lazy">
              </div>
              <div class="post-content">
                <div class="category-meta">
                  <span class="post-category">Gaming</span>
                </div>
                <h3 class="title">
                  <a href="blog-details.html">At vero eos et accusamus et iusto</a>
                </h3>
                <div class="post-meta">
                  <span class="read-time">2 mins read</span>
                  <span class="post-date">12 June 2026</span>
                </div>
              </div>
            </article>
          </div>

          <div class="col-xl-4 col-lg-6">
            <article class="list-post">
              <div class="post-img">
                <img src="assets/img/blog/blog-post-10.webp" alt="" class="img-fluid" loading="lazy">
              </div>
              <div class="post-content">
                <div class="category-meta">
                  <span class="post-category">Gaming</span>
                </div>
                <h3 class="title">
                  <a href="blog-details.html">Et harum quidem rerum facilis est et expedita distinctio</a>
                </h3>
                <div class="post-meta">
                  <span class="read-time">2 mins read</span>
                  <span class="post-date">9 May 2026</span>
                </div>
              </div>
            </article>
          </div>

          <div class="col-xl-4 col-lg-6">
            <article class="list-post">
              <div class="post-img">
                <img src="assets/img/blog/blog-post-2.webp" alt="" class="img-fluid" loading="lazy">
              </div>
              <div class="post-content">
                <div class="category-meta">
                  <span class="post-category">Gaming</span>
                </div>
                <h3 class="title">
                  <a href="blog-details.html">Nam libero tempore, cum soluta nobis est eligendi</a>
                </h3>
                <div class="post-meta">
                  <span class="read-time">2 mins read</span>
                  <span class="post-date">15 July 2026</span>
                </div>
              </div>
            </article>
          </div>

          <div class="col-xl-4 col-lg-6">
            <article class="list-post">
              <div class="post-img">
                <img src="assets/img/blog/blog-post-1.webp" alt="" class="img-fluid" loading="lazy">
              </div>
              <div class="post-content">
                <div class="category-meta">
                  <span class="post-category">Gaming</span>
                </div>
                <h3 class="title">
                  <a href="blog-details.html">Temporibus autem quibusdam et aut officiis debitis</a>
                </h3>
                <div class="post-meta">
                  <span class="read-time">2 mins read</span>
                  <span class="post-date">18 August 2026</span>
                </div>
              </div>
            </article>
          </div>

          <div class="col-xl-4 col-lg-6">
            <article class="list-post">
              <div class="post-img">
                <img src="assets/img/blog/blog-post-3.webp" alt="" class="img-fluid" loading="lazy">
              </div>
              <div class="post-content">
                <div class="category-meta">
                  <span class="post-category">Gaming</span>
                </div>
                <h3 class="title">
                  <a href="blog-details.html">Itaque earum rerum hic tenetur a sapiente delectus</a>
                </h3>
                <div class="post-meta">
                  <span class="read-time">2 mins read</span>
                  <span class="post-date">21 September 2026</span>
                </div>
              </div>
            </article>
          </div>
        </div>
      </div>

    </section><!-- /Category Section Section -->

    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4 justify-content-between align-items-center">
          <div class="col-lg-6">
            <div class="cta-content" data-aos="fade-up" data-aos-delay="200">
              <h2>Subscribe to our newsletter</h2>
              <p>Proin eget tortor risus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur aliquet quam id dui posuere blandit.</p>
              <form action="forms/newsletter.php" method="post" class="php-email-form cta-form" data-aos="fade-up" data-aos-delay="300">
                <div class="input-group mb-3">
                  <input type="email" class="form-control" placeholder="Email address..." aria-label="Email address" aria-describedby="button-subscribe">
                  <button class="btn btn-primary" type="submit" id="button-subscribe">Subscribe</button>
                </div>
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your subscription request has been sent. Thank you!</div>
              </form>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="cta-image" data-aos="zoom-out" data-aos-delay="200">
              <img src="assets/img/cta/cta-1.webp" alt="" class="img-fluid">
            </div>
          </div>
        </div>
      </div>
    </section><!-- /Call To Action Section -->

  </main>

  <footer id="footer" class="footer">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <span class="sitename">Blogy</span>
          </a>
          <div class="footer-contact pt-3">
            <p>A108 Adam Street</p>
            <p>New York, NY 535022</p>
            <p class="mt-3"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
            <p><strong>Email:</strong> <span>info@example.com</span></p>
          </div>
          <div class="social-links d-flex mt-4">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Terms of service</a></li>
            <li><a href="#">Privacy policy</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><a href="#">Web Design</a></li>
            <li><a href="#">Web Development</a></li>
            <li><a href="#">Product Management</a></li>
            <li><a href="#">Marketing</a></li>
            <li><a href="#">Graphic Design</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Hic solutasetp</h4>
          <ul>
            <li><a href="#">Molestiae accusamus iure</a></li>
            <li><a href="#">Excepturi dignissimos</a></li>
            <li><a href="#">Suscipit distinctio</a></li>
            <li><a href="#">Dilecta</a></li>
            <li><a href="#">Sit quas consectetur</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Nobis illum</h4>
          <ul>
            <li><a href="#">Ipsam</a></li>
            <li><a href="#">Laudantium dolorum</a></li>
            <li><a href="#">Dinera</a></li>
            <li><a href="#">Trodelas</a></li>
            <li><a href="#">Flexo</a></li>
          </ul>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">LearningChurch</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
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