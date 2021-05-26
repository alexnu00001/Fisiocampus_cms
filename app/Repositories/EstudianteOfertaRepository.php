<?php

namespace App\Repositories;

use App\Models\EstudianteOferta;
use App\Repositories\BaseRepository;

/**
 * Class EstudianteOfertaRepository
 * @package App\Repositories
 * @version March 15, 2021, 7:04 pm UTC
*/

class EstudianteOfertaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'estudiante_id',
        'oferta_id',
        'estatus_id'
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
        return EstudianteOferta::class;
    }
}
