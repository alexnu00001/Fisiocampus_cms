<?php

namespace App\Repositories;

use App\Models\Sede;
use App\Repositories\BaseRepository;

/**
 * Class SedeRepository
 * @package App\Repositories
 * @version November 24, 2020, 5:42 am UTC
*/

class SedeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'descripcion',
        'pais_id'
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
        return Sede::class;
    }
}
