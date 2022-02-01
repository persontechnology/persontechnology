<?php

namespace App\Http\Livewire\Estaticas;

use App\Models\User;
use App\Notifications\EnviarContacto;
use Livewire\Component;

class TalkArea extends Component
{
    public $nombres;
    public $correo;
    public $asunto;
    public $mensaje;
    public $telefono;

    public function render()
    {
        return view('livewire.estaticas.talk-area');
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, [
            'nombres'=>'required|min:5|max:255|string',
            'correo'=>'required|max:255|email|string',
            'asunto'=>'required|min:5|max:255|string',
            'mensaje'=>'required|min:20|max:255',
            'telefono'=>'required|min:6|max:50',
        ]);
    }

    public function enviar()
    {
        $validatedData = $this->validate([
            'nombres'=>'required|min:5|max:255|string',
            'correo'=>'required|max:255|email|string',
            'asunto'=>'required|min:5|max:255|string',
            'mensaje'=>'required|min:20|max:255',
            'telefono'=>'required|min:6|max:50',
        ]);
        $smj=config('app.name','PERSON TECHNOLOGY').', '.__('Te da la bienvenida y gracias por escribirnos. Intentaremos responderte lo antes posible.');
        $user=new User();
        $user->email='persontechnologys@gmail.com';
        $user->notify(new EnviarContacto($validatedData));
        session()->flash('message', $smj);
        $this->vaciar();
    }

    public function vaciar()
    {
        
        $this->nombres="";
        $this->correo="";
        $this->asunto="";
        $this->mensaje="";
        $this->telefono="";
    }

}
