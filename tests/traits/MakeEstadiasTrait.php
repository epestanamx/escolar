<?php

use Faker\Factory as Faker;
use App\Models\Estadias;
use App\Repositories\EstadiasRepository;

trait MakeEstadiasTrait
{
    /**
     * Create fake instance of Estadias and save it in database
     *
     * @param array $estadiasFields
     * @return Estadias
     */
    public function makeEstadias($estadiasFields = [])
    {
        /** @var EstadiasRepository $estadiasRepo */
        $estadiasRepo = App::make(EstadiasRepository::class);
        $theme = $this->fakeEstadiasData($estadiasFields);
        return $estadiasRepo->create($theme);
    }

    /**
     * Get fake instance of Estadias
     *
     * @param array $estadiasFields
     * @return Estadias
     */
    public function fakeEstadias($estadiasFields = [])
    {
        return new Estadias($this->fakeEstadiasData($estadiasFields));
    }

    /**
     * Get fake data of Estadias
     *
     * @param array $postFields
     * @return array
     */
    public function fakeEstadiasData($estadiasFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'idAlumno' => $fake->randomDigitNotNull,
            'idEmpresa' => $fake->randomDigitNotNull,
            'idAsesorEmpresarial' => $fake->randomDigitNotNull,
            'idAsesorAcademico' => $fake->randomDigitNotNull,
            'idProyecto' => $fake->randomDigitNotNull,
            'liberada' => $fake->word,
            'created_at' => $fake->date('Y-m-d H:i:s'),
            'updated_at' => $fake->date('Y-m-d H:i:s'),
            'deleted_at' => $fake->date('Y-m-d H:i:s')
        ], $estadiasFields);
    }
}
