<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AsesorEmpresarialApiTest extends TestCase
{
    use MakeAsesorEmpresarialTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateAsesorEmpresarial()
    {
        $asesorEmpresarial = $this->fakeAsesorEmpresarialData();
        $this->json('POST', '/api/v1/asesorEmpresarials', $asesorEmpresarial);

        $this->assertApiResponse($asesorEmpresarial);
    }

    /**
     * @test
     */
    public function testReadAsesorEmpresarial()
    {
        $asesorEmpresarial = $this->makeAsesorEmpresarial();
        $this->json('GET', '/api/v1/asesorEmpresarials/'.$asesorEmpresarial->id);

        $this->assertApiResponse($asesorEmpresarial->toArray());
    }

    /**
     * @test
     */
    public function testUpdateAsesorEmpresarial()
    {
        $asesorEmpresarial = $this->makeAsesorEmpresarial();
        $editedAsesorEmpresarial = $this->fakeAsesorEmpresarialData();

        $this->json('PUT', '/api/v1/asesorEmpresarials/'.$asesorEmpresarial->id, $editedAsesorEmpresarial);

        $this->assertApiResponse($editedAsesorEmpresarial);
    }

    /**
     * @test
     */
    public function testDeleteAsesorEmpresarial()
    {
        $asesorEmpresarial = $this->makeAsesorEmpresarial();
        $this->json('DELETE', '/api/v1/asesorEmpresarials/'.$asesorEmpresarial->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/asesorEmpresarials/'.$asesorEmpresarial->id);

        $this->assertResponseStatus(404);
    }
}
