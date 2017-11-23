<?php

use Faker\Factory as Faker;
use App\Models\Credencial;
use App\Repositories\CredencialRepository;

trait MakeCredencialTrait
{
    /**
     * Create fake instance of Credencial and save it in database
     *
     * @param array $credencialFields
     * @return Credencial
     */
    public function makeCredencial($credencialFields = [])
    {
        /** @var CredencialRepository $credencialRepo */
        $credencialRepo = App::make(CredencialRepository::class);
        $theme = $this->fakeCredencialData($credencialFields);
        return $credencialRepo->create($theme);
    }

    /**
     * Get fake instance of Credencial
     *
     * @param array $credencialFields
     * @return Credencial
     */
    public function fakeCredencial($credencialFields = [])
    {
        return new Credencial($this->fakeCredencialData($credencialFields));
    }

    /**
     * Get fake data of Credencial
     *
     * @param array $postFields
     * @return array
     */
    public function fakeCredencialData($credencialFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'idAlumno' => $fake->word,
            'tipo' => $fake->word,
            'estado' => $fake->word,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $credencialFields);
    }
}
