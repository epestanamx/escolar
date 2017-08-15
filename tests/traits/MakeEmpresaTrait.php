<?php

use Faker\Factory as Faker;
use App\Models\Empresa;
use App\Repositories\EmpresaRepository;

trait MakeEmpresaTrait
{
    /**
     * Create fake instance of Empresa and save it in database
     *
     * @param array $empresaFields
     * @return Empresa
     */
    public function makeEmpresa($empresaFields = [])
    {
        /** @var EmpresaRepository $empresaRepo */
        $empresaRepo = App::make(EmpresaRepository::class);
        $theme = $this->fakeEmpresaData($empresaFields);
        return $empresaRepo->create($theme);
    }

    /**
     * Get fake instance of Empresa
     *
     * @param array $empresaFields
     * @return Empresa
     */
    public function fakeEmpresa($empresaFields = [])
    {
        return new Empresa($this->fakeEmpresaData($empresaFields));
    }

    /**
     * Get fake data of Empresa
     *
     * @param array $postFields
     * @return array
     */
    public function fakeEmpresaData($empresaFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'nombre' => $fake->word,
            'giro_comercial' => $fake->word,
            'tipo' => $fake->word,
            'dirección' => $fake->word,
            'telefono' => $fake->word,
            'titulo' => $fake->word,
            'responsable_rh' => $fake->word,
            'extension' => $fake->word,
            'created_at' => $fake->date('Y-m-d H:i:s'),
            'updated_at' => $fake->date('Y-m-d H:i:s'),
            'deleted_at' => $fake->date('Y-m-d H:i:s')
        ], $empresaFields);
    }
}
