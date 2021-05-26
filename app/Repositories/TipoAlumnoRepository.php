<?php

namespace App\Repositories;

use App\Models\TipoAlumno;
use App\Repositories\BaseRepository;

/**
 * Class TipoAlumnoRepository
 * @package App\Repositories
 * @version November 19, 2020, 3:55 pm UTC
*/

class TipoAlumnoRepository extends BaseRepository
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
        return TipoAlumno::class;
    }
}
