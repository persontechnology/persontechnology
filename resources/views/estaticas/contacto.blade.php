<x-guest-layout>
    <x-slot name="title">
        Contactos
    </x-slot>
    @livewire('estaticas.page-banner-area',['title'=>'Contacto'])
    @livewire('estaticas.over-view-area')
    @livewire('estaticas.talk-area')
    <!-- Start Map Area -->
    <div class="container ptb-100">
        <div class="map-location">
            {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.140633560602!2d-78.59904078554149!3d-1.0560432992296698!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91d47d65d8fa200b%3A0x34733f08f4ed0469!2sPerson%20Technology!5e0!3m2!1ses!2sec!4v1643324139583!5m2!1ses!2sec" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe> --}}
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3989.1567962446043!2d-78.59383302503474!3d-1.0433737489465829!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91d47d65d8fa200b%3A0x34733f08f4ed0469!2sPerson%20Technology!5e0!3m2!1ses-419!2sec!4v1714401437170!5m2!1ses-419!2sec" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    <!-- End Map Area -->
    @include('estaticas.api-facebook')
</x-guest-layout>
