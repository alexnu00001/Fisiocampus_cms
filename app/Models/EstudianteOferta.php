<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class EstudianteOferta
 * @package App\Models
 * @version March 15, 2021, 7:04 pm UTC
 *
 * @property integer $estudiante_id
 * @property integer $oferta_id
 * @property integer $estatus_id
 */
class EstudianteOferta extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'estudiante_ofertas';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'estudiante_id',
        'oferta_id',
        'estatus_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'estudiante_id' => 'integer',
        'oferta_id' => 'integer',
        'estatus_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'estudiante_id' => 'required',
        'oferta_id' => 'required',
        'estatus_id' => 'reuired'
    ];

    
}
