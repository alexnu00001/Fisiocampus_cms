<?php

namespace App\Repositories;

use App\Models\Congreso;
use App\Repositories\BaseRepository;

/**
 * Class CongresoRepository
 * @package App\Repositories
 * @version November 24, 2020, 6:50 am UTC
*/

class CongresoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'titulo',
        'subtitulo',
        'logo',
        'imagen_cabecera_fondo',
        'categoria_congreso_id',
        'video_streaming',
        'descripcion_temario',
        'programa',
        'direccion_id',
        'fecha_inicial',
        'fecha_final',
        'is_fecha_final',
        'fecha_limite_inscripcion',
        'numero_plazas',
        'duracion',
        'tipo_congreso_id'
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
        return Congreso::class;
    }
}
