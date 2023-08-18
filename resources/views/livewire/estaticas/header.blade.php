<header class="main-header-area">
    <!-- Start Navbar Area -->
    <div class="navbar-area">
        <div class="main-responsive-nav">
            <div class="container">
                <div class="main-responsive-menu">
                    <div class="logo">
                        <a href="{{ url('/') }}">
                            <img src="{{ asset('assets/images/persontechnology.svg') }}" alt="image">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-navbar">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="{{ asset('assets/images/persontechnology.svg') }}" alt="image">
                    </a>

                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a href="{{ url('/') }}" class="nav-link {{ request()->routeIs('welcome')?'active':'' }}">Inicio</a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('empresa') }}" class="nav-link 
                                {{ request()->routeIs('empresa')?'active':'' }}
                                ">
                                    Empresa
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link {{ request()->routeIs('servicio.*')?'active':'' }}">
                                    Servicios
                                    <i class="ri-arrow-down-s-line"></i>
                                </a>

                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="{{ route('servicio.electronico') }}" class="nav-link {{ request()->routeIs('servicio.electronico')?'active':'' }}">Diseño y producción de equipos electrónicos</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('servicio.software') }}" class="nav-link {{ request()->routeIs('servicio.software')?'active':'' }}">Desarrollo de software</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('servicio.linea') }}" class="nav-link {{ request()->routeIs('servicio.linea')?'active':'' }}">Servicios en línea</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('servicio.consultoria') }}" class="nav-link {{ request()->routeIs('servicio.consultoria')?'active':'' }}">Consultoría informática</a>
                                    </li>
                                </ul>
                            </li>

                            
                            {{-- <li class="nav-item">
                                <a href="pricing.html" class="nav-link">Proyectos</a>
                            </li>
                           
                            <li class="nav-item">
                                <a href="pricing.html" class="nav-link">Blog</a>
                            </li> --}}

                            <li class="nav-item">
                                <a href="{{ route('contacto') }}" class="nav-link {{ request()->routeIs('contacto')?'active':'' }}">Contacto</a>
                            </li>
                        </ul>

                        <div class="others-options d-flex align-items-center">
                            {{-- <div class="option-item">
                                <i class="search-btn ri-search-line"></i>
                                <i class="close-btn ri-close-line"></i>
                                <div class="search-overlay search-popup">
                                    <div class='search-box'>
                                        <form class="search-form">
                                            <input class="search-input" placeholder="Search..." type="text">

                                            <button class="search-button" type="submit">
                                                <i class="ri-search-line"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div> --}}

                            <div class="option-item">
                                <div class="side-menu-btn">
                                    <i class="ri-bar-chart-horizontal-line" data-bs-toggle="modal"
                                        data-bs-target="#sidebarModal"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

        <div class="others-option-for-responsive">
            <div class="container">
                <div class="dot-menu">
                    <div class="inner">
                        <div class="circle circle-one"></div>
                        <div class="circle circle-two"></div>
                        <div class="circle circle-three"></div>
                    </div>
                </div>

                <div class="container">
                    <div class="option-inner">
                        <div class="others-options d-flex align-items-center">
                            {{-- <div class="option-item">
                                <i class="search-btn ri-search-line"></i>
                                <i class="close-btn ri-close-line"></i>
                                <div class="search-overlay search-popup">
                                    <div class='search-box'>
                                        <form class="search-form">
                                            <input class="search-input" placeholder="Search..." type="text">

                                            <button class="search-button" type="submit">
                                                <i class="ri-search-line"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div> --}}

                            <div class="option-item">
                                <div class="side-menu-btn">
                                    <i class="ri-bar-chart-horizontal-line" data-bs-toggle="modal"
                                        data-bs-target="#sidebarModal"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Navbar Area -->
</header>
