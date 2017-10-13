<?php

use App\Models\CartaPresentacion;
use App\Repositories\CartaPresentacionRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class CartaPresentacionRepositoryTest extends TestCase
{
    use MakeCartaPresentacionTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var CartaPresentacionRepository
     */
    protected $cartaPresentacionRepo;

    public function setUp()
    {
        parent::setUp();
        $this->cartaPresentacionRepo = App::make(CartaPresentacionRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateCartaPresentacion()
    {
        $cartaPresentacion = $this->fakeCartaPresentacionData();
        $createdCartaPresentacion = $this->cartaPresentacionRepo->create($cartaPresentacion);
        $createdCartaPresentacion = $createdCartaPresentacion->toArray();
        $this->assertArrayHasKey('id', $createdCartaPresentacion);
        $this->assertNotNull($createdCartaPresentacion['id'], 'Created CartaPresentacion must have id specified');
        $this->assertNotNull(CartaPresentacion::find($createdCartaPresentacion['id']), 'CartaPresentacion with given id must be in DB');
        $this->assertModelData($cartaPresentacion, $createdCartaPresentacion);
    }

    /**
     * @test read
     */
    public function testReadCartaPresentacion()
    {
        $cartaPresentacion = $this->makeCartaPresentacion();
        $dbCartaPresentacion = $this->cartaPresentacionRepo->find($cartaPresentacion->id);
        $dbCartaPresentacion = $dbCartaPresentacion->toArray();
        $this->assertModelData($cartaPresentacion->toArray(), $dbCartaPresentacion);
    }

    /**
     * @test update
     */
    public function testUpdateCartaPresentacion()
    {
        $cartaPresentacion = $this->makeCartaPresentacion();
        $fakeCartaPresentacion = $this->fakeCartaPresentacionData();
        $updatedCartaPresentacion = $this->cartaPresentacionRepo->update($fakeCartaPresentacion, $cartaPresentacion->id);
        $this->assertModelData($fakeCartaPresentacion, $updatedCartaPresentacion->toArray());
        $dbCartaPresentacion = $this->cartaPresentacionRepo->find($cartaPresentacion->id);
        $this->assertModelData($fakeCartaPresentacion, $dbCartaPresentacion->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteCartaPresentacion()
    {
        $cartaPresentacion = $this->makeCartaPresentacion();
        $resp = $this->cartaPresentacionRepo->delete($cartaPresentacion->id);
        $this->assertTrue($resp);
        $this->assertNull(CartaPresentacion::find($cartaPresentacion->id), 'CartaPresentacion should not exist in DB');
    }
}
