<?php

namespace App\Repositories;

use App\Models\CategoriaCongreso;
use App\Repositories\BaseRepository;

/**
 * Class CategoriaCongresoRepository
 * @package App\Repositories
 * @version November 24, 2020, 6:12 am UTC
*/

class CategoriaCongresoRepository extends BaseRepository
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
        return CategoriaCongreso::class;
    }
}
