<?php

namespace App\Repositories;

use App\Models\Inscripcion;
use App\Repositories\BaseRepository;

/**
 * Class InscripcionRepository
 * @package App\Repositories
 * @version March 15, 2021, 11:10 am UTC
*/

class InscripcionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'tipo_id',
        'forma_pago',
        'estatus_id',
        'fecha_inicio',
        'fecha_fin'
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
        return Inscripcion::class;
    }
}
