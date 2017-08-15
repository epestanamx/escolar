<?php

use App\Models\Estancia;
use App\Repositories\EstanciaRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class EstanciaRepositoryTest extends TestCase
{
    use MakeEstanciaTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var EstanciaRepository
     */
    protected $estanciaRepo;

    public function setUp()
    {
        parent::setUp();
        $this->estanciaRepo = App::make(EstanciaRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateEstancia()
    {
        $estancia = $this->fakeEstanciaData();
        $createdEstancia = $this->estanciaRepo->create($estancia);
        $createdEstancia = $createdEstancia->toArray();
        $this->assertArrayHasKey('id', $createdEstancia);
        $this->assertNotNull($createdEstancia['id'], 'Created Estancia must have id specified');
        $this->assertNotNull(Estancia::find($createdEstancia['id']), 'Estancia with given id must be in DB');
        $this->assertModelData($estancia, $createdEstancia);
    }

    /**
     * @test read
     */
    public function testReadEstancia()
    {
        $estancia = $this->makeEstancia();
        $dbEstancia = $this->estanciaRepo->find($estancia->id);
        $dbEstancia = $dbEstancia->toArray();
        $this->assertModelData($estancia->toArray(), $dbEstancia);
    }

    /**
     * @test update
     */
    public function testUpdateEstancia()
    {
        $estancia = $this->makeEstancia();
        $fakeEstancia = $this->fakeEstanciaData();
        $updatedEstancia = $this->estanciaRepo->update($fakeEstancia, $estancia->id);
        $this->assertModelData($fakeEstancia, $updatedEstancia->toArray());
        $dbEstancia = $this->estanciaRepo->find($estancia->id);
        $this->assertModelData($fakeEstancia, $dbEstancia->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteEstancia()
    {
        $estancia = $this->makeEstancia();
        $resp = $this->estanciaRepo->delete($estancia->id);
        $this->assertTrue($resp);
        $this->assertNull(Estancia::find($estancia->id), 'Estancia should not exist in DB');
    }
}
