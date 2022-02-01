<x-guest-layout>
    <x-slot name="title">
        Empresa
    </x-slot>
    @livewire('estaticas.page-banner-area',['title'=>'Nosotros','fondo'=>''])
    @livewire('estaticas.empresa-area')
    @livewire('estaticas.partner-area')
    @livewire('estaticas.skill-area')
    @livewire('estaticas.pricing-area')
    @livewire('estaticas.choose-area')
    @livewire('estaticas.over-view-area')
    @livewire('estaticas.talk-area')
</x-guest-layout>
