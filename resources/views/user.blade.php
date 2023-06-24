<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Readoit - Home</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="img/1434841901687510444-512.png" rel="icon">
  <link href="img/1434841901687510444-512.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Style CSS File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- Template Font Awesome -->
  <script src="https://kit.fontawesome.com/24a479eac0.js" crossorigin="anonymous"></script>

</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope"></i> <a href="mailto:putranugraha008@gmail.com">putranugraha008@gmail.com</a>
        <i class="bi bi-phone"></i> 0812-2483-9266
      </div>
      <div class="d-none d-lg-flex social-links align-items-center">
        <a href="https://t.me/Evnxtt" target="_blank" class="twitter" title="Telegram"><i class="ri-telegram-fill"></i></a>
        <a href="https://wa.me/6281224839266" target="_blank" class="facebook" title="Whatsapp"><i class="ri-whatsapp-line"></i></a>
        <a a href="https://www.instagram.com/evnxtt/" target="_blank" class="instagram" title="Instagram"><i class="bx bxl-instagram"></i></a>
        <a href="mailto:putranugraha008@gmail.com" class="google-plus"><i class="ri-mail-line" title="Email"></i></i></a>
        <a href="https://www.linkedin.com/in/putra-nugraha-7502aa268/" target="_blank" class="linkedin" title="Linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <a href="/" class="logo me-2"><img src="img/1434841901687510444-512.png" alt="" class="img-fluid"></a>
      <h1 class="logo me-auto" style=""><a href="/"><i>Readoit</i></a></h1>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="">Home</a></li>
          <li><a class="nav-link scrollto" href="">Reminder Jadwal</a></li>
          <li><a class="nav-link scrollto" href="">Partner Belajar</a></li>
                                      <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="/chat" class="Question-btn scrollto"><span class="d-none d-md-inline"></span>Asisten
        Belajar</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <h1>Welcome to Readoit</h1>
      <h2>We offer modern solutions for increasing  your intelligence</h2>
      <a href="/chat" class="btn-get-started scrollto">Get Started</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content">
              <h3>Kenapa harus <br> Readoit ?</h3>
              <p>
                Kami menyediakan website yang memiliki beberapa fitur AI diantaranya asisten belajar, reminder jadwal dan partner belajar. Yang dikemas secara menarik simple dan mudah dipergunakan
              </p>
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="fa-regular fa-eye"></i>
                    <h4>Visi</h4>
                    <p>Menjadi website yang mudah diakses dan memberikan edukasi yang bermanfaat bagi masyarakat</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-receipt"></i>
                    <h4>Misi</h4>
                    <p>● Menyediakan platform edukasi yang interaktif <br>
                        ● Mempermudah akses masyarakat untuk belajar sesuatu</p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">
          <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch position-relative">
            
          </div>

          <div
            class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
            <h3>Fitur yang kami tawarkan</h3>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-atom"></i></div>
              <h4 class="title"><a href="/chat">Asisten Belajar</a></h4>
              <p class="description">Kami menawarkan AI yang berguna untuk mempermudah anda dalam belajar sesuatu</p>
            </div>

            <div class="icon-box">
              <div class="icon"><i class='bx bx-alarm-snooze'></i></i></div>
              <h4 class="title"><a href="#about">Reminder Jadwal <br> <span style="color: red;">(Unavailable)</span></a></h4>
              <p class="description">Kami menawarkan AI yang berfungsi untung mengingatkan kalian tentang jadwal ataupun tenggat waktu</p>
            </div>

            <div class="icon-box">
              <div class="icon"><i class='bx bx-user-voice'></i></div>
              <h4 class="title"><a href="#about">Partner Belajar <br> <span style="color: red;">(Unavailable)</span></a></h4>
              <p class="description">Kami menyediakan AI untuk menjadi teman belajar anda</p>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    
    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          <a href="https://www.instagram.com/evnxtt/" target="_blank">
            &copy; Copyright <strong><span>Venext</span></strong>. All Rights Reserved
          </a>
        </div>
        <div class="credits">
          Developed by <a href="https://www.instagram.com/evnxtt/" target="_blank">Venext</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="https://t.me/Evnxtt" target="_blank" class="twitter" title="Telegram"><i class="ri-telegram-fill"></i></a>
        <a href="https://wa.me/6281224839266" target="_blank" class="facebook" title="Whatsapp"><i class="ri-whatsapp-line"></i></a>
        <a a href="https://www.instagram.com/evnxtt/" target="_blank" class="instagram" title="Instagram"><i class="bx bxl-instagram"></i></a>
        <a href="mailto:putranugraha008@gmail.com" class="google-plus"><i class="ri-mail-line" title="Email"></i></i></a>
        <a href="https://www.linkedin.com/in/putra-nugraha-7502aa268/" target="_blank" class="linkedin" title="Linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/glightbox/js/glightbox.min.js"></script>
  <script src="vendor/swiper/swiper-bundle.min.js"></script>
  <script src="vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="js/main.js"></script>
</body>

</html>