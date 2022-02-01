<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstaticasController extends Controller
{
    public function contacto()
    {
        return view('estaticas.contacto');
    }
    public function empresa()
    {
        return view('estaticas.empresa');
    }
    public function servicioElectronico()
    {
        return view('estaticas.servicioElectronico');
    }

    public function servicioSoftware()
    {
        return view('estaticas.servicioSoftware');
    }
    public function servicioLinea()
    {
        return view('estaticas.servicioLinea');
    }
    public function servicioConsultoria()
    {
        return view('estaticas.servicioConsultoria');
    }
}
