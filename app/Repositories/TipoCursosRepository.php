<?php

namespace App\Repositories;

use App\Models\TipoCursos;
use App\Repositories\BaseRepository;

/**
 * Class TipoCursosRepository
 * @package App\Repositories
 * @version November 19, 2020, 3:54 pm UTC
*/

class TipoCursosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'titulo'
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
        return TipoCursos::class;
    }
}
