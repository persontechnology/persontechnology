<x-guest-layout>
    <x-slot name="title">
        Servicios
    </x-slot>
    @livewire('estaticas.page-banner-area',['title'=>'Servicios','fondo'=>'bg-2'])
    <!-- Start Services Details Area -->
    <div class="services-details-area">
        <div class="container">
            <div class="services-details-desc">
                <div class="article-services-content">
                    <h3>Diseño y producción de equipos electrónicos</h3>
                    <p><strong>Implementamos tu producto.</strong></p>
                    <p>
                        Creamos un producto a partir de la idea o de un prototipo. Diseñamos, producimos y ensamblamos productos electrónicos listo para su salida al mercado.
                    </p>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-12">
                        <h3>Diseño</h3>
                        <div class="article-services-middle-image">
                            <img src="{{ asset('assets/images/services-details/servicio-1.png') }}" alt="image">
                        </div>
                        <p>En las etapas de diseño se tienen en cuenta los estándares más exigentes en seguridad, compatibilidad e inmunidad de acuerdo con las normas de referencia.</p>
                    </div>
                    <div class="col-lg-4 col-sm-12">
                        <h3>Prototipado</h3>
                        <div class="article-services-middle-image">
                            <img src="{{ asset('assets/images/services-details/servicio-2.png') }}" alt="image">
                        </div>
                        <p>Ofrecemos una amplia variedad de opciones de prototipado para garantizar el éxito final del proyecto. </p>
                    </div>
                    <div class="col-lg-4 col-sm-12">
                        <h3>Empaquetado</h3>
                        <div class="article-services-middle-image">
                            <img src="{{ asset('assets/images/services-details/servicio-3.png') }}" alt="image">
                        </div>
                        <p>Los productos se suministran perfectamente empaquetados y preparados para facilitar la integración directa en el producto final del cliente.</p>
                    </div>
                </div>
                <div class="article-services-content">
                    <h3>¿Cómo creamos un producto electrónico a medida?</h3>
                    <p>Integra todos los departamentos implicados en el diseño, prueba, optimización y fabricación de equipos. El cliente dispone de información directa del proceso de producción.</p>
                    
                    <div class="article-services-middle-image">
                        <img src="{{ asset('assets/images/services-details/etapas.png') }}" alt="image">
                    </div>
                    <ul class="list">
                        <li>
                            <h4>Etapas</h4>
                        </li>
                        <li><strong>Diseño eléctrico y electrónico.</strong> Nuestros equipos de ingenieros I+D crean un sistema que cumple con los requisitos conceptuales aportados por el cliente.</li>
                        <li><strong>Diseño mecánico.</strong> De forma paralela al desarrollo de las placas electrónicas, nuestro departamento CAD diseña el aspecto exterior del producto.</li>
                        <li><strong>Software y firmware.</strong> Ingenieros de software llevan a cabo el desarrollo de interfaces de usuario y programación de circuitos integrados de acuerdo a las prestaciones requeridas por el cliente.</li>
                        <li><strong>Ensamblaje de placas de circuito impreso.</strong> Ensamblamos sus placas PCB en nuestra planta de montaje. Una sala blanca con atmósfera controlada asegura la máxima calidad de fabricación con tecnología SMD.</li>
                        <li><strong>Ensamblaje de equipos.</strong> en nuestras propias líneas de producción.</li>
                        <li><strong>Asesoramiento.</strong> Le ayudamos a elegir el proveedor de componentes electrónicos que se ajuste a sus requisitos de calidad/precio. Nuestra experiencia le permite elegir diferentes tipos de materiales para la presentación de sus productos: Desde plástico ABS hasta metales ligeros como el aluminio. Ajustamos el presupuesto a sus necesidades.</li>
                    </ul>
                    
                </div>
                <div class="article-services-quote">
                    <i class="ri-double-quotes-l"></i>
                    <p>Nuestro equipo de diseño y desarrollo dispone de amplia experiencia en equipos electrónicos para múltiples sectores de actividad. </p>
                    <a href="{{ route('contacto') }}" class="default-btn">Empezar</a>
                    <div class="quote-shape">
                        <img src="{{ asset('assets/images/services-details/circle-shape.png') }}" alt="image">
                    </div>
                </div>
            </div>
        </div>

        <div class="services-details-shape">
            <img src="{{ asset('assets/images/services-details/line-shape.png') }}" alt="image">
        </div>
    </div>
    <!-- End Services Details Area -->
    @livewire('estaticas.over-view-area')
</x-guest-layout>