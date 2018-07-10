<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Saludo extends Controller
{
    public function __invoke($name,$nick=null)
    {
    	return view('saludo',['name'=>$name,'nick'=>$nick]);

    	/*
			return view('saludo')
			->with('name',$name)
			->with('nick',$nick);


    	if($nick)
		{

		return "Bienvenido {$name} tu apodo es: {$nick}"; 
		}
		else
		{
		
    	return "Bienvenido {$name} No tienes apodo.";
		}
		*/

    }
}
