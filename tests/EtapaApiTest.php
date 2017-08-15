<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class EtapaApiTest extends TestCase
{
    use MakeEtapaTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateEtapa()
    {
        $etapa = $this->fakeEtapaData();
        $this->json('POST', '/api/v1/etapas', $etapa);

        $this->assertApiResponse($etapa);
    }

    /**
     * @test
     */
    public function testReadEtapa()
    {
        $etapa = $this->makeEtapa();
        $this->json('GET', '/api/v1/etapas/'.$etapa->id);

        $this->assertApiResponse($etapa->toArray());
    }

    /**
     * @test
     */
    public function testUpdateEtapa()
    {
        $etapa = $this->makeEtapa();
        $editedEtapa = $this->fakeEtapaData();

        $this->json('PUT', '/api/v1/etapas/'.$etapa->id, $editedEtapa);

        $this->assertApiResponse($editedEtapa);
    }

    /**
     * @test
     */
    public function testDeleteEtapa()
    {
        $etapa = $this->makeEtapa();
        $this->json('DELETE', '/api/v1/etapas/'.$etapa->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/etapas/'.$etapa->id);

        $this->assertResponseStatus(404);
    }
}
