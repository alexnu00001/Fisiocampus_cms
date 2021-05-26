<?php

namespace App\Repositories;

use App\Models\Direccion;
use App\Repositories\BaseRepository;

/**
 * Class DireccionRepository
 * @package App\Repositories
 * @version November 24, 2020, 6:18 am UTC
*/

class DireccionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'linea_1',
        'linea_2',
        'pais_id',
        'codigo_postal',
        'provincia',
        'ciudad',
        'referencia',
        'alias'
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
        return Direccion::class;
    }
}
