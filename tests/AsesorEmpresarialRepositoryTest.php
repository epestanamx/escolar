<?php

use App\Models\AsesorEmpresarial;
use App\Repositories\AsesorEmpresarialRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AsesorEmpresarialRepositoryTest extends TestCase
{
    use MakeAsesorEmpresarialTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var AsesorEmpresarialRepository
     */
    protected $asesorEmpresarialRepo;

    public function setUp()
    {
        parent::setUp();
        $this->asesorEmpresarialRepo = App::make(AsesorEmpresarialRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateAsesorEmpresarial()
    {
        $asesorEmpresarial = $this->fakeAsesorEmpresarialData();
        $createdAsesorEmpresarial = $this->asesorEmpresarialRepo->create($asesorEmpresarial);
        $createdAsesorEmpresarial = $createdAsesorEmpresarial->toArray();
        $this->assertArrayHasKey('id', $createdAsesorEmpresarial);
        $this->assertNotNull($createdAsesorEmpresarial['id'], 'Created AsesorEmpresarial must have id specified');
        $this->assertNotNull(AsesorEmpresarial::find($createdAsesorEmpresarial['id']), 'AsesorEmpresarial with given id must be in DB');
        $this->assertModelData($asesorEmpresarial, $createdAsesorEmpresarial);
    }

    /**
     * @test read
     */
    public function testReadAsesorEmpresarial()
    {
        $asesorEmpresarial = $this->makeAsesorEmpresarial();
        $dbAsesorEmpresarial = $this->asesorEmpresarialRepo->find($asesorEmpresarial->id);
        $dbAsesorEmpresarial = $dbAsesorEmpresarial->toArray();
        $this->assertModelData($asesorEmpresarial->toArray(), $dbAsesorEmpresarial);
    }

    /**
     * @test update
     */
    public function testUpdateAsesorEmpresarial()
    {
        $asesorEmpresarial = $this->makeAsesorEmpresarial();
        $fakeAsesorEmpresarial = $this->fakeAsesorEmpresarialData();
        $updatedAsesorEmpresarial = $this->asesorEmpresarialRepo->update($fakeAsesorEmpresarial, $asesorEmpresarial->id);
        $this->assertModelData($fakeAsesorEmpresarial, $updatedAsesorEmpresarial->toArray());
        $dbAsesorEmpresarial = $this->asesorEmpresarialRepo->find($asesorEmpresarial->id);
        $this->assertModelData($fakeAsesorEmpresarial, $dbAsesorEmpresarial->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteAsesorEmpresarial()
    {
        $asesorEmpresarial = $this->makeAsesorEmpresarial();
        $resp = $this->asesorEmpresarialRepo->delete($asesorEmpresarial->id);
        $this->assertTrue($resp);
        $this->assertNull(AsesorEmpresarial::find($asesorEmpresarial->id), 'AsesorEmpresarial should not exist in DB');
    }
}
