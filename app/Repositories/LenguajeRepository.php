<?php

namespace App\Repositories;

use App\Models\Lenguaje;
use App\Repositories\BaseRepository;

/**
 * Class LenguajeRepository
 * @package App\Repositories
 * @version November 19, 2020, 11:27 am UTC
*/

class LenguajeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'nombre_ingles',
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
        return Lenguaje::class;
    }
}
