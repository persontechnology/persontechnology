<div class="services-area with-radius ptb-100">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-4 col-md-12">
                <div class="services-section-content" data-aos="fade-down" data-aos-delay="80" data-aos-duration="800"
                    data-aos-once="true">
                    <span>SERVICIOS</span>
                    <h3>Brindamos los mejores servicios de <b>CALIDAD</b> <span class="overlay"></span></h3>
                    <p>Somos una empresa proveedora de soluciones tecnológicas en todo el mundo con más de {{ date('Y')-2017 }} años de experiencia.</p>
                    
                </div>
            </div>

            <div class="col-lg-8 col-md-12">
                <div class="services-slides owl-carousel owl-theme">
                    <div class="services-item">
                        <div class="services-image">
                            <a href="{{ route('servicio.electronico') }}"><img src="{{ asset('assets/images/services/services-1.jpg') }}" alt="image"></a>
                        </div>
                        <div class="services-content">
                            <h3>
                                <a href="{{ route('servicio.electronico') }}">Diseño y producción de equipos electrónicos</a>
                            </h3>
                            <p>Somos especialistas en diseño y fabricación de soluciones electrónicas para empresas.</p>
                            <a href="{{ route('servicio.electronico') }}" class="services-btn">Ver más</a>
                        </div>
                    </div>

                    <div class="services-item">
                        <div class="services-image">
                            <a href="{{ route('servicio.software') }}"><img src="{{ asset('assets/images/services/services-2.jpg') }}" alt="image"></a>
                        </div>
                        <div class="services-content">
                            <h3>
                                <a href="{{ route('servicio.software') }}html">Desarrollo de software</a>
                            </h3>
                            <p>Realizamos el ciclo completo de un desarrollo de software.</p>
                            <a href="{{ route('servicio.software') }}" class="services-btn">Ver más</a>
                        </div>
                    </div>

                    <div class="services-item">
                        <div class="services-image">
                            <a href="{{ route('servicio.linea') }}"><img src="{{ asset('assets/images/services/services-3.jpg') }}" alt="image"></a>
                        </div>
                        <div class="services-content">
                            <h3>
                                <a href="{{ route('servicio.linea') }}">Servicios en línea</a>
                            </h3>
                            <p>Incluyen servicios de correo electrónico, sitios web de música o películas, motores de búsqueda o tiendas en línea.</p>
                            <a href="{{ route('servicio.linea') }}" class="services-btn">Ver más</a>
                        </div>
                    </div>

                    <div class="services-item">
                        <div class="services-image">
                            <a href="{{ route('servicio.consultoria') }}"><img src="{{ asset('assets/images/services/services-4.jpg') }}" alt="image"></a>
                        </div>
                        <div class="services-content">
                            <h3>
                                <a href="{{ route('servicio.consultoria') }}">Consultoría informática</a>
                            </h3>
                            <p>Asesoramos a otras compañías para implantar de la mejor forma posible las nuevas tecnologías disponibles en el mercado.</p>
                            <a href="{{ route('servicio.consultoria') }}" class="services-btn">Ver más</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
