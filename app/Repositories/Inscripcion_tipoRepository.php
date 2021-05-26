<?php

namespace App\Repositories;

use App\Models\Inscripcion_tipo;
use App\Repositories\BaseRepository;

/**
 * Class Inscripcion_tipoRepository
 * @package App\Repositories
 * @version March 15, 2021, 11:02 am UTC
*/

class Inscripcion_tipoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'descripcion',
        'estatus_id',
        'observaciones'
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
        return Inscripcion_tipo::class;
    }
}
