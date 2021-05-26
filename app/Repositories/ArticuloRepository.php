<?php

namespace App\Repositories;

use App\Models\Articulo;
use App\Repositories\BaseRepository;

/**
 * Class ArticuloRepository
 * @package App\Repositories
 * @version February 10, 2021, 8:42 pm UTC
*/

class ArticuloRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'titulo',
        'contenido'
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
        return Articulo::class;
    }
}
