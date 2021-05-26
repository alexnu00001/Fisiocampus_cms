<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class OfertaInscripcion
 * @package App\Models
 * @version March 15, 2021, 11:15 am UTC
 *
 * @property integer $oferta_id
 * @property integer $inscripcion_tipo_id
 */
class OfertaInscripcion extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'oferta_inscripcions';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'oferta_id',
        'inscripcion_tipo_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'oferta_id' => 'integer',
        'inscripcion_tipo_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'oferta_id' => 'required',
        'inscripcion_tipo_id' => 'required'
    ];

    
}
