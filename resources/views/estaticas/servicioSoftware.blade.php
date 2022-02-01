<x-guest-layout>
    <x-slot name="title">
        Servicios
    </x-slot>
    @livewire('estaticas.page-banner-area',['title'=>'Servicios','fondo'=>'bg-3'])
    <!-- Start Services Details Area -->
    <div class="services-details-area">
        <div class="container">
            <div class="services-details-desc">
                <div class="article-services-content">
                    <h3>Desarrollo de software</h3>
                    <p><strong>Seguimos en todos los casos una metodología de desarrollo.</strong></p>
                    <p>
                        Trabajamos en desarrollo de productos o en proyectos para la obtención de aplicaciones a medida de las necesidades de nuestros clientes. 
                    </p>
                    <h3>¿Qué hacemos?</h3>
                </div>
                
                <div class="row">
                    <div class="col-lg-3 col-sm-12">
                        <h3>Automatización de Procesos</h3>
                        <div class="article-services-middle-image">
                            <img src="{{ asset('assets/images/services-details/servicio-3.png') }}" alt="image">
                        </div>
                        <p>Automatizamos sus procesos empresariales y desarrollamos su capacidad para ser más ágiles, orientados a personas, innovadores, conectados, alineados y eficientes, en sintonía con el presente y preparados para futuros cambios.</p>
                    </div>
                    <div class="col-lg-3 col-sm-12">
                        <h3>Implementación Software ERP</h3>
                        <div class="article-services-middle-image">
                            <img src="{{ asset('assets/images/services-details/servicio-1.png') }}" alt="image">
                        </div>
                        <p>Gestione su empresa con un software integrado que le permita obtener una visión global del funcionamiento de la compañía. Obtenga velocidad, eficiencia, precisión e integración de todos los datos generados en las operaciones de la compañía.</p>
                    </div>
                    <div class="col-lg-3 col-sm-12">
                        <h3>Desarrollo a Medida</h3>
                        <div class="article-services-middle-image">
                            <img src="{{ asset('assets/images/services-details/servicio-2.png') }}" alt="image">
                        </div>
                        <p>Somos líderes en desarrollo de software personalizado para web y móviles. Nos especializamos en: levantamiento de requerimientos, gestión de proyectos, diseño de aplicaciones e implementación de sofware.</p>
                    </div>
                    <div class="col-lg-3 col-sm-12">
                        <h3>Gestión Documental</h3>
                        <div class="article-services-middle-image">
                            <img src="{{ asset('assets/images/services-details/servicio-4.png') }}" alt="image">
                        </div>
                        <p>Ofrecemos software y servicios que le ayudarán a dar solución a cualquier problemática relacionada con la gestión documental: digitalización de documentos, repositorio documental centralizado, archivo digital, etc.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="services-details-shape">
            <img src="{{ asset('assets/images/services-details/line-shape.png') }}" alt="image">
        </div>
    </div>
    <!-- End Services Details Area -->

    <!-- Start Choose Area -->
    <div class="choose-area bg-with-F5F5F5-color pt-100 pb-75 mt-5">
        <div class="container">
            <div class="section-title">
                <h2>Creamos el sistema / <b>aplicación</b> que su empresa necesita<span class="overlay"></span></h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="single-choose-card" data-aos="fade-up" data-aos-delay="50" data-aos-duration="500" data-aos-once="true">
                        <div class="choose-image" data-tilt>
                            <img src="{{ asset('assets/images/services-details/servicio-11.png') }}" alt="image">
                        </div>
                        <div class="choose-content">
                            <h3>
                                Sistemas 100% a medida
                            </h3>
                            <p>A partir del análisis funcional de las necesidades de su empresa, diseñamos sistemas que aumentan la eficiencia de la gestión diaria y simplifican su control.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-choose-card" data-aos="fade-up" data-aos-delay="60" data-aos-duration="600" data-aos-once="true">
                        <div class="choose-image" data-tilt>
                            <img src="{{ asset('assets/images/services-details/servicio-12.png') }}" alt="image">
                        </div>
                        <div class="choose-content">
                            <h3>
                                Metodologías ágiles
                            </h3>
                            <p>Aplicamos métodos de ingeniería del software basados en el desarrollo iterativo e incremental, donde los requisitos y soluciones evolucionan con el tiempo según la necesidad del proyecto.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-choose-card" data-aos="fade-up" data-aos-delay="70" data-aos-duration="700" data-aos-once="true">
                        <div class="choose-image" data-tilt>
                            <img src="{{ asset('assets/images/services-details/servicio-13.png') }}" alt="image">
                        </div>
                        <div class="choose-content">
                            <h3>
                                Equipos de Especialistas
                            </h3>
                            <p>Analistas, programadores y diseñadores que vienen trabajando juntos en múltiples proyectos. De este modo el cliente pone sus requerimientos en manos de un equipo con un sistema de trabajo que funciona.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-choose-card" data-aos="fade-up" data-aos-delay="80" data-aos-duration="800" data-aos-once="true">
                        <div class="choose-image" data-tilt>
                            <img src="{{ asset('assets/images/services-details/servicio-14.png') }}" alt="image">
                        </div>
                        <div class="choose-content">
                            <h3>
                                Módulos independientes o integrados
                            </h3>
                            <p>ERP y CRM a medida, Gestión de Producción y Stock, Gestión de Ventas, Gestión de Cobranzas, Gestión de Compras, Gestión de RRHH, etc</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-choose-card" data-aos="fade-up" data-aos-delay="80" data-aos-duration="800" data-aos-once="true">
                        <div class="choose-image" data-tilt>
                            <img src="{{ asset('assets/images/services-details/servicio-15.png') }}" alt="image">
                        </div>
                        <div class="choose-content">
                            <h3>
                                Cloud Servers
                            </h3>
                            <p>Implementación, configuración y mantenimiento de servidores virtuales dedicados, especialmente preparados para sus sistemas.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-choose-card" data-aos="fade-up" data-aos-delay="80" data-aos-duration="800" data-aos-once="true">
                        <div class="choose-image" data-tilt>
                            <img src="{{ asset('assets/images/services-details/servicio-16.png') }}" alt="image">
                        </div>
                        <div class="choose-content">
                            <h3>
                                Sistemas para Pymes
                            </h3>
                            <p>No es necesario ser una empresa grande para tener un sistema a medida. Creamos soluciones de software efectivas y económicas para PyMEs.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-choose-card" data-aos="fade-up" data-aos-delay="80" data-aos-duration="800" data-aos-once="true">
                        <div class="choose-image" data-tilt>
                            <img src="{{ asset('assets/images/services-details/servicio-17.png') }}" alt="image">
                        </div>
                        <div class="choose-content">
                            <h3>
                                Somos su socio tecnológico
                            </h3>
                            <p>Enfóquese en su Core Business, nosotros nos ocupamos del desarrollo, mantenimiento y soporte técnico de sus sistemas.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-choose-card" data-aos="fade-up" data-aos-delay="80" data-aos-duration="800" data-aos-once="true">
                        <div class="choose-image" data-tilt>
                            <img src="{{ asset('assets/images/services-details/servicio-18.png') }}" alt="image">
                        </div>
                        <div class="choose-content">
                            <h3>
                                Soporte personalizado
                            </h3>
                            <p>Cada cliente es muy importante para nosotros. Por eso brindamos soporte especializado con atención telefónica y esquema de emergencias para resolución inmediata</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-choose-card" data-aos="fade-up" data-aos-delay="80" data-aos-duration="800" data-aos-once="true">
                        <div class="choose-image" data-tilt>
                            <img src="{{ asset('assets/images/services-details/servicio-19.png') }}" alt="image">
                        </div>
                        <div class="choose-content">
                            <h3>
                                Aplicaciones móviles
                            </h3>
                            <p>Integramos soluciones móvil para Android e iOS a su sistema. Controle su empresa y reciba notificaciones en todo momento / lugar.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="choose-shape-1">
            <img src="{{ asset('assets/images/choose/choose-shape.png') }}" alt="image">
        </div>
        <div class="choose-shape-2">
            <img src="{{ asset('assets/images/choose/choose-shape-2.png') }}" alt="image">
        </div>
    </div>
    <!-- End Choose Area -->
    @livewire('estaticas.over-view-area')
    @livewire('estaticas.skill-area')
</x-guest-layout>