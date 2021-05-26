<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Estudiante
 * @package App\Models
 * @version November 19, 2020, 11:30 am UTC
 *
 * @property integer $persona_id
 */
class Estudiante extends Model
{
    use SoftDeletes;

    public $table = 'estudiantes';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'persona_id',
        'escuela_id', // Dirije hacia la misma tabla
        'estudio_academico_id', // Dirije hacia la misma tabla
        'resumen',
        'sobre_mi',
        'redes',
        'ubicacion',
        'avatar',
        'uid_interno',
        'job',
        'especialidad',
		'escuela_procedencia'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'persona_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'persona_id' => 'required',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    public function persona(){

        return $this->hasOne(Persona::class,'id','persona_id');
    }

}
