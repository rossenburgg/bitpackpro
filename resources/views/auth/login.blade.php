<!DOCTYPE html>
<html lang="en" dir="" class="h-100">
<head>
  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title -->
  <title>Login | BitPack - Cryptocurrency exchange platform</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="{{asset('favicon.ico')}}">

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
        <a class="navbar-brand d-none d-lg-flex" href="/" aria-label="Front">
          <img class="navbar-brand-logo" src="{{asset('assets/svg/logos/logo-white.svg')}}" alt="Logo">
        </a>
        <!-- End White Logo -->

        <!-- Default Logo -->
        <a class="navbar-brand d-flex d-lg-none" href="/" aria-label="Front">
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
              <h1 class="h2">Welcome back</h1>
              <p>Login to manage your account.</p>
            </div>
            <!-- End Heading -->
            @if (session('status'))
            <div class="alert alert-soft-success" role="alert">
          {{ session('status') }}
</div>
          @endif
            <!-- Form -->
            <form class="js-validate needs-validation" id="formAuthentication" action="{{ route('login') }}" method="POST">
            @csrf 
            <!-- Form -->
              <div class="mb-4">
                <label class="form-label" for="signupModalFormLoginEmail">Your email</label>
                <input type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" id="login-email" placeholder="email@site.com" aria-label="email@site.com" autofocus value="{{ old('email') }}" required>
                @error('email')
                <span class="invalid-feedback">{{ $message }}</span>
                @enderror
              </div>
              <!-- End Form -->

              <!-- Form -->
              <div class="mb-4">
                <div class="d-flex justify-content-between align-items-center">
                  <label class="form-label" for="signupModalFormLoginPassword">Password</label>
                  @if (Route::has('password.request'))
                  <a class="form-label-link" href="{{ route('password.request') }}">Forgot Password?</a>
                  @endif
                </div>

                <div class="input-group input-group-merge" data-hs-validation-validate-class>
                  <input type="password" class="js-toggle-password form-control form-control-lg @error('password') is-invalid @enderror" name="password" id="login-password" placeholder="8+ characters required" aria-label="8+ characters required" required minlength="8"
                        data-hs-toggle-password-options='{
                         "target": "#changePassTarget",
                         "defaultClass": "bi-eye-slash",
                         "showClass": "bi-eye",
                         "classChangeTarget": "#changePassIcon"
                       }'>
                  <a id="changePassTarget" class="input-group-append input-group-text" href="javascript:;">
                    <i id="changePassIcon" class="bi-eye"></i>
                  </a>
                </div>

                @error('password')
                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                @enderror
              </div>
              <!-- End Form -->
              <div class="mb-3">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="remember-me" name="remember" {{ old('remember') ? 'checked' : '' }}>
              <label class="form-check-label" for="remember-me">
                Remember Me
              </label>
            </div>
          </div>
              <div class="d-grid mb-3">
                <button type="submit" class="btn btn-primary btn-lg" id="login_btn">Log in</button>
              </div>

              <div class="text-center">
                <p>Don't have an account yet? 
                @if (Route::has('register'))  
                <a class="link" href="{{ route('register') }}">Sign up here</a>
                @endif
              </p>
              </div>
            </form>
            <span class="divider-center">or</span>
            
            @if (JoelButcher\Socialstream\Socialstream::show())
            <x-socialstream-providers />
        @endif

            <!-- End Form -->
          </div>
        </div>
        <!-- End Col -->
      </div>
      <!-- End Row -->
    </div>
    <!-- End Form -->

    <!-- Toast -->
<div id="liveToast" class="position-fixed toast hide" role="alert" aria-live="assertive" aria-atomic="true" style="top: 20px; right: 20px; z-index: 1000;">
  <div class="toast-header">
    <div class="d-flex align-items-center flex-grow-1">
      <div class="flex-shrink-0">
        <img class="avatar avatar-sm avatar-circle" src="../assets/img/160x160/img4.jpg" alt="Image description">
      </div>
      <div class="flex-grow-1 ms-3">
        <h5 class="mb-0">Bob Dean</h5>
        <small class="ms-auto">11 mins ago</small>
      </div>
      <div class="text-end">
        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
      </div>
    </div>
  </div>
  <div class="toast-body">
    Hello, world! This is a toast message.
  </div>
</div>

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
   // alert ("Authenticating");
  
        }
      })


      // INITIALIZATION OF TOGGLE PASSWORD
      // =======================================================
      new HSTogglePassword('.js-toggle-password')
    })()

  </script>
</body>
</html>
