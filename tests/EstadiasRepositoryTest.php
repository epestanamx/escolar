<?php

use App\Models\Estadias;
use App\Repositories\EstadiasRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class EstadiasRepositoryTest extends TestCase
{
    use MakeEstadiasTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var EstadiasRepository
     */
    protected $estadiasRepo;

    public function setUp()
    {
        parent::setUp();
        $this->estadiasRepo = App::make(EstadiasRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateEstadias()
    {
        $estadias = $this->fakeEstadiasData();
        $createdEstadias = $this->estadiasRepo->create($estadias);
        $createdEstadias = $createdEstadias->toArray();
        $this->assertArrayHasKey('id', $createdEstadias);
        $this->assertNotNull($createdEstadias['id'], 'Created Estadias must have id specified');
        $this->assertNotNull(Estadias::find($createdEstadias['id']), 'Estadias with given id must be in DB');
        $this->assertModelData($estadias, $createdEstadias);
    }

    /**
     * @test read
     */
    public function testReadEstadias()
    {
        $estadias = $this->makeEstadias();
        $dbEstadias = $this->estadiasRepo->find($estadias->id);
        $dbEstadias = $dbEstadias->toArray();
        $this->assertModelData($estadias->toArray(), $dbEstadias);
    }

    /**
     * @test update
     */
    public function testUpdateEstadias()
    {
        $estadias = $this->makeEstadias();
        $fakeEstadias = $this->fakeEstadiasData();
        $updatedEstadias = $this->estadiasRepo->update($fakeEstadias, $estadias->id);
        $this->assertModelData($fakeEstadias, $updatedEstadias->toArray());
        $dbEstadias = $this->estadiasRepo->find($estadias->id);
        $this->assertModelData($fakeEstadias, $dbEstadias->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteEstadias()
    {
        $estadias = $this->makeEstadias();
        $resp = $this->estadiasRepo->delete($estadias->id);
        $this->assertTrue($resp);
        $this->assertNull(Estadias::find($estadias->id), 'Estadias should not exist in DB');
    }
}
