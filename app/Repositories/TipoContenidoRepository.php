<?php

namespace App\Repositories;

use App\Models\TipoContenido;
use App\Repositories\BaseRepository;

/**
 * Class TipoContenidoRepository
 * @package App\Repositories
 * @version November 19, 2020, 11:28 am UTC
*/

class TipoContenidoRepository extends BaseRepository
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
        return TipoContenido::class;
    }
}
