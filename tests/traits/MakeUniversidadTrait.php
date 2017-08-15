<?php

use Faker\Factory as Faker;
use App\Models\Universidad;
use App\Repositories\UniversidadRepository;

trait MakeUniversidadTrait
{
    /**
     * Create fake instance of Universidad and save it in database
     *
     * @param array $universidadFields
     * @return Universidad
     */
    public function makeUniversidad($universidadFields = [])
    {
        /** @var UniversidadRepository $universidadRepo */
        $universidadRepo = App::make(UniversidadRepository::class);
        $theme = $this->fakeUniversidadData($universidadFields);
        return $universidadRepo->create($theme);
    }

    /**
     * Get fake instance of Universidad
     *
     * @param array $universidadFields
     * @return Universidad
     */
    public function fakeUniversidad($universidadFields = [])
    {
        return new Universidad($this->fakeUniversidadData($universidadFields));
    }

    /**
     * Get fake data of Universidad
     *
     * @param array $postFields
     * @return array
     */
    public function fakeUniversidadData($universidadFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'nombre' => $fake->word,
            'direccion' => $fake->word,
            'telefono' => $fake->word,
            'email' => $fake->word,
            'jefe_vinculacion_titulo' => $fake->word,
            'jefe_vinculacion_nombres' => $fake->word,
            'jefe_vinculacion_apellidos' => $fake->word,
            'created_at' => $fake->date('Y-m-d H:i:s'),
            'updated_at' => $fake->date('Y-m-d H:i:s'),
            'deleted_at' => $fake->date('Y-m-d H:i:s')
        ], $universidadFields);
    }
}
