<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Persona
 * @package App\Models
 * @version November 19, 2020, 11:27 am UTC
 *
 * @property string $nombre
 * @property string $estado_civil
 * @property string $telefono
 * @property string $movil
 * @property string $email
 * @property string $sexo
 * @property string $fecha_nacimiento
 * @property string $nacionalidad
 * @property string $preparacion_academica
 */
class Persona extends Model
{
    use SoftDeletes;

    public $table = 'personas';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'user_id',
        'nombre',
        'estado_civil',
        'telefono',
        'movil',
        'email',
        'sexo',
        'fecha_nacimiento',
        'nacionalidad',
        'preparacion_academica'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'estado_civil' => 'string',
        'telefono' => 'string',
        'movil' => 'string',
        'email' => 'string',
        'sexo' => 'string',
        'fecha_nacimiento' => 'date',
        'nacionalidad' => 'string',
        'preparacion_academica' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required|string|max:191',
        'estado_civil' => 'required|string|max:191',
        'telefono' => 'required|string|max:191',
        'movil' => 'required|string|max:191',
        'email' => 'required|string|max:191',
        'sexo' => 'required|string|max:191',
        'fecha_nacimiento' => 'required',
        'nacionalidad' => 'required|string|max:191',
        'preparacion_academica' => 'required|string|max:191',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];


}
