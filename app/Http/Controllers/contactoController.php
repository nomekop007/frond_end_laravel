<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contactoController extends Controller
{
    public function envio(Request $datosPost)
    {

        $data = array( // se crea un arreglo llamado data que guardara los datos resividos 
            'nombre'   => $datosPost->nombre,
            'email' => $datosPost->email,
            'sujeto'     => $datosPost->sujeto,
            'msg'     => $datosPost->msg
        );

        return view('contacto')->with('datos', $data); // se envian el arreglo data a la view contacto
       
    }


}