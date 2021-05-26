<?php

namespace App\Repositories;

use App\Models\TipoOferta;
use App\Repositories\BaseRepository;

/**
 * Class TipoOfertaRepository
 * @package App\Repositories
 * @version November 19, 2020, 11:22 am UTC
*/

class TipoOfertaRepository extends BaseRepository
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
        return TipoOferta::class;
    }
}
