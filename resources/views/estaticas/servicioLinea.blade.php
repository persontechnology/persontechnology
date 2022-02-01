<x-guest-layout>
    <x-slot name="title">
        Servicios
    </x-slot>
    @livewire('estaticas.page-banner-area',['title'=>'Servicios','fondo'=>'bg-4'])

    <!-- Start Services Details Area -->
    <div class="services-details-area ptb-100">
        <div class="container">
            <div class="services-details-desc">
                <div class="article-services-image">
                    <img src="{{ asset('assets/images/services-details/servicio-linea.png') }}" alt="image">
                </div>
                <div class="article-services-content">
                    <h3>Servicios on-line </h3>
                    <p>
                        Los servicios on-line permiten establecer relaciones duraderas los clientes, lo cual se puede transformar en óptimos resultados para tu negocio En la mayoría de las áreas de una empresa, la buena atención es esencial. 
                    </p>
                    <p>
                        Es a través de ella que se crea el maravilloso vínculo entre el cliente y el negocio, es decir, a partir de ahí se establece el primer contacto entre la marca y sus clientes, es esa primera impresión tan importante. 
                    </p>

                   
                </div>
                <div class="article-services-quote">
                    <i class="ri-double-quotes-l"></i>
                    <p>
                        Actualmente, el tiempo es muy valioso para los consumidores, tus clientes potenciales buscan procesos rápidos y dinámicos. De lo contrario, optarán por tus competidores que ofrezcan servicios y atención más efectivos. 
                    </p>

                    <div class="quote-shape">
                        <img src="{{ asset('assets/images/services-details/circle-shape.png') }}" alt="image">
                    </div>
                </div>
                <div class="article-services-content">
                    <p>
                        Por lo tanto, uno de los mayores retos para las empresas hoy en día es consolidar un servicio on-line rápido e inteligente, permitiendo resolver problemas con agilidad, además de reunir y responder las principales dudas de los usuarios. 
                    </p>
                    <p>
                        Para ello, se requiere un sistema de atención en línea, generalmente un chatbot, que permita una comunicación instantánea entre el cliente y tu empresa. 
                    </p>
                    <ul class="list">
                        <li>
                            <h4>Beneficios de contar con servicios de atención on-line</h4>
                        </li>
                        <li><i class="ri-checkbox-circle-line"></i> Son accesibles desde cualquier lugar y a cualquier hora siempre que se tenga conexión con el internet</li>
                        <li><i class="ri-checkbox-circle-line"></i> Incremento de la interacción y comunicación entre el usuario y la empresa o institución que ofrece un producto o servicio.</li>
                        <li><i class="ri-checkbox-circle-line"></i> Proporcionan mayor comodidad al momento de realizar gestiones como pagos, consultas o búsquedas.</li>
                        <li><i class="ri-checkbox-circle-line"></i> Ahorro de tiempo en la realización de tramites en instituciones públicas y privadas</li>
                        <li><i class="ri-checkbox-circle-line"></i> Almacenamiento de información sobre el cliente que pueda ser relevante para el negocio</li>
                    </ul>
                </div>
                
                <div class="article-services-content">
                    <h3>¿Cómo ofrecer servicios on-line?</h3>
                    <p>
                        El chatbot es un ejemplo de un sistema de conversación on-line muy eficaz, impulsado por tecnologías innovadoras como IA y machine learning, permite un servicio autónomo e inteligente. 
                    </p>
                    <p>
                        <strong>Contamos con un sistema completo de servicios on-line, así como con los más variados recursos disponibles para ofrecer una atención digital eficaz. </strong>
                    </p>
                </div>
            </div>
        </div>

        <div class="services-details-shape">
            <img src="{{ asset('assets/images/services-details/line-shape.png') }}" alt="image">
        </div>
    </div>
    <!-- End Services Details Area -->

    @livewire('estaticas.choose-area')
    @livewire('estaticas.video-area')
    @livewire('estaticas.projects-area')
    @livewire('estaticas.testimonials-area')
</x-guest-layout>