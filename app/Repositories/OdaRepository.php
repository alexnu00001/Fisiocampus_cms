<?php

namespace App\Repositories;

use App\Models\Oda;
use App\Repositories\BaseRepository;

/**
 * Class OdaRepository
 * @package App\Repositories
 * @version November 19, 2020, 11:25 am UTC
*/

class OdaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'descripcion',
        'archivo',
        'tipo_id'
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
        return Oda::class;
    }
}
