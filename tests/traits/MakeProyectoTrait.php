<?php

use Faker\Factory as Faker;
use App\Models\Proyecto;
use App\Repositories\ProyectoRepository;

trait MakeProyectoTrait
{
    /**
     * Create fake instance of Proyecto and save it in database
     *
     * @param array $proyectoFields
     * @return Proyecto
     */
    public function makeProyecto($proyectoFields = [])
    {
        /** @var ProyectoRepository $proyectoRepo */
        $proyectoRepo = App::make(ProyectoRepository::class);
        $theme = $this->fakeProyectoData($proyectoFields);
        return $proyectoRepo->create($theme);
    }

    /**
     * Get fake instance of Proyecto
     *
     * @param array $proyectoFields
     * @return Proyecto
     */
    public function fakeProyecto($proyectoFields = [])
    {
        return new Proyecto($this->fakeProyectoData($proyectoFields));
    }

    /**
     * Get fake data of Proyecto
     *
     * @param array $postFields
     * @return array
     */
    public function fakeProyectoData($proyectoFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'nombre' => $fake->word,
            'objetivos' => $fake->text,
            'actividades_aprendizaje' => $fake->text,
            'resultados_aprendizaje' => $fake->text,
            'evidencias' => $fake->text,
            'instrumentos_evaluacion' => $fake->text,
            'asignaturas' => $fake->text,
            'topicos_recomendados' => $fake->text,
            'estrategias_didacticas' => $fake->text,
            'idAlumno' => $fake->randomDigitNotNull,
            'idEmpresa' => $fake->randomDigitNotNull,
            'idAsesorEmpresarial' => $fake->randomDigitNotNull,
            'idAsesorAcademico' => $fake->randomDigitNotNull,
            'created_at' => $fake->date('Y-m-d H:i:s'),
            'updated_at' => $fake->date('Y-m-d H:i:s'),
            'deleted_at' => $fake->date('Y-m-d H:i:s')
        ], $proyectoFields);
    }
}
