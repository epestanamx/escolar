<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class CredencialApiTest extends TestCase
{
    use MakeCredencialTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateCredencial()
    {
        $credencial = $this->fakeCredencialData();
        $this->json('POST', '/api/v1/credencials', $credencial);

        $this->assertApiResponse($credencial);
    }

    /**
     * @test
     */
    public function testReadCredencial()
    {
        $credencial = $this->makeCredencial();
        $this->json('GET', '/api/v1/credencials/'.$credencial->id);

        $this->assertApiResponse($credencial->toArray());
    }

    /**
     * @test
     */
    public function testUpdateCredencial()
    {
        $credencial = $this->makeCredencial();
        $editedCredencial = $this->fakeCredencialData();

        $this->json('PUT', '/api/v1/credencials/'.$credencial->id, $editedCredencial);

        $this->assertApiResponse($editedCredencial);
    }

    /**
     * @test
     */
    public function testDeleteCredencial()
    {
        $credencial = $this->makeCredencial();
        $this->json('DELETE', '/api/v1/credencials/'.$credencial->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/credencials/'.$credencial->id);

        $this->assertResponseStatus(404);
    }
}
