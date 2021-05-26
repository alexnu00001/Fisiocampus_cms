<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Inscripcion_tipo
 * @package App\Models
 * @version March 15, 2021, 11:02 am UTC
 *
 * @property integer $nombre
 * @property string $descripcion
 * @property integer $estatus_id
 * @property string $observaciones
 */
class Inscripcion_tipo extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'inscripcion_tipos';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombre',
        'descripcion',
        'estatus_id',
        'observaciones'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'descripcion' => 'string',
        'estatus_id' => 'integer',
        'observaciones' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required',
        'estatus_id' => 'required'
    ];


}
