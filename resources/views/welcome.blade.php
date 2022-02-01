<x-guest-layout >
    <x-slot name="title">
        Inicio
    </x-slot>
    <!-- Start Main Slides Area -->
    @livewire('estaticas.main-slides-area')
    <!-- End Main Slides Area -->

    <!-- Start Partner Area -->
    @livewire('estaticas.partner-area')
    <!-- End Partner Area -->

    <!-- Start About Area -->
    @livewire('estaticas.about-area')
    <!-- End About Area -->

    <!-- Start Services Area -->
    @livewire('estaticas.services-area')
    <!-- End Services Area -->

    <!-- Start Choose Area -->
    @livewire('estaticas.choose-area')
    <!-- End Choose Area -->

    <!-- Start Video Area -->
    @livewire('estaticas.video-area')
    <!-- End Video Area -->

    <!-- Start Projects Area -->
    @livewire('estaticas.projects-area')
    <!-- End Projects Area -->

    <!-- Start Testimonials Area -->
    @livewire('estaticas.testimonials-area')
    <!-- End Testimonials Area -->

    <!-- Start Pricing Area -->
    @livewire('estaticas.pricing-area')
    <!-- End Pricing Area -->

    <!-- Start Blog Area -->
    @livewire('estaticas.blog-area')
    <!-- End Blog Area -->

    <!-- Start Overview Area -->
    @livewire('estaticas.over-view-area')
    <!-- End Overview Area -->
    @include('estaticas.api-facebook')
</x-guest-layout>
