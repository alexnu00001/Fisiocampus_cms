<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Grado
 * @package App\Models
 * @version November 19, 2020, 11:18 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $planEstudios
 * @property string $nombre
 * @property string $descripcion
 */
class Grado extends Model
{
    use SoftDeletes;

    public $table = 'grados';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombre',
        'descripcion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'descripcion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required|string|max:191',
        'descripcion' => 'required|string|max:191',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function planEstudios()
    {
        return $this->hasMany(\App\Models\PlanEstudio::class, 'grado_id');
    }
}
