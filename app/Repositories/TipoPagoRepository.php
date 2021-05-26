<?php

namespace App\Repositories;

use App\Models\TipoPago;
use App\Repositories\BaseRepository;

/**
 * Class TipoPagoRepository
 * @package App\Repositories
 * @version November 19, 2020, 3:58 pm UTC
*/

class TipoPagoRepository extends BaseRepository
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
        return TipoPago::class;
    }
}
