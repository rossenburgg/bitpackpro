<!DOCTYPE html>
<html lang="en" dir="" class="h-100">
<head>
  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title -->
  <title>Reset Password | BitPack - Cryptocurrency exchange platform</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="./favicon.ico">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">

  <!-- CSS Implementing Plugins -->
  <link rel="stylesheet" href="{{asset('assets/vendor/bootstrap-icons/font/bootstrap-icons.css')}}">

  <!-- CSS Front Template -->
  <link rel="stylesheet" href="{{asset('assets/css/theme.min.css')}}">
</head>

<body class="d-flex align-items-center min-h-100">
  <!-- ========== HEADER ========== -->
  <header id="header" class="navbar navbar-expand navbar-light navbar-absolute-top">
    <div class="container-fluid">
      <nav class="navbar-nav-wrap">
        <!-- White Logo -->
        <a class="navbar-brand d-none d-lg-flex" href="./index.html" aria-label="Front">
          <img class="navbar-brand-logo" src="{{asset('assets/svg/logos/logo-white.svg')}}" alt="Logo">
        </a>
        <!-- End White Logo -->

        <!-- Default Logo -->
        <a class="navbar-brand d-flex d-lg-none" href="./index.html" aria-label="Front">
          <img class="navbar-brand-logo" src="{{asset('assets/svg/logos/logo.svg')}}" alt="Logo">
        </a>
        <!-- End Default Logo -->

        <div class="ms-auto">
          <a class="link link-sm link-secondary" href="/">
            <i class="bi-chevron-left small ms-1"></i> Go to main
          </a>
        </div>
      </nav>
    </div>
  </header>
  <!-- ========== END HEADER ========== -->

  <!-- ========== MAIN CONTENT ========== -->
  <main id="content" role="main" class="flex-grow-1">
    <!-- Form -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-5 col-xl-4 d-none d-lg-flex justify-content-center align-items-center min-vh-lg-100 position-relative bg-dark" style="background-image: url({{asset('assets/svg/components/wave-pattern-light.svg')}});">
          <div class="flex-grow-1 p-5">
            <!-- Blockquote -->
            <figure class="text-center">
              <div class="mb-4">
                <img class="avatar avatar-xl avatar-4x3" src="{{asset('assets/svg/brands/mailchimp-white.svg')}}" alt="Logo">
              </div>

              <blockquote class="blockquote blockquote-light">“ It has many landing page variations to choose from, which one is always a big advantage. ”</blockquote>

              <figcaption class="blockquote-footer blockquote-light">
                <div class="mb-3">
                  <img class="avatar avatar-circle" src="{{asset('assets/img/160x160/img9.jpg')}}" alt="Image Description">
                </div>

                Lida Reidy
                <span class="blockquote-footer-source">Project Manager | BitPack</span>
              </figcaption>        
            </figure>
            <!-- End Blockquote -->

            <!-- Clients -->
            <div class="position-absolute start-0 end-0 bottom-0 text-center p-5">
              <div class="row justify-content-center">
                <div class="col text-center py-3">
                  <img class="avatar avatar-lg avatar-4x3" src="{{asset('assets/svg/brands/fitbit-white.svg')}}" alt="Logo">
                </div>
                <!-- End Col -->

                <div class="col text-center py-3">
                  <img class="avatar avatar-lg avatar-4x3" src="{{asset('assets/svg/brands/business-insider-white.svg')}}" alt="Logo">
                </div>
                <!-- End Col -->

                <div class="col text-center py-3">
                  <img class="avatar avatar-lg avatar-4x3" src="{{asset('assets/svg/brands/capsule-white.svg')}}" alt="Logo">
                </div>
                <!-- End Col -->
              </div>
              <!-- End Row -->
            </div>
            <!-- End Clients -->
          </div>
        </div>
        <!-- End Col -->

        <div class="col-lg-7 col-xl-8 d-flex justify-content-center align-items-center min-vh-lg-100">
          <div class="flex-grow-1 mx-auto" style="max-width: 28rem;">
            <!-- Heading -->
            <div class="text-center mb-5 mb-md-7">
              <h1 class="h2">Forgot password?</h1>
              <p>Enter your email address below and we'll get you back on track.</p>
            </div>
            <!-- End Heading -->

            @if (session('status'))
            <div class="alert alert-soft-success" role="alert">
          {{ session('status') }}
        </div>
        @endif

            <!-- Form -->
            <form class="js-validate needs-validation" id="formAuthentication" action="{{ route('password.email') }}" method="POST">
              @csrf
              <!-- Form -->
              <div class="mb-3">
                <div class="d-flex justify-content-between align-items-center">
                  <label class="form-label @error('email') is-invalid @enderror"  id="email" name="email" for="signupModalFormResetPasswordEmail"  tabindex="0">Your email</label>
                  @if (Route::has('login'))
                  <a class="form-label-link" href="{{route('login')}}">
                    <i class="bi-chevron-left small ms-1"></i> Back to Log in
                  </a>
                  @endif
                </div>

                <input type="email" class="form-control form-control-lg" name="email" id="signupModalFormResetPasswordEmail" tabindex="1" placeholder="Enter your email address" aria-label="Enter your email address" required>
               
                @error('email')
                <span class="invalid-feedback">{{ $message }}</span>
                @enderror
              </div>
              <!-- End Form -->

              <div class="d-grid mb-3">
                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
              </div>
            </form>
            <!-- End Form -->
          </div>
        </div>
        <!-- End Col -->
      </div>
      <!-- End Row -->
    </div>
    <!-- End Form -->
  </main>
  <!-- ========== END MAIN CONTENT ========== -->

  <!-- JS Global Compulsory  -->
  <script src="{{asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>

  <!-- JS Implementing Plugins -->
  <script src="{{asset('assets/vendor/hs-toggle-password/dist/js/hs-toggle-password.js')}}"></script>

  <!-- JS Front -->
  <script src="{{asset('assets/js/theme.min.js')}}"></script>

  <!-- JS Plugins Init. -->
  <script>
    (function() {
      // INITIALIZATION OF BOOTSTRAP VALIDATION
      // =======================================================
      HSBsValidation.init('.js-validate', {
        onSubmit: data => {
          alert('Submited')
        }
      })


      // INITIALIZATION OF TOGGLE PASSWORD
      // =======================================================
      new HSTogglePassword('.js-toggle-password')
    })()
  </script>
</body>
</html>
