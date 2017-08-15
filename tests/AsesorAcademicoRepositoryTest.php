<?php

use App\Models\AsesorAcademico;
use App\Repositories\AsesorAcademicoRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AsesorAcademicoRepositoryTest extends TestCase
{
    use MakeAsesorAcademicoTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var AsesorAcademicoRepository
     */
    protected $asesorAcademicoRepo;

    public function setUp()
    {
        parent::setUp();
        $this->asesorAcademicoRepo = App::make(AsesorAcademicoRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateAsesorAcademico()
    {
        $asesorAcademico = $this->fakeAsesorAcademicoData();
        $createdAsesorAcademico = $this->asesorAcademicoRepo->create($asesorAcademico);
        $createdAsesorAcademico = $createdAsesorAcademico->toArray();
        $this->assertArrayHasKey('id', $createdAsesorAcademico);
        $this->assertNotNull($createdAsesorAcademico['id'], 'Created AsesorAcademico must have id specified');
        $this->assertNotNull(AsesorAcademico::find($createdAsesorAcademico['id']), 'AsesorAcademico with given id must be in DB');
        $this->assertModelData($asesorAcademico, $createdAsesorAcademico);
    }

    /**
     * @test read
     */
    public function testReadAsesorAcademico()
    {
        $asesorAcademico = $this->makeAsesorAcademico();
        $dbAsesorAcademico = $this->asesorAcademicoRepo->find($asesorAcademico->id);
        $dbAsesorAcademico = $dbAsesorAcademico->toArray();
        $this->assertModelData($asesorAcademico->toArray(), $dbAsesorAcademico);
    }

    /**
     * @test update
     */
    public function testUpdateAsesorAcademico()
    {
        $asesorAcademico = $this->makeAsesorAcademico();
        $fakeAsesorAcademico = $this->fakeAsesorAcademicoData();
        $updatedAsesorAcademico = $this->asesorAcademicoRepo->update($fakeAsesorAcademico, $asesorAcademico->id);
        $this->assertModelData($fakeAsesorAcademico, $updatedAsesorAcademico->toArray());
        $dbAsesorAcademico = $this->asesorAcademicoRepo->find($asesorAcademico->id);
        $this->assertModelData($fakeAsesorAcademico, $dbAsesorAcademico->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteAsesorAcademico()
    {
        $asesorAcademico = $this->makeAsesorAcademico();
        $resp = $this->asesorAcademicoRepo->delete($asesorAcademico->id);
        $this->assertTrue($resp);
        $this->assertNull(AsesorAcademico::find($asesorAcademico->id), 'AsesorAcademico should not exist in DB');
    }
}
