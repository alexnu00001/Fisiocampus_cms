<?php

namespace App\Repositories;

use App\Models\Profesor;
use App\Repositories\BaseRepository;

/**
 * Class ProfesorRepository
 * @package App\Repositories
 * @version November 24, 2020, 6:29 am UTC
*/

class ProfesorRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'persona_id',
        'resumen',
        'sobre_mi',
        'redes'
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
        return Profesor::class;
    }
}
