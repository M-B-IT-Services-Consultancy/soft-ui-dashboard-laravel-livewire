<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <!--add csp here-->
    <title>Dodgy | Landlord helping landlord</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @cspMetaTag(App\Support\Csp\Policies\RistrictPolicy::class)
    

    <meta property="csp-nonce" content="{{ csp_nonce() }}">
    <!-- Metas -->
    <link rel="apple-touch-icon" sizes="76x76" href="{{URL::to('assets/img/apple-icon.png')}}">
    <link rel="icon" type="image/png" href="{{URL::to('assets/img/favicon.png')}}">
        <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" nonce="{{ csp_nonce() }}">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin nonce="{{ csp_nonce() }}">
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet" nonce="{{ csp_nonce() }}">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" nonce="{{ csp_nonce() }}"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" nonce="{{ csp_nonce() }}"/>

    <!-- Libraries Stylesheet -->
    <link href="{{URL::to('lib/animate/animate.min.css')}}" rel="stylesheet" nonce="{{ csp_nonce() }}"/>
    <link href="{{URL::to('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet" nonce="{{ csp_nonce() }}"/>
    <link href="{{URL::to('lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet"  nonce="{{ csp_nonce() }}"/>

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{URL::to('assets/front/css/bootstrap.min.css')}}" rel="stylesheet" nonce="{{ csp_nonce() }}">

    <!-- Template Stylesheet -->
    <link href="{{URL::to('assets/front/css/style.css')}}" rel="stylesheet"  nonce="{{ csp_nonce() }}">

    <!-- Alpine -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    
    @livewireStyles(['nonce' => csp_nonce() ])


</head>

