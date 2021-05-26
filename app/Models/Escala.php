<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Escala
 * @package App\Models
 * @version May 7, 2021, 6:30 pm UTC
 *
 * @property integer $escala
 * @property integer $plan_estudios_id
 */
class Escala extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'escalas';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'escala',
        'plan_estudios_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'escala' => 'integer',
        'plan_estudios_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'escala' => 'required|numeric|min:0',
        'plan_estudios_id' => 'required'
    ];

    public function planEstudios()
    {
        return $this->belongsTo(\App\Models\PlanEstudio::class);
    }
    
}
