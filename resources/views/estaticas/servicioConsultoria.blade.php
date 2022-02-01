<x-guest-layout>
    <x-slot name="title">
        Servicios
    </x-slot>
    @livewire('estaticas.page-banner-area',['title'=>'Servicios','fondo'=>'bg-5'])
    <!-- Start Projects Details Area -->
    <div class="projects-details-area ptb-100">
        <div class="container">
            <div class="projects-details-desc">
                <div class="article-projects-with-info">
                    <div class="row align-items-center">
                        <div class="col-lg-7 col-md-6">
                            <div class="projects-info-image">
                                <img src="{{ asset('assets/images/projects-details/asesoria-informatica-1.png') }}" alt="image">

                                <div class="info-shape">
                                    <img src="{{ asset('assets/images/projects-details/circle-shape.png') }}" alt="image">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-5 col-md-6">
                            <div class="projects-info-content">
                                <h3>Consultoría Informática<span class="overlay"></span></h3>
                                <p><strong>Una buena elección y asesoramiento sobre los sistemas y herramientas informáticas que han de dar soporte a una organización es esencial para que ésta se mantenga en constante rendimiento</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="article-projects-content">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6">
                            <div class="content">
                                <h3>Alta experiencia</h3>
                                <p>Al servicio del Cliente para asistirle con las mejores opciones a implantar. El fin es conseguir una perfecta alineación entre los objetivos de la organización y las capacidades de sus sistemas informáticos.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="image">
                                <img src="{{ asset('assets/images/projects-details/asesoria-informatica.png') }}" alt="image">
                            </div>
                        </div>
                    </div>
                    <ul class="projects-list">
                        <li>
                            <h4>Ventajas de nuestro servicio de consultoría</h4>
                        </li>
                        <li><i class="ri-checkbox-circle-line"></i> Dedica el 100% de tu tiempo al desarrollo de tu negocio.</li>
                        <li><i class="ri-checkbox-circle-line"></i> Ahorro en costes, tanto personales como de mantenimiento.</li>
                        <li><i class="ri-checkbox-circle-line"></i> Facilita el flujo de información entre los diferentes departamentos.</li>
                        <li><i class="ri-checkbox-circle-line"></i> Aumenta la competitividad de tu negocio en su mercado.</li>
                        <li><i class="ri-checkbox-circle-line"></i> Encuentra la solución a los problemas informáticos que puedan surgir.</li>
                        <li><i class="ri-checkbox-circle-line"></i> Mejora la productividad y obtén mejores resultados.</li>
                    </ul>
                </div>
                <div class="article-projects-image">
                    <img src="{{ asset('assets/images/projects-details/projects-details-3.jpg') }}" alt="image">
                </div>
                <div class="article-projects-text">
                    <h3>Tu empresa obtendrá mejoras en varios niveles gracias a los beneficios de una consultoría informática</h3>
                    <p>
                        Este servicio de consultoría informática es fundamental para que los negocios, instituciones u organizaciones optimicen sus recursos y aprovechen al máximo las capacidades de las Tecnologías de la Información y la Comunicación (TIC) para seguir creciendo y ofrecer un servicio lo más completo posible.
                    </p>
                    <p>
                        <strong>¿Quieres aprovechar al máximo las funcionalidades de las herramientas informáticas?</strong>
                    </p>
                </div>
                <div class="article-projects-quote">
                    <i class="ri-double-quotes-l"></i>
                    <p>Ofrecemos varios tipos de Consultoría IT  y consultoría en sistemas para proporcionar servicios integrales a nuestros clientes, detectando y resolviendo problemas, y ayudando a todo tipo de empresas a desarrollar su infraestructura tecnológica para crecer.</p>

                    <div class="quote-shape">
                        <img src="{{ asset('assets/images/projects-details/circle-shape.png') }}" alt="image">
                    </div>
                </div>
                <div class="article-projects-text">
                    <p>Acompañamos a nuestros clientes en el proceso de transformación digital, objetivo estratégico de las organizaciones hoy en día debido al entorno empresarial actual y a la nueva economía.</p>
                </div>
            </div>
        </div>

        <div class="projects-details-shape">
            <img src="{{ asset('assets/images/projects-details/line-shape.png') }}" alt="image">
        </div>
    </div>
    <!-- End Projects Details Area -->
    @livewire('estaticas.over-view-area')
    @livewire('estaticas.skill-area')
    @livewire('estaticas.pricing-area')
    @livewire('estaticas.talk-area')
</x-guest-layout>