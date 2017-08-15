<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AsesorAcademicoApiTest extends TestCase
{
    use MakeAsesorAcademicoTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateAsesorAcademico()
    {
        $asesorAcademico = $this->fakeAsesorAcademicoData();
        $this->json('POST', '/api/v1/asesorAcademicos', $asesorAcademico);

        $this->assertApiResponse($asesorAcademico);
    }

    /**
     * @test
     */
    public function testReadAsesorAcademico()
    {
        $asesorAcademico = $this->makeAsesorAcademico();
        $this->json('GET', '/api/v1/asesorAcademicos/'.$asesorAcademico->id);

        $this->assertApiResponse($asesorAcademico->toArray());
    }

    /**
     * @test
     */
    public function testUpdateAsesorAcademico()
    {
        $asesorAcademico = $this->makeAsesorAcademico();
        $editedAsesorAcademico = $this->fakeAsesorAcademicoData();

        $this->json('PUT', '/api/v1/asesorAcademicos/'.$asesorAcademico->id, $editedAsesorAcademico);

        $this->assertApiResponse($editedAsesorAcademico);
    }

    /**
     * @test
     */
    public function testDeleteAsesorAcademico()
    {
        $asesorAcademico = $this->makeAsesorAcademico();
        $this->json('DELETE', '/api/v1/asesorAcademicos/'.$asesorAcademico->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/asesorAcademicos/'.$asesorAcademico->id);

        $this->assertResponseStatus(404);
    }
}
