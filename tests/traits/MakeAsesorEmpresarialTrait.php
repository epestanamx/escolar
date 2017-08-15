<?php

use Faker\Factory as Faker;
use App\Models\AsesorEmpresarial;
use App\Repositories\AsesorEmpresarialRepository;

trait MakeAsesorEmpresarialTrait
{
    /**
     * Create fake instance of AsesorEmpresarial and save it in database
     *
     * @param array $asesorEmpresarialFields
     * @return AsesorEmpresarial
     */
    public function makeAsesorEmpresarial($asesorEmpresarialFields = [])
    {
        /** @var AsesorEmpresarialRepository $asesorEmpresarialRepo */
        $asesorEmpresarialRepo = App::make(AsesorEmpresarialRepository::class);
        $theme = $this->fakeAsesorEmpresarialData($asesorEmpresarialFields);
        return $asesorEmpresarialRepo->create($theme);
    }

    /**
     * Get fake instance of AsesorEmpresarial
     *
     * @param array $asesorEmpresarialFields
     * @return AsesorEmpresarial
     */
    public function fakeAsesorEmpresarial($asesorEmpresarialFields = [])
    {
        return new AsesorEmpresarial($this->fakeAsesorEmpresarialData($asesorEmpresarialFields));
    }

    /**
     * Get fake data of AsesorEmpresarial
     *
     * @param array $postFields
     * @return array
     */
    public function fakeAsesorEmpresarialData($asesorEmpresarialFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'titulo' => $fake->word,
            'nombres' => $fake->word,
            'apellidos' => $fake->word,
            'email' => $fake->word,
            'telefono' => $fake->word,
            'idEmpresa' => $fake->randomDigitNotNull,
            'created_at' => $fake->date('Y-m-d H:i:s'),
            'updated_at' => $fake->date('Y-m-d H:i:s'),
            'deleted_at' => $fake->date('Y-m-d H:i:s')
        ], $asesorEmpresarialFields);
    }
}
