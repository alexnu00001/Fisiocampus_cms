<?php

namespace App\Repositories;

use App\Models\TipoOda;
use App\Repositories\BaseRepository;

/**
 * Class TipoOdaRepository
 * @package App\Repositories
 * @version November 19, 2020, 11:29 am UTC
*/

class TipoOdaRepository extends BaseRepository
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
        return TipoOda::class;
    }
}
