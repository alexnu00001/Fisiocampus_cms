<?php

namespace App\Repositories;

use App\Models\Estatus;
use App\Repositories\BaseRepository;

/**
 * Class EstatusRepository
 * @package App\Repositories
 * @version November 24, 2020, 5:53 am UTC
*/

class EstatusRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'documento',
        'nombre',
        'descripcion',
        'estatus_id'
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
        return Estatus::class;
    }
}
