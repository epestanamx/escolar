<?php

use Faker\Factory as Faker;
use App\Models\AsesorAcademico;
use App\Repositories\AsesorAcademicoRepository;

trait MakeAsesorAcademicoTrait
{
    /**
     * Create fake instance of AsesorAcademico and save it in database
     *
     * @param array $asesorAcademicoFields
     * @return AsesorAcademico
     */
    public function makeAsesorAcademico($asesorAcademicoFields = [])
    {
        /** @var AsesorAcademicoRepository $asesorAcademicoRepo */
        $asesorAcademicoRepo = App::make(AsesorAcademicoRepository::class);
        $theme = $this->fakeAsesorAcademicoData($asesorAcademicoFields);
        return $asesorAcademicoRepo->create($theme);
    }

    /**
     * Get fake instance of AsesorAcademico
     *
     * @param array $asesorAcademicoFields
     * @return AsesorAcademico
     */
    public function fakeAsesorAcademico($asesorAcademicoFields = [])
    {
        return new AsesorAcademico($this->fakeAsesorAcademicoData($asesorAcademicoFields));
    }

    /**
     * Get fake data of AsesorAcademico
     *
     * @param array $postFields
     * @return array
     */
    public function fakeAsesorAcademicoData($asesorAcademicoFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'titulo' => $fake->word,
            'nombres' => $fake->word,
            'apellidos' => $fake->word,
            'email' => $fake->word,
            'telefono' => $fake->word,
            'created_at' => $fake->date('Y-m-d H:i:s'),
            'updated_at' => $fake->date('Y-m-d H:i:s'),
            'deleted_at' => $fake->date('Y-m-d H:i:s')
        ], $asesorAcademicoFields);
    }
}
