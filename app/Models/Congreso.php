<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Congreso
 * @package App\Models
 * @version November 24, 2020, 6:50 am UTC
 *
 * @property string $titulo
 * @property string $subtitulo
 * @property string $logo
 * @property string $imagen_cabecera_fondo
 * @property integer $categoria_congreso_id
 * @property string $video_streaming
 * @property string $descripcion_temario
 * @property textarea $programa
 * @property integer $direccion_id
 * @property string $fecha_inicial
 * @property string $fecha_final
 * @property boolean $is_fecha_final
 * @property string $fecha_limite_inscripcion
 * @property integer $numero_plazas
 * @property string $duracion
 * @property integer $tipo_congreso_id
 */
class Congreso extends Model
{
    use SoftDeletes;

    public $table = 'congresos';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'titulo' => 'string',
        'subtitulo' => 'string',
        'logo' => 'string',
        'imagen_cabecera_fondo' => 'string',
        'categoria_congreso_id' => 'integer',
        'video_streaming' => 'string',
        'descripcion_temario' => 'string',
        'direccion_id' => 'integer',
        'is_fecha_final' => 'boolean',
        'numero_plazas' => 'integer',
        'duracion' => 'string',
        'tipo_congreso_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'titulo' => 'required',
        'tipo_congreso_id' => 'required'
    ];

    
}
