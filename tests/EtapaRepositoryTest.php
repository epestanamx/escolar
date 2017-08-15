<?php

use App\Models\Etapa;
use App\Repositories\EtapaRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class EtapaRepositoryTest extends TestCase
{
    use MakeEtapaTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var EtapaRepository
     */
    protected $etapaRepo;

    public function setUp()
    {
        parent::setUp();
        $this->etapaRepo = App::make(EtapaRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateEtapa()
    {
        $etapa = $this->fakeEtapaData();
        $createdEtapa = $this->etapaRepo->create($etapa);
        $createdEtapa = $createdEtapa->toArray();
        $this->assertArrayHasKey('id', $createdEtapa);
        $this->assertNotNull($createdEtapa['id'], 'Created Etapa must have id specified');
        $this->assertNotNull(Etapa::find($createdEtapa['id']), 'Etapa with given id must be in DB');
        $this->assertModelData($etapa, $createdEtapa);
    }

    /**
     * @test read
     */
    public function testReadEtapa()
    {
        $etapa = $this->makeEtapa();
        $dbEtapa = $this->etapaRepo->find($etapa->id);
        $dbEtapa = $dbEtapa->toArray();
        $this->assertModelData($etapa->toArray(), $dbEtapa);
    }

    /**
     * @test update
     */
    public function testUpdateEtapa()
    {
        $etapa = $this->makeEtapa();
        $fakeEtapa = $this->fakeEtapaData();
        $updatedEtapa = $this->etapaRepo->update($fakeEtapa, $etapa->id);
        $this->assertModelData($fakeEtapa, $updatedEtapa->toArray());
        $dbEtapa = $this->etapaRepo->find($etapa->id);
        $this->assertModelData($fakeEtapa, $dbEtapa->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteEtapa()
    {
        $etapa = $this->makeEtapa();
        $resp = $this->etapaRepo->delete($etapa->id);
        $this->assertTrue($resp);
        $this->assertNull(Etapa::find($etapa->id), 'Etapa should not exist in DB');
    }
}
