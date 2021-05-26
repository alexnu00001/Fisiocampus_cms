<?php

namespace App\Repositories;

use App\Models\Autor;
use App\Repositories\BaseRepository;

/**
 * Class AutorRepository
 * @package App\Repositories
 * @version February 4, 2021, 8:31 pm UTC
*/

class AutorRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'titulo',
        'descripcion_corta',
        'descripcion_larga'
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
        return Autor::class;
    }
}