<body class="g-sidenav-show bg-gray-100">

        <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status"  nonce="{{ csp_nonce() }}">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;" nonce="{{ csp_nonce() }}">
                    <small class="me-1 text-light"><a class="text-light" href="mailto:support@dodgyone.com"><i class="fa fa-envelope-open me-2"></i>support@dodgyone.com</a></small>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;" nonce="{{ csp_nonce() }}">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" target="_blank" href="https://www.facebook.com/profile.php?id=100094499823651 "><i class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" target="_blank" href="https://www.instagram.com/dodgyoneuk/ "><i class="fab fa-instagram fw-normal"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="{{ route('home') }}" class="navbar-brand p-0">
                <h1 class="text-danger m-0 d-none">
                    DodgyOne</h1>
                 <img src="{{URL::to('assets/img/logo.png')}}" alt="Logo"> 
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="{{ route('home') }}" class="nav-item nav-link {{ Route::currentRouteName() == 'home' ? 'active' : '' }}">Home</a>
                    <a href="{{ route('about') }}" class="nav-item nav-link {{ Route::currentRouteName() == 'about' ? 'active' : '' }}">About</a>
                    <a href="{{ route('contact') }}" class="nav-item nav-link {{ Route::currentRouteName() == 'contact' ? 'active' : '' }}">Contact</a>
                </div>
                @if (auth()->user())
                    <a href="{{ route('dashboard') }}" class="btn btn-primary rounded-pill py-2 px-4">Dashboard</a>
                @else
                    <a href="{{ route('sign-in') }}" class="btn btn-primary rounded-pill py-2 px-4">Sign In</a>
                @endif
            </div>
        </nav>

        @yield('topsearch')
    </div>
    <!-- Navbar & Hero End -->

    <div class="container">
        <div class="row">
            <div class="col-12">
                @if(!empty($success))
                    <div class="alert alert-success">
                        {{ session('success') }}
                        {{ $success }}
                    </div>
                    @endif
                @if(!empty($error))
                    <div class="alert alert-warning">
                        {{ $error }}
                        {{ session('error') }}
                    </div>
                    @endif
            </div>
        </div>
    </div>
    
     @yield('content')

    
 <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s" nonce="{{ csp_nonce() }}">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Dodgy</h4>
                    <a class="btn btn-link" href="{{ route('home') }}">About Us</a>
                    <a class="btn btn-link" href="{{ route('contact') }}">Contact Us</a>
                    <a class="btn btn-link" href="{{ route('privacy-policy')}}">Privacy Policy</a>
                    <a class="btn btn-link" href="{{ route('terms')}}">Terms of use</a>
                    <a class="btn btn-link" href="{{ route('faq') }}">FAQs & Help</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Contact</h4>
                    
                    <p class="mb-1"><a class="text-light" href="mailto:support@dodgyone.com"><i class="fa fa-envelope me-2"></i>support@dodgyone.com</a></p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href="https://www.facebook.com/profile.php?id=100094499823651"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://www.instagram.com/dodgyoneuk/"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                
                <div class="col-lg-6 col-md-6">
                    <h4 class="text-white mb-3">Newsletter</h4>
                    <div class="position-relative mx-auto" >
                        @if(session('flash'))
                        <p class="text-success">{{ session('flash') }}</p>
                        @endif
                        <form action="{{route('subscribe')}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input class="required form-control border-primary w-100 py-3 ps-4 pe-5" name="email" type="text" placeholder="Your email">
                        <button type="submit" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">Subscribe</button>
                        <!--<button type="submit">Subscribe</button>-->
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="container py-5">
            <div class="copyright">
            <div class="row g-5">
                <div class="col-12 text-center text-white bg-dark text-md-start">
                    <small><b><sup>**</sup>Disclaimer:</b><br/><br/>
                        The information on this website is provided <b>"as is"</b> and without any warranty or guarantee of accuracy. We accept no liability for any errors or omissions in the information, and we will not be liable for any damages that may result from the use of the information.<br/><br/>
                        The information on this website is not intended to be used as a substitute for professional advice. You should always consult with a qualified professional before making any decisions based on the information on this website.<br/><br/>
                        By using this website, you agree to the terms of this disclaimer.
                    </small>
                </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="{{ route('home') }}">DodgyOne</a>, All Right Reserved.
                        <span class="d-none"><a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a></span>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="{{ route('home') }}">Home</a>
                            <a href="{{ route('about') }}">About Us</a>
                            <a href="{{ route('cookie') }}">Cookies</a>
                            <a href="{{ route('faq') }}">FAQs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" nonce="{{ csp_nonce() }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" nonce="{{ csp_nonce() }}"></script>
    <script src="{{URL::to('lib/wow/wow.min.js')}}" nonce="{{ csp_nonce() }}"></script>
    <script src="{{URL::to('lib/easing/easing.min.js')}}" nonce="{{ csp_nonce() }}"></script>
    <script src="{{URL::to('lib/waypoints/waypoints.min.js')}}" nonce="{{ csp_nonce() }}"></script>
    <script src="{{URL::to('lib/owlcarousel/owl.carousel.min.js')}}" nonce="{{ csp_nonce() }}"></script>
    <script src="{{URL::to('lib/tempusdominus/js/moment.min.js')}}" nonce="{{ csp_nonce() }}"></script>
    <script src="{{URL::to('lib/tempusdominus/js/moment-timezone.min.js')}}" nonce="{{ csp_nonce() }}"></script>
    <script src="{{URL::to('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}" nonce="{{ csp_nonce() }}"></script>

    <!-- Template Javascript -->
    <script src="{{URL::to('assets/front/js/main.js')}}" nonce="{{ csp_nonce() }}"></script>
    <!--   Core JS Files   -->
    <script src="{{URL::to('assets/js/core/popper.min.js')}}" nonce="{{ csp_nonce() }}"></script>
    <script src="{{URL::to('assets/js/core/bootstrap.min.js')}}" nonce="{{ csp_nonce() }}"></script>
    <script src="{{URL::to('assets/js/plugins/smooth-scrollbar.min.js')}}" nonce="{{ csp_nonce() }}"></script>
    <script nonce="{{ csp_nonce() }}">
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }

    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js" nonce="{{ csp_nonce() }}"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <!--<script src="{{URL::to('assets/js/soft-ui-dashboard.js')}}" nonce="{{ csp_nonce() }}"></script>-->
    <script src="https://www.google.com/recaptcha/api.js?render={{ env('GOOGLE_RECAPTCHA_KEY') }}" nonce="{{ csp_nonce() }}"></script>

    <script type="text/javascript" nonce="{{ csp_nonce() }}">
        console.log('we are here');
    $('#contactUSForm').submit(function(event) {
        event.preventDefault();
        grecaptcha.ready(function() {
            grecaptcha.execute("{{ env('GOOGLE_RECAPTCHA_KEY') }}", {action: 'subscribe_newsletter'}).then(function(token) {
                $('#contactUSForm').prepend('<input type="hidden" name="g-recaptcha-response" value="' + token + '">');
                $('#contactUSForm').unbind('submit').submit();
            });;
        });
    });
    </script>
    <script type="text/javascript" nonce="{{ csp_nonce() }}">
    function onloadCallback() {
        /* Place your recaptcha rendering code here */
        const onloadCallback = function() {
            console.log("reCAPTCHA has loaded!");
            grecaptcha.reset();
        };
    }
</script>
<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" nonce="{{ csp_nonce() }}"></script>
    @livewireScripts(['nonce' => csp_nonce() ])
</body>

</html>
