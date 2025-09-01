<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UsuariosTest extends TestCase
{
    /**
     * @test
     */



    public function test_usuarios_home_responde_200_y_mensaje()
    {
        $resp = $this->get('/usuarios');
        $resp->assertStatus(200);//404
        $resp->assertSee("Bienvenido al módulo de Usuarios");//Not Found
    }

    public function test_usuarios_lista_responde_200_y_mensaje()
    {
        $resp = $this->get('/usuarios/lista');
        $resp->assertStatus(200);
        $resp->assertSee("Listado de Usuarios");
    }


}
