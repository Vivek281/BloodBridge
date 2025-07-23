<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>@yield('title')</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicon -->
  {{-- <link href="{{ asset('frontend/assets/img/favicon.png') }}" rel="icon"> --}}
  <link href="{{ asset('frontend/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Raleway:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <!-- Vendor CSS -->
  <link href="{{ asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Main CSS -->
  <link href="{{ asset('frontend/assets/css/main.css') }}" rel="stylesheet">

  <!-- Smooth Scroll CSS -->
  <style>
    html {
      scroll-behavior: smooth;
      scroll-padding-top: 80px; /* Adjust to your fixed navbar height */
    }
  </style>
</head>

<body class="index-page">

  <!-- Header -->
  @include('frontend.includes.header')
  <!-- End Header -->

  <!-- Page Content -->
  @yield('content')
  <!-- End Page Content -->

  <!-- Footer -->
  @include('frontend.includes.footer')
  <!-- End Footer -->

  <!-- Scroll Top Button -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center">
    <i class="bi bi-arrow-up-short"></i>
  </a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

  <!-- Main JS File -->
  <script src="{{ asset('frontend/assets/js/main.js') }}"></script>

  <!-- Highlight Active Nav Link Based on Current URL -->
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const currentUrl = window.location.href.split('#')[0]; // remove hash
      document.querySelectorAll('header nav a').forEach(link => {
        if (link.href.split('#')[0] === currentUrl) {
          link.classList.add('active');
        }
      });
    });
  </script>

  <!-- Smooth Scroll Fallback for Older Browsers -->
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
          const targetId = this.getAttribute('href');
          if (targetId && targetId.length > 1) {
            const target = document.querySelector(targetId);
            if (target) {
              e.preventDefault();
              target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
              });
            }
          }
        });
      });
    });
  </script>

</body>

</html>
