<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CursosTest extends TestCase
{
    /**
     * #[test]
     */
    public function test_cursos_home_responde_200_y_mensaje()
    {
        $resp = $this->get('/cursos');
        $resp->assertStatus(200);
        $resp->assertSee("Bienvenido al módulo de Cursos");
    }

    public function test_cursos_lista_responde_200_y_mensaje()
    {
        $resp = $this->get('/cursos/lista');
        $resp->assertStatus(200);
        $resp->assertSee("Listado de Cursos");
    }
}
