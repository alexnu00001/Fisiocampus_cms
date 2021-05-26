<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Inscripcion
 * @package App\Models
 * @version March 15, 2021, 11:10 am UTC
 *
 * @property integer $user_id
 * @property integer $tipo_id
 * @property string $forma_pago
 * @property integer $estatus_id
 * @property string $fecha_inicio
 * @property string $fecha_fin
 */
class Inscripcion extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'inscripcions';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'user_id',
        'tipo_id',
        'forma_pago',
        'estatus_id',
        'fecha_inicio',
        'fecha_fin'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'tipo_id' => 'integer',
        'forma_pago' => 'string',
        'estatus_id' => 'integer',
        'fecha_inicio' => 'date',
        'fecha_fin' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required',
        'tipo_id' => 'required',
        'forma_pago' => 'required',
        'estatus_id' => 'required',
        'fecha_inicio' => 'required',
        'fecha_fin' => 'required'
    ];

    
}
