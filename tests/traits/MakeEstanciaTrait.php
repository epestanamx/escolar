<?php

use Faker\Factory as Faker;
use App\Models\Estancia;
use App\Repositories\EstanciaRepository;

trait MakeEstanciaTrait
{
    /**
     * Create fake instance of Estancia and save it in database
     *
     * @param array $estanciaFields
     * @return Estancia
     */
    public function makeEstancia($estanciaFields = [])
    {
        /** @var EstanciaRepository $estanciaRepo */
        $estanciaRepo = App::make(EstanciaRepository::class);
        $theme = $this->fakeEstanciaData($estanciaFields);
        return $estanciaRepo->create($theme);
    }

    /**
     * Get fake instance of Estancia
     *
     * @param array $estanciaFields
     * @return Estancia
     */
    public function fakeEstancia($estanciaFields = [])
    {
        return new Estancia($this->fakeEstanciaData($estanciaFields));
    }

    /**
     * Get fake data of Estancia
     *
     * @param array $postFields
     * @return array
     */
    public function fakeEstanciaData($estanciaFields = [])
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
        ], $estanciaFields);
    }
}
