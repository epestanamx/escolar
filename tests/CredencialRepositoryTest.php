<?php

use App\Models\Credencial;
use App\Repositories\CredencialRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class CredencialRepositoryTest extends TestCase
{
    use MakeCredencialTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var CredencialRepository
     */
    protected $credencialRepo;

    public function setUp()
    {
        parent::setUp();
        $this->credencialRepo = App::make(CredencialRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateCredencial()
    {
        $credencial = $this->fakeCredencialData();
        $createdCredencial = $this->credencialRepo->create($credencial);
        $createdCredencial = $createdCredencial->toArray();
        $this->assertArrayHasKey('id', $createdCredencial);
        $this->assertNotNull($createdCredencial['id'], 'Created Credencial must have id specified');
        $this->assertNotNull(Credencial::find($createdCredencial['id']), 'Credencial with given id must be in DB');
        $this->assertModelData($credencial, $createdCredencial);
    }

    /**
     * @test read
     */
    public function testReadCredencial()
    {
        $credencial = $this->makeCredencial();
        $dbCredencial = $this->credencialRepo->find($credencial->id);
        $dbCredencial = $dbCredencial->toArray();
        $this->assertModelData($credencial->toArray(), $dbCredencial);
    }

    /**
     * @test update
     */
    public function testUpdateCredencial()
    {
        $credencial = $this->makeCredencial();
        $fakeCredencial = $this->fakeCredencialData();
        $updatedCredencial = $this->credencialRepo->update($fakeCredencial, $credencial->id);
        $this->assertModelData($fakeCredencial, $updatedCredencial->toArray());
        $dbCredencial = $this->credencialRepo->find($credencial->id);
        $this->assertModelData($fakeCredencial, $dbCredencial->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteCredencial()
    {
        $credencial = $this->makeCredencial();
        $resp = $this->credencialRepo->delete($credencial->id);
        $this->assertTrue($resp);
        $this->assertNull(Credencial::find($credencial->id), 'Credencial should not exist in DB');
    }
}
