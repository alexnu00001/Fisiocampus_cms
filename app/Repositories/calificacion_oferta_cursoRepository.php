<?php

namespace App\Repositories;

use App\Models\calificacion_oferta_curso;
use App\Repositories\BaseRepository;

/**
 * Class calificacion_oferta_cursoRepository
 * @package App\Repositories
 * @version April 22, 2021, 9:50 pm UTC
*/

class calificacion_oferta_cursoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'oferta_id',
        'curso_id',
        'oda_id',
        'tipo_calificacion_id',
        'porcentaje'
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
        return calificacion_oferta_curso::class;
    }
}
