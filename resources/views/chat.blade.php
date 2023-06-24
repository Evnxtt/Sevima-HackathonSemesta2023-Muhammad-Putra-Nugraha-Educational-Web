{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1">

    	<title>Writer Bot - AI Writing Assistant for Bloggers</title>
   	 
    	<script src="https://cdn.tailwindcss.com"></script>

	</head>
	<body>
    	<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        	<div class="max-w-6xl w-full mx-auto sm:px-6 lg:px-8 space-y-4 py-4">
            	<div class="text-center text-gray-800 dark:text-gray-300 py-4">
                	<h1 class="text-7xl font-bold">Writer bot</h1>
            	</div>

            	<div class="w-full rounded-md bg-white border-2 border-gray-600 p-4 min-h-[60px] h-full text-gray-600">
                	<form action="/chat/generate" method="post" class="inline-flex gap-2 w-full">
                    	@csrf
                    	<input required name="title" class="w-full outline-none text-2xl font-bold" value="{{ $title }}" placeholder="Type your article title..." />
                    	<button class="rounded-md bg-emerald-500 px-4 py-2 text-white font-semibold">Generate</button>
                	</form>
            	</div>
            	@if($content)
            	<div class="w-full rounded-md bg-white border-2 border-gray-600 p-4 min-h-[720px] h-full text-gray-600">
                	<textarea class="min-h-[500px] h-full w-full outline-none" spellcheck="false">{{ $content }}</textarea>
            	</div>
            	@endif
        	</div>
    	</div>
	</body>
</html> --}}

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Edu Web - Home</title>
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

  <!-- Script AI -->
  <script src="https://cdn.tailwindcss.com"></script>

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

      <h1 class="logo me-auto"><a href="index.html"><i>Edu Web</i></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto" href="">Logout</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="/" class="Question-btn scrollto"><span class="d-none d-md-inline">Back To</span>
        Home</a>

    </div>
  </header><!-- End Header -->
  <!-- End About Section -->
    <main>
        	<div class="relative flex items-top justify-center min-h-screen bg-white-100 dark:bg-white-900 sm:items-center py-4 sm:pt-0">
        	<div class="max-w-6xl w-full mx-auto sm:px-6 lg:px-8 space-y-4 py-4">
            	<div class="text-center text-black-800 dark:text-black-300 py-4">
                	<h1 class="text-7xl font-bold">Asisten Belajar</h1>
            	</div>

            	<div class="w-full rounded-md bg-white border-2 border-gray-600 p-4 min-h-[60px] h-full text-gray-600">
                	<form action="/chat/generate" method="post" class="inline-flex gap-2 w-full">
                    	@csrf
                    	<input required name="title" class="w-full outline-none text-2xl font-bold" value="{{ $title }}" placeholder="Type your article title..." />
                    	<button class="rounded-md bg-blue-500 px-4 py-2 text-white font-semibold">Generate</button>
                	</form>
            	</div>
            	@if($content)
            	<div class="w-full rounded-md bg-white border-2 border-gray-600 p-4 min-h-[720px] h-full text-gray-600">
                	<textarea class="min-h-[500px] h-full w-full outline-none" spellcheck="false">{{ $content }}</textarea>
            	</div>
            	@endif
        	</div>
    	</div>
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