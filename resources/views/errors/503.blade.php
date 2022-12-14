<!DOCTYPE html>
<html lang="en" dir="">
<head>
  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title -->
  <title>Maintenance Mode | BitPack - Cryptocurrency trading platform by Alaric Inc</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="./favicon.ico">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">

  <!-- CSS Implementing Plugins -->
  <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-icons/font/bootstrap-icons.css')}}">

  <!-- CSS Front Template -->
  <link rel="stylesheet" href="{{ asset('assets/css/theme.min.css') }}">
</head>

<body>
  <!-- ========== HEADER ========== -->
  <header id="header" class="navbar navbar-expand navbar-light navbar-absolute-top">
    <div class="container">
      <nav class="navbar-nav-wrap">
        <!-- Default Logo -->
        <a class="navbar-brand" href="/" aria-label="Front">
          <img class="navbar-brand-logo" src="{{ asset('assets/svg/logos/logo.svg') }}" alt="Logo">
        </a>
        <!-- End Default Logo -->

        <div class="ms-auto">
          <a class="btn btn-primary btn-transition" href="./page-status">Check for updates</a>
        </div>
      </nav>
    </div>
  </header>
  <!-- ========== END HEADER ========== -->

  <!-- ========== MAIN CONTENT ========== -->
  <main id="content" role="main">
    <!-- Hero Section -->
    <div class="d-flex">
      <div class="container d-flex align-items-center vh-100">
        <div class="w-sm-75 w-lg-50 text-center mx-sm-auto">
          <div class="mb-7">
            <img class="img-fluid" src="{{ asset('assets/svg/illustrations/oc-maintenance.svg') }}" alt="SVG Illustration">
          </div>

          <h1 class="h2">We're just tuning up a few things.</h1>
          <p>We apologize for the inconvenience but BitPack is currently undergoing planned maintenance. Stay tuned!</p>
        </div>
      </div>
    </div>
    <!-- End Hero Section -->
  </main>
  <!-- ========== END MAIN CONTENT ========== -->

  <!-- ========== FOOTER ========== -->
  <footer class="position-absolute start-0 end-0 bottom-0">
    <div class="container pb-5 content-space-b-sm-1">
      <div class="row justify-content-between align-items-center">
        <div class="col-sm mb-3 mb-sm-0">
          <p class="small mb-0">&copy; BitPack Inc. 2021</p>
        </div>

        <div class="col-sm-auto">
          <!-- Socials -->
          <ul class="list-inline mb-0">
            <li class="list-inline-item">
              <a class="btn btn-soft-secondary btn-xs btn-icon" href="https://facebook.com/bitpackgh">
                <i class="bi-facebook"></i>
              </a>
            </li>
          
            <li class="list-inline-item">
              <a class="btn btn-soft-secondary btn-xs btn-icon" href="https://whatsapp.com/bitpackgh">
                <i class="bi-whatsapp"></i>
              </a>
            </li>
          
            <li class="list-inline-item">
              <a class="btn btn-soft-secondary btn-xs btn-icon" href="https://twitter.com/bitpackgh">
                <i class="bi-twitter"></i>
              </a>
            </li>
          
            <li class="list-inline-item">
              <a class="btn btn-soft-secondary btn-xs btn-icon" href="https://instagram.com/bitpackgh">
                <i class="bi-instagram"></i>
              </a>
            </li>
          </ul>
          <!-- End Socials -->
        </div>
      </div>
    </div>
  </footer>
  <!-- ========== END FOOTER ========== -->

  <!-- JS Global Compulsory  -->
  <script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>

  <!-- JS Front -->
  <script src=".{{ asset('assets/js/theme.min.js')}}"></script>
</body>
</html>
