<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="facebook-domain-verification" content="btondjgzzzprclk1o89vvqchif9pct" />
    <meta name="description" content="{{ __('Somos una empresa ecuatoriana que diseña y produce equipos electrónicos, software y servicios en línea.') }}">
    <meta name="keywords" content="{{ __('Ciencia, Tecnología e Ingeniería') }},
    Desarrollo de software, 
    Desarrollo de software en Ecuador-Cotopaxi-Salcedo,
    Diseño de páginas web en Ecuador-Cotopaxi-Salcedo,
    Diseño de aplicaciones móviles en Ecuador-Cotopaxi-Salcedo,
    Tesis en Ecuador-Cotopaxi-Salcedo,
    Programación en Ecuador-Cotopaxi-Salcedo,
    Circuitos electrónicos en Ecuador-Cotopaxi-Salcedo,
    Arduino en Ecuador-Cotopaxi-Salcedo,
    Venta de computadores en Ecuador-Cotopaxi-Salcedo,
    Accesoria y consultoría informática en Ecuador-Cotopaxi-Salcedo,
    Empresa tecnológica Ecuador-Cotopaxi-Salcedo,
    Empresa informática en Ecuador-Cotopaxi-Salcedo,
    Sistema de facturación Ecuador-Cotopaxi-Salcedo,
    Sistema escolástico Ecuador-Cotopaxi-Salcedo,
    Sistema de ventas Ecuador-Cotopaxi-Salcedo">

    <meta name="author" content="Person Technology">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{ __('Ciencia, Tecnología e Ingeniería') }}" />
    <meta property="og:description" content="{{ __('Somos una empresa ecuatoriana que diseña y produce equipos electrónicos, software y servicios en línea.') }}" />
    <meta property="og:image" content="{{ asset('assets/images/PERSONTECHNOLOGY.png') }}" />
    <meta property="og:image:width" content="1080" />
    <meta property="og:image:height" content="1080" />
    <meta property="og:url" content="{{ url('/') }}" />
    <meta property="og:site_name" content="{{ config('app.name','PERSON TECHNOLOGY') }}" />
    <meta property="fb:app_id" content="263449115173815" />
    <meta property="og:locale" content="{{ str_replace('_', '-', app()->getLocale()) }}" />
    <meta property="og:video" content="https://youtu.be/333pv9r9myQ" />
    <meta property="og:video:type" content="application/x-shockwave-flash" />

    <link rel="schema.DC" href="http://purl.org/dc/elements/1.1/">
    <meta name="DC.Title" content="{{ __('Ciencia, Tecnología e Ingeniería') }}">
    <meta name="DC.Creator" content="Person Technology">
    <meta name="DC.Description" content="{{ __('Somos una empresa ecuatoriana que diseña y produce equipos electrónicos, software y servicios en línea.') }}">


    
    <!-- Links of CSS files -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/remixicon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/odometer.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

    <title>
    @isset($title)
        {{ $title }} | 
    @endisset
    {{ config('app.name','PERSON TECHNOLOGY') }}
    </title>

    <link rel="icon" type="image/png" href="{{ asset('assets/images/favicon.png') }}">
    @livewireStyles
</head>

<body>

    <!-- Start Preloader Area -->
    <div class="preloader">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="lds-spinner">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Preloader Area -->

    <!-- Start Header Area -->
    @livewire('estaticas.header')
    <!-- End Header Area -->

    <!-- Sidebar Modal -->
    @livewire('estaticas.sider-modal')
    <!-- End Sidebar Modal -->

    <main>
        {{ $slot }}
    </main>

    <!-- End Footer Area -->
    @livewire('estaticas.footer')
    <!-- End Footer Area -->

    <!-- Start Go Top Area -->
    <div class="go-top">
        <i class="ri-arrow-up-s-line"></i>
    </div>
    <!-- End Go Top Area -->

    <!-- Links of JS files -->
    {{-- <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>___scripts_1___ --}}

    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.meanmenu.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.appear.js') }}"></script>
    <script src="{{ asset('assets/js/odometer.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/fancybox.min.js') }}"></script>
    <script src="{{ asset('assets/js/tweenmax.min.js') }}"></script>
    <script src="{{ asset('assets/js/ScrollMagic.min.js') }}"></script>
    <script src="{{ asset('assets/js/animation.gsap.min.js') }}"></script>
    <script src="{{ asset('assets/js/debug.addIndicators.min.js') }}"></script>
    <script src="{{ asset('assets/js/mixitup.min.js') }}"></script>
    <script src="{{ asset('assets/js/nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/tilt.jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/parallax.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('assets/js/aos.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    @livewireScripts
</body>

</html>
