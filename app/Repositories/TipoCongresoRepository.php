<?php

namespace App\Repositories;

use App\Models\TipoCongreso;
use App\Repositories\BaseRepository;

/**
 * Class TipoCongresoRepository
 * @package App\Repositories
 * @version November 24, 2020, 5:48 am UTC
*/

class TipoCongresoRepository extends BaseRepository
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
        return TipoCongreso::class;
    }
}
