<?php

namespace App\Repositories;

use App\Models\Moneda;
use App\Repositories\BaseRepository;

/**
 * Class MonedaRepository
 * @package App\Repositories
 * @version November 19, 2020, 11:18 am UTC
*/

class MonedaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'abreviatura',
        'simbolo'
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
        return Moneda::class;
    }
}
