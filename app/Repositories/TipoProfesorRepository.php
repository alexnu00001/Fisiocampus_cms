<?php

namespace App\Repositories;

use App\Models\TipoProfesor;
use App\Repositories\BaseRepository;

/**
 * Class TipoProfesorRepository
 * @package App\Repositories
 * @version November 19, 2020, 3:50 pm UTC
*/

class TipoProfesorRepository extends BaseRepository
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
        return TipoProfesor::class;
    }
}
