<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Curso;
use App\Models\Oda;
use App\Models\tipo_calificacion;
use App\Models\Oferta;

/**
 * Class calificacion_oferta_curso
 * @package App\Models
 * @version April 22, 2021, 9:50 pm UTC
 *
 * @property integer $oferta_id
 * @property integer $curso_id
 * @property integer $oda_id
 * @property integer $tipo_calificacion_id
 * @property integer $porcentaje
 */
class calificacion_oferta_curso extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'calificacion_oferta_cursos';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'oferta_id',
        'curso_id',
        'oda_id',
        'secuencia_aprendizaje_id',
        'tipo_calificacion_id',
        'examen_id',
        'porcentaje'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'oferta_id' => 'integer',
        'curso_id' => 'integer',
        'oda_id' => 'integer',
        'tipo_calificacion_id' => 'integer',
        'porcentaje' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'oferta_id' => 'required',
        'curso_id' => 'required',
        'oda_id' => 'required',
        'tipo_calificacion_id' => 'required',
        'porcentaje' => 'required'
    ];

    public function oferta()
    {
        return $this->hasOne(Oferta::class, 'id', 'oferta_id');
    }

    public function curso()
    {
        return $this->hasOne(Curso::class, 'id', 'curso_id');
    }

    public function oda()
    {
        return $this->hasOne(Oda::class, 'id', 'oda_id');
    }

    public function tipo()
    {
        return $this->hasOne(tipo_calificacion::class, 'id', 'tipo_calificacion_id');
    }
}
