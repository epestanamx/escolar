<?php

use Faker\Factory as Faker;
use App\Models\Alumno;
use App\Repositories\AlumnoRepository;

trait MakeAlumnoTrait
{
    /**
     * Create fake instance of Alumno and save it in database
     *
     * @param array $alumnoFields
     * @return Alumno
     */
    public function makeAlumno($alumnoFields = [])
    {
        /** @var AlumnoRepository $alumnoRepo */
        $alumnoRepo = App::make(AlumnoRepository::class);
        $theme = $this->fakeAlumnoData($alumnoFields);
        return $alumnoRepo->create($theme);
    }

    /**
     * Get fake instance of Alumno
     *
     * @param array $alumnoFields
     * @return Alumno
     */
    public function fakeAlumno($alumnoFields = [])
    {
        return new Alumno($this->fakeAlumnoData($alumnoFields));
    }

    /**
     * Get fake data of Alumno
     *
     * @param array $postFields
     * @return array
     */
    public function fakeAlumnoData($alumnoFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'matricula' => $fake->word,
            'nombres' => $fake->word,
            'apellidos' => $fake->word,
            'email' => $fake->word,
            'telefono' => $fake->word,
            'nss' => $fake->word,
            'cuatrimestre' => $fake->word,
            'grupo' => $fake->word,
            'idCarrera' => $fake->randomDigitNotNull,
            'created_at' => $fake->date('Y-m-d H:i:s'),
            'updated_at' => $fake->date('Y-m-d H:i:s'),
            'deleted_at' => $fake->date('Y-m-d H:i:s')
        ], $alumnoFields);
    }
}
