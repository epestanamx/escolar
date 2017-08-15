<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class EstanciaApiTest extends TestCase
{
    use MakeEstanciaTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateEstancia()
    {
        $estancia = $this->fakeEstanciaData();
        $this->json('POST', '/api/v1/estancias', $estancia);

        $this->assertApiResponse($estancia);
    }

    /**
     * @test
     */
    public function testReadEstancia()
    {
        $estancia = $this->makeEstancia();
        $this->json('GET', '/api/v1/estancias/'.$estancia->id);

        $this->assertApiResponse($estancia->toArray());
    }

    /**
     * @test
     */
    public function testUpdateEstancia()
    {
        $estancia = $this->makeEstancia();
        $editedEstancia = $this->fakeEstanciaData();

        $this->json('PUT', '/api/v1/estancias/'.$estancia->id, $editedEstancia);

        $this->assertApiResponse($editedEstancia);
    }

    /**
     * @test
     */
    public function testDeleteEstancia()
    {
        $estancia = $this->makeEstancia();
        $this->json('DELETE', '/api/v1/estancias/'.$estancia->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/estancias/'.$estancia->id);

        $this->assertResponseStatus(404);
    }
}
