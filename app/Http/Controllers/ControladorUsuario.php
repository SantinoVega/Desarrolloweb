<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorUsuario extends Controller
{
    //
    public function usuarios()
    {
        if(request()->has('empty'))
        {
            $users=[];
        }
        else
        {
            $users=[
                "Mariana",
                "Paty",
                "Dulce",
                '<script> alert("Clicker")</script>'
            ];
            
        }

        $titulo='Listado de usuarios';


        return view('usuarios',compact('users','titulo'));

        /**  esta es otra forma de mandar parametros a la vista.
        return view('usuarios',['users'=>$users,'titulo'=>'Listado de usuarios']);
        
        return view('usuarios')
        ->with('users',$users)
        ->with('titulo','Listado de usuarios');

        return view('usuarios')->with(['users'=>$users,'titulo'=>'Listado de usuarios']);
        
        **/
    }


    public function id($id)
    {

    	return view('detalleUsuario',compact('id'));
        //      ->with('id',$id);
        //return "Mostrando detalle del usuario {$id}";
    }


    public function nuevo()
    {
    	return view('nuevo');
        //return "Crear un usuario";
    }

    
}
