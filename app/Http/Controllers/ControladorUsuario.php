<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorUsuario extends Controller
{
    //
    public function usuarios()
    {
        $users=[
            "Mariana",
            "Paty",
            "Dulce",
            '<script> alert("Clicker")</script>'
        ];

        return view('usuarios')->with(['users'=>$users,'titulo'=>'Listado de usuarios']);

        // esta es otra forma de mandar parametros a la vista.
    	//return view('usuarios',['users'=>$users,'titulo'=>'Listado de usuarios']);
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
