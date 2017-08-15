<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ProyectoApiTest extends TestCase
{
    use MakeProyectoTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateProyecto()
    {
        $proyecto = $this->fakeProyectoData();
        $this->json('POST', '/api/v1/proyectos', $proyecto);

        $this->assertApiResponse($proyecto);
    }

    /**
     * @test
     */
    public function testReadProyecto()
    {
        $proyecto = $this->makeProyecto();
        $this->json('GET', '/api/v1/proyectos/'.$proyecto->id);

        $this->assertApiResponse($proyecto->toArray());
    }

    /**
     * @test
     */
    public function testUpdateProyecto()
    {
        $proyecto = $this->makeProyecto();
        $editedProyecto = $this->fakeProyectoData();

        $this->json('PUT', '/api/v1/proyectos/'.$proyecto->id, $editedProyecto);

        $this->assertApiResponse($editedProyecto);
    }

    /**
     * @test
     */
    public function testDeleteProyecto()
    {
        $proyecto = $this->makeProyecto();
        $this->json('DELETE', '/api/v1/proyectos/'.$proyecto->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/proyectos/'.$proyecto->id);

        $this->assertResponseStatus(404);
    }
}
