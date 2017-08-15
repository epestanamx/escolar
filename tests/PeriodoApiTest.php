<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PeriodoApiTest extends TestCase
{
    use MakePeriodoTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreatePeriodo()
    {
        $periodo = $this->fakePeriodoData();
        $this->json('POST', '/api/v1/periodos', $periodo);

        $this->assertApiResponse($periodo);
    }

    /**
     * @test
     */
    public function testReadPeriodo()
    {
        $periodo = $this->makePeriodo();
        $this->json('GET', '/api/v1/periodos/'.$periodo->id);

        $this->assertApiResponse($periodo->toArray());
    }

    /**
     * @test
     */
    public function testUpdatePeriodo()
    {
        $periodo = $this->makePeriodo();
        $editedPeriodo = $this->fakePeriodoData();

        $this->json('PUT', '/api/v1/periodos/'.$periodo->id, $editedPeriodo);

        $this->assertApiResponse($editedPeriodo);
    }

    /**
     * @test
     */
    public function testDeletePeriodo()
    {
        $periodo = $this->makePeriodo();
        $this->json('DELETE', '/api/v1/periodos/'.$periodo->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/periodos/'.$periodo->id);

        $this->assertResponseStatus(404);
    }
}
