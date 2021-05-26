<?php

namespace App\Repositories;

use App\Models\Estudiante;
use App\Repositories\BaseRepository;

/**
 * Class EstudianteRepository
 * @package App\Repositories
 * @version November 19, 2020, 11:30 am UTC
*/

class EstudianteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'persona_id'
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
        return Estudiante::class;
    }
}
