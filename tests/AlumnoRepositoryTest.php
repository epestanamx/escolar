<?php

use App\Models\Alumno;
use App\Repositories\AlumnoRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AlumnoRepositoryTest extends TestCase
{
    use MakeAlumnoTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var AlumnoRepository
     */
    protected $alumnoRepo;

    public function setUp()
    {
        parent::setUp();
        $this->alumnoRepo = App::make(AlumnoRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateAlumno()
    {
        $alumno = $this->fakeAlumnoData();
        $createdAlumno = $this->alumnoRepo->create($alumno);
        $createdAlumno = $createdAlumno->toArray();
        $this->assertArrayHasKey('id', $createdAlumno);
        $this->assertNotNull($createdAlumno['id'], 'Created Alumno must have id specified');
        $this->assertNotNull(Alumno::find($createdAlumno['id']), 'Alumno with given id must be in DB');
        $this->assertModelData($alumno, $createdAlumno);
    }

    /**
     * @test read
     */
    public function testReadAlumno()
    {
        $alumno = $this->makeAlumno();
        $dbAlumno = $this->alumnoRepo->find($alumno->id);
        $dbAlumno = $dbAlumno->toArray();
        $this->assertModelData($alumno->toArray(), $dbAlumno);
    }

    /**
     * @test update
     */
    public function testUpdateAlumno()
    {
        $alumno = $this->makeAlumno();
        $fakeAlumno = $this->fakeAlumnoData();
        $updatedAlumno = $this->alumnoRepo->update($fakeAlumno, $alumno->id);
        $this->assertModelData($fakeAlumno, $updatedAlumno->toArray());
        $dbAlumno = $this->alumnoRepo->find($alumno->id);
        $this->assertModelData($fakeAlumno, $dbAlumno->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteAlumno()
    {
        $alumno = $this->makeAlumno();
        $resp = $this->alumnoRepo->delete($alumno->id);
        $this->assertTrue($resp);
        $this->assertNull(Alumno::find($alumno->id), 'Alumno should not exist in DB');
    }
}
