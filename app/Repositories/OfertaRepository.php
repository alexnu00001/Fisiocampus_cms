<?php

namespace App\Repositories;

use App\Models\Oferta;
use App\Repositories\BaseRepository;

/**
 * Class OfertaRepository
 * @package App\Repositories
 * @version November 19, 2020, 11:23 am UTC
*/

class OfertaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'descripcion',
        'costo',
        'pais_id',
        'moneda_id',
        'oferta_tipo_id',
        'is_activo',
        'is_public'
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
        return Oferta::class;
    }
}
