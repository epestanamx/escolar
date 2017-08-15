<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class EstadiasApiTest extends TestCase
{
    use MakeEstadiasTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateEstadias()
    {
        $estadias = $this->fakeEstadiasData();
        $this->json('POST', '/api/v1/estadias', $estadias);

        $this->assertApiResponse($estadias);
    }

    /**
     * @test
     */
    public function testReadEstadias()
    {
        $estadias = $this->makeEstadias();
        $this->json('GET', '/api/v1/estadias/'.$estadias->id);

        $this->assertApiResponse($estadias->toArray());
    }

    /**
     * @test
     */
    public function testUpdateEstadias()
    {
        $estadias = $this->makeEstadias();
        $editedEstadias = $this->fakeEstadiasData();

        $this->json('PUT', '/api/v1/estadias/'.$estadias->id, $editedEstadias);

        $this->assertApiResponse($editedEstadias);
    }

    /**
     * @test
     */
    public function testDeleteEstadias()
    {
        $estadias = $this->makeEstadias();
        $this->json('DELETE', '/api/v1/estadias/'.$estadias->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/estadias/'.$estadias->id);

        $this->assertResponseStatus(404);
    }
}
