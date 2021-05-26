<?php

namespace App\Repositories;

use App\Models\OfertaInscripcion;
use App\Repositories\BaseRepository;

/**
 * Class OfertaInscripcionRepository
 * @package App\Repositories
 * @version March 15, 2021, 11:15 am UTC
*/

class OfertaInscripcionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'oferta_id',
        'inscripcion_tipo_id'
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
        return OfertaInscripcion::class;
    }
}
