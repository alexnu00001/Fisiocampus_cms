<?php

namespace App\Repositories;

use App\Models\Logro;
use App\Repositories\BaseRepository;

/**
 * Class LogroRepository
 * @package App\Repositories
 * @version February 18, 2021, 6:50 pm UTC
*/

class LogroRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'descripcion',
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
        return Logro::class;
    }
}
