<?php

namespace App\Http\Livewire\Estaticas;

use Livewire\Component;

class PageBannerArea extends Component
{
    public $title;
    public $fondo;
    
    public function render()
    {
        return view('livewire.estaticas.page-banner-area');
    }
}
