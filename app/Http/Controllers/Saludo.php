<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Saludo extends Controller
{
    public function __invoke($name,$nick=null)
    {
    	if($nick)
		{
		return "Bienvenido {$name} tu apodo es: {$nick}"; 
		}
		else
		{
		
    	return "Bienvenido {$name} No tienes apodo.";
		}

    }
}
