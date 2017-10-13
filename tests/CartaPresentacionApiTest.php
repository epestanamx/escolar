<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class CartaPresentacionApiTest extends TestCase
{
    use MakeCartaPresentacionTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateCartaPresentacion()
    {
        $cartaPresentacion = $this->fakeCartaPresentacionData();
        $this->json('POST', '/api/v1/cartaPresentacions', $cartaPresentacion);

        $this->assertApiResponse($cartaPresentacion);
    }

    /**
     * @test
     */
    public function testReadCartaPresentacion()
    {
        $cartaPresentacion = $this->makeCartaPresentacion();
        $this->json('GET', '/api/v1/cartaPresentacions/'.$cartaPresentacion->id);

        $this->assertApiResponse($cartaPresentacion->toArray());
    }

    /**
     * @test
     */
    public function testUpdateCartaPresentacion()
    {
        $cartaPresentacion = $this->makeCartaPresentacion();
        $editedCartaPresentacion = $this->fakeCartaPresentacionData();

        $this->json('PUT', '/api/v1/cartaPresentacions/'.$cartaPresentacion->id, $editedCartaPresentacion);

        $this->assertApiResponse($editedCartaPresentacion);
    }

    /**
     * @test
     */
    public function testDeleteCartaPresentacion()
    {
        $cartaPresentacion = $this->makeCartaPresentacion();
        $this->json('DELETE', '/api/v1/cartaPresentacions/'.$cartaPresentacion->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/cartaPresentacions/'.$cartaPresentacion->id);

        $this->assertResponseStatus(404);
    }
}
