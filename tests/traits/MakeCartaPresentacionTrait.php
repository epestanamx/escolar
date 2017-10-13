<?php

use Faker\Factory as Faker;
use App\Models\CartaPresentacion;
use App\Repositories\CartaPresentacionRepository;

trait MakeCartaPresentacionTrait
{
    /**
     * Create fake instance of CartaPresentacion and save it in database
     *
     * @param array $cartaPresentacionFields
     * @return CartaPresentacion
     */
    public function makeCartaPresentacion($cartaPresentacionFields = [])
    {
        /** @var CartaPresentacionRepository $cartaPresentacionRepo */
        $cartaPresentacionRepo = App::make(CartaPresentacionRepository::class);
        $theme = $this->fakeCartaPresentacionData($cartaPresentacionFields);
        return $cartaPresentacionRepo->create($theme);
    }

    /**
     * Get fake instance of CartaPresentacion
     *
     * @param array $cartaPresentacionFields
     * @return CartaPresentacion
     */
    public function fakeCartaPresentacion($cartaPresentacionFields = [])
    {
        return new CartaPresentacion($this->fakeCartaPresentacionData($cartaPresentacionFields));
    }

    /**
     * Get fake data of CartaPresentacion
     *
     * @param array $postFields
     * @return array
     */
    public function fakeCartaPresentacionData($cartaPresentacionFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'idAlumno' => $fake->randomDigitNotNull,
            'idEmpresa' => $fake->randomDigitNotNull,
            'idPeriodo' => $fake->randomDigitNotNull,
            'tipo' => $fake->word,
            'horas' => $fake->randomDigitNotNull,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $cartaPresentacionFields);
    }
}
