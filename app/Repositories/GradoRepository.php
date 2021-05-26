<?php

namespace App\Repositories;

use App\Models\Grado;
use App\Repositories\BaseRepository;

/**
 * Class GradoRepository
 * @package App\Repositories
 * @version November 19, 2020, 11:18 am UTC
*/

class GradoRepository extends BaseRepository
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
        return Grado::class;
    }
}
