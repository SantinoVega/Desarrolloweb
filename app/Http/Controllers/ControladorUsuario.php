<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorUsuario extends Controller
{
    //
    public function usuarios()
    {
    	return view('usuarios');
    }

    public function id($id)
    {
    	return "Mostrando detalle del usuario {$id}";
    }

    public function nuevo()
    {
    	return "Crear un usuario";
    }

    
}
