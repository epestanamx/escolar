<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AlumnoApiTest extends TestCase
{
    use MakeAlumnoTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateAlumno()
    {
        $alumno = $this->fakeAlumnoData();
        $this->json('POST', '/api/v1/alumnos', $alumno);

        $this->assertApiResponse($alumno);
    }

    /**
     * @test
     */
    public function testReadAlumno()
    {
        $alumno = $this->makeAlumno();
        $this->json('GET', '/api/v1/alumnos/'.$alumno->id);

        $this->assertApiResponse($alumno->toArray());
    }

    /**
     * @test
     */
    public function testUpdateAlumno()
    {
        $alumno = $this->makeAlumno();
        $editedAlumno = $this->fakeAlumnoData();

        $this->json('PUT', '/api/v1/alumnos/'.$alumno->id, $editedAlumno);

        $this->assertApiResponse($editedAlumno);
    }

    /**
     * @test
     */
    public function testDeleteAlumno()
    {
        $alumno = $this->makeAlumno();
        $this->json('DELETE', '/api/v1/alumnos/'.$alumno->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/alumnos/'.$alumno->id);

        $this->assertResponseStatus(404);
    }
}
