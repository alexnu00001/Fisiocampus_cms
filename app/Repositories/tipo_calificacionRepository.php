<?php

namespace App\Repositories;

use App\Models\tipo_calificacion;
use App\Repositories\BaseRepository;

/**
 * Class tipo_calificacionRepository
 * @package App\Repositories
 * @version April 22, 2021, 9:16 pm UTC
*/

class tipo_calificacionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'descripcion'
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
        return tipo_calificacion::class;
    }
}
