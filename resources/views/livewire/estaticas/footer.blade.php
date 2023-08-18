
<footer class="footer-area with-black-background margin-zero pt-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="single-footer-widget" data-aos="fade-up" data-aos-delay="50" data-aos-duration="500" data-aos-once="true">
                    <div class="widget-logo">
                        <a href="index.html"><img src="{{ asset('assets/images/persontechnology.svg') }}" alt="image"></a>
                    </div>
                    <p>
                        Somos una empresa ecuatoriana que diseña y produce equipos electrónicos, software y servicios en línea.
                    </p>

                    
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-footer-widget ps-5" data-aos="fade-up" data-aos-delay="60" data-aos-duration="600" data-aos-once="true">
                    <h3>¡Síguenos en nuestras redes sociales!</h3>
                    <p>
                        Nos gusta escuchar, dialogar, compartir opiniones y conocer mejor a los que se interesan por la tecnología.</p>
                    <ul class="widget-social">
                        <li>
                            <a href="https://wa.me/message/P6E77NRUVOC3A1" target="_blank">
                                <i class="ri-whatsapp-line"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/persontechnology" target="_blank">
                                <i class="ri-facebook-fill"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/persontechnology/?hl=es-la" target="_blank">
                                <i class="ri-instagram-line"></i>
                            </a>
                        </li>
                        
                        <li>
                            <a href="https://www.youtube.com/channel/UCTQWC6Ms6a2G0GLNQHcjWtg" target="_blank">
                                <i class="ri-youtube-fill"></i>
                            </a>
                        </li>

                        <li>
                            <a href="https://github.com/persontechnology" target="_blank">
                                <i class="ri-github-fill"></i>
                            </a>
                        </li>

                        

                        <li>
                            <a href="https://www.tiktok.com/@persontechnology?lang=es" target="_blank">
                                <i class="ri-live-fill"></i>
                            </a>
                        </li>
                        
                        
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-footer-widget" data-aos="fade-up" data-aos-delay="80" data-aos-duration="800" data-aos-once="true">
                    <h3>HABLEMOS</h3>

                    <p>Nuestro equipo regresará a usted en cuestión de horas para ayudarlo.</p>
                        <a href="{{ route('contacto') }}" class="default-btn">CONTACTAR</a>
                        
                    
                </div>
            </div>
        </div>
    </div>
    
    <div class="copyright-area">
        <div class="container">
            <div class="copyright-area-content">
                <p>
                    Copyright {{ '@'.date('Y') }} Todos los derechos reservados por
                    <a href="{{ url('/') }}"> Person Technology</a>
                </p>
            </div>
        </div>
    </div>
    <div class="footer-shape-1">
        <img src="{{ asset('assets/images/footer/footer-shape-1.png') }}" alt="image">
    </div>
    <div class="footer-shape-2">
        <img src="{{ asset('assets/images/footer/footer-shape-2.png') }}" alt="image">
    </div>
    <div class="footer-shape-3">
        <img src="{{ asset('assets/images/footer/footer-shape-3.png') }}" alt="image">
    </div>
</footer>
