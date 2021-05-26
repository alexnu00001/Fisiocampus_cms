<?php

namespace App\Repositories;

use App\Models\Escuela;
use App\Repositories\BaseRepository;

/**
 * Class EscuelaRepository
 * @package App\Repositories
 * @version March 11, 2021, 10:32 am UTC
*/

class EscuelaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'descripcion',
        'siglas',
        'link',
        'direccion_id'
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
        return Escuela::class;
    }
}
