<?php

namespace App\Http\Livewire\Estaticas;

use Livewire\Component;

class MainSlidesArea extends Component
{

    public $sliders;
 
    public function mount()
    {
        $this->sliders= array(
            [
                'titulo'=>'SOMOS EMPRESA LÍDER EN PROVEEDOR DE SOLUCIONES TECNOLÓGICAS',
                'mensaje'=>'CIENCIA',
                'descripcion'=>'Somos una empresa ecuatoriana que diseña y produce equipos electrónicos, software y servicios en línea.',
                'imagen'=>'assets/images/home-slides/slides-1.png',
                'url'=>route('contacto'),
            ],
            [
                'titulo'=>'SOMOS EMPRESA LÍDER EN PROVEEDOR DE SOLUCIONES TECNOLÓGICAS',
                'mensaje'=>'TECNOLOGÍA',
                'descripcion'=>'Somos una empresa ecuatoriana que diseña y produce equipos electrónicos, software y servicios en línea.',
                'imagen'=>'assets/images/home-slides/slides-2.png',
                'url'=>route('contacto'),
            ],
            [
                'titulo'=>'SOMOS EMPRESA LÍDER EN PROVEEDOR DE SOLUCIONES TECNOLÓGICAS',
                'mensaje'=>'INGENIERÍA',
                'descripcion'=>'Somos una empresa ecuatoriana que diseña y produce equipos electrónicos, software y servicios en línea.',
                'imagen'=>'assets/images/home-slides/slides-3.png',
                'url'=>route('contacto'),
            ],
        );

        
    }


    public function render()
    {
        
        return view('livewire.estaticas.main-slides-area');
    }
}
