<?php

namespace App\Repositories;

use App\Models\ControlSuscripcion;
use App\Repositories\BaseRepository;

/**
 * Class ControlSuscripcionRepository
 * @package App\Repositories
 * @version February 28, 2021, 4:58 am UTC
*/

class ControlSuscripcionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'titulo',
        'descripcion',
        'id_stripe',
        'status',
        'id_pais'
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
        return ControlSuscripcion::class;
    }
}
