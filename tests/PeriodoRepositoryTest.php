<?php

use App\Models\Periodo;
use App\Repositories\PeriodoRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PeriodoRepositoryTest extends TestCase
{
    use MakePeriodoTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var PeriodoRepository
     */
    protected $periodoRepo;

    public function setUp()
    {
        parent::setUp();
        $this->periodoRepo = App::make(PeriodoRepository::class);
    }

    /**
     * @test create
     */
    public function testCreatePeriodo()
    {
        $periodo = $this->fakePeriodoData();
        $createdPeriodo = $this->periodoRepo->create($periodo);
        $createdPeriodo = $createdPeriodo->toArray();
        $this->assertArrayHasKey('id', $createdPeriodo);
        $this->assertNotNull($createdPeriodo['id'], 'Created Periodo must have id specified');
        $this->assertNotNull(Periodo::find($createdPeriodo['id']), 'Periodo with given id must be in DB');
        $this->assertModelData($periodo, $createdPeriodo);
    }

    /**
     * @test read
     */
    public function testReadPeriodo()
    {
        $periodo = $this->makePeriodo();
        $dbPeriodo = $this->periodoRepo->find($periodo->id);
        $dbPeriodo = $dbPeriodo->toArray();
        $this->assertModelData($periodo->toArray(), $dbPeriodo);
    }

    /**
     * @test update
     */
    public function testUpdatePeriodo()
    {
        $periodo = $this->makePeriodo();
        $fakePeriodo = $this->fakePeriodoData();
        $updatedPeriodo = $this->periodoRepo->update($fakePeriodo, $periodo->id);
        $this->assertModelData($fakePeriodo, $updatedPeriodo->toArray());
        $dbPeriodo = $this->periodoRepo->find($periodo->id);
        $this->assertModelData($fakePeriodo, $dbPeriodo->toArray());
    }

    /**
     * @test delete
     */
    public function testDeletePeriodo()
    {
        $periodo = $this->makePeriodo();
        $resp = $this->periodoRepo->delete($periodo->id);
        $this->assertTrue($resp);
        $this->assertNull(Periodo::find($periodo->id), 'Periodo should not exist in DB');
    }
}
