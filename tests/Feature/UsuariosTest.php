<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsuariosTest extends TestCase
{
     /**
     * @test
     */
    function RutaUsuarios()
    {
        $this->get('/usuarios')
             ->assertStatus(200)
             ->assertSee('Listado de usuarios')
             ->assertSee('Mariana')
             ->assertSee('Paty')
             ->assertSee('Dulce')
             ->assertSee('Barra Lateral');
    }


     /**
     * @test
     */
    function RutaUsuariosVacia()
    {
        $this->get('/usuarios?empty')
             ->assertStatus(200)
             ->assertSee('Listado de usuarios')
             ->assertSee('No existen usuarios registrados');
    }


    /**
    * @test 
    **/
    function UsuariosDetalle()
    {
        $this->get('/usuarios/5')
             ->assertStatus(200)
             ->assertSee('Mostrar detalle de usuario: 5');
    }

   /**
    * @test
    **/

    function UsuariosNuevo()
    {
        $this->get('/usuarios/nuevo')
             ->assertStatus(200)
             ->assertSee("Crear un usuario");
    }



    /**
     * @test
     */
    function UsuariosNombre()
    {
        $this->get('/usuarios/Ivan')
             ->assertStatus(200)
             ->assertSee("Bienvenido Ivan No tienes apodo.");
    }

    /**
    *@test
    **/
    function UsuariosNickname()
    {
        $this->get('/usuarios/Ivan/Jabos')
             ->assertStatus(200)
             ->assertSee("Bienvenido Ivan tu apodo es: Jabos");
    }
}
