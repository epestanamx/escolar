<?php

use Faker\Factory as Faker;
use App\Models\Etapa;
use App\Repositories\EtapaRepository;

trait MakeEtapaTrait
{
    /**
     * Create fake instance of Etapa and save it in database
     *
     * @param array $etapaFields
     * @return Etapa
     */
    public function makeEtapa($etapaFields = [])
    {
        /** @var EtapaRepository $etapaRepo */
        $etapaRepo = App::make(EtapaRepository::class);
        $theme = $this->fakeEtapaData($etapaFields);
        return $etapaRepo->create($theme);
    }

    /**
     * Get fake instance of Etapa
     *
     * @param array $etapaFields
     * @return Etapa
     */
    public function fakeEtapa($etapaFields = [])
    {
        return new Etapa($this->fakeEtapaData($etapaFields));
    }

    /**
     * Get fake data of Etapa
     *
     * @param array $postFields
     * @return array
     */
    public function fakeEtapaData($etapaFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'idProyecto' => $fake->randomDigitNotNull,
            'semana' => $fake->word,
            'competencias' => $fake->text,
            'created_at' => $fake->date('Y-m-d H:i:s'),
            'updated_at' => $fake->date('Y-m-d H:i:s'),
            'deleted_at' => $fake->date('Y-m-d H:i:s')
        ], $etapaFields);
    }
}
