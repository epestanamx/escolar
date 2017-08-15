<?php

use Faker\Factory as Faker;
use App\Models\Periodo;
use App\Repositories\PeriodoRepository;

trait MakePeriodoTrait
{
    /**
     * Create fake instance of Periodo and save it in database
     *
     * @param array $periodoFields
     * @return Periodo
     */
    public function makePeriodo($periodoFields = [])
    {
        /** @var PeriodoRepository $periodoRepo */
        $periodoRepo = App::make(PeriodoRepository::class);
        $theme = $this->fakePeriodoData($periodoFields);
        return $periodoRepo->create($theme);
    }

    /**
     * Get fake instance of Periodo
     *
     * @param array $periodoFields
     * @return Periodo
     */
    public function fakePeriodo($periodoFields = [])
    {
        return new Periodo($this->fakePeriodoData($periodoFields));
    }

    /**
     * Get fake data of Periodo
     *
     * @param array $postFields
     * @return array
     */
    public function fakePeriodoData($periodoFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'fecha_inicio' => $fake->word,
            'fecha_fin' => $fake->word,
            'activo' => $fake->word,
            'created_at' => $fake->date('Y-m-d H:i:s'),
            'updated_at' => $fake->date('Y-m-d H:i:s'),
            'deleted_at' => $fake->date('Y-m-d H:i:s')
        ], $periodoFields);
    }
}
