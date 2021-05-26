<?php

namespace App\Repositories;

use App\Models\SecuenciaAprendizaje;
use App\Repositories\BaseRepository;

/**
 * Class SecuenciaAprendizajeRepository
 * @package App\Repositories
 * @version November 19, 2020, 11:24 am UTC
*/

class SecuenciaAprendizajeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'titulo',
        'is_seriado',
        'curso_id'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return SecuenciaAprendizaje::class;
    }
}
