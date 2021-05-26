<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class PlanEstudio
 * @package App\Models
 * @version November 19, 2020, 11:23 am UTC
 *
 * @property \App\Models\Grado $grado
 * @property \Illuminate\Database\Eloquent\Collection $cursoPlanEstudios
 * @property \Illuminate\Database\Eloquent\Collection $ofertaPlanEstudios
 * @property string $nombre
 * @property string $descripcion
 * @property integer $grado_id
 */
class PlanEstudio extends Model
{
    use SoftDeletes;

    public $table = 'plan_estudio';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombre',
        'descripcion',
        'grado_id',
        'orden'
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
        'grado_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required|string|max:191',
        'descripcion' => 'required|string|max:191',
        'grado_id' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable',
        'escala' => 'required|numeric|min:0',
    ];

    protected $attributes = [
        'orden' => 1,
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function grado()
    {
        return $this->belongsTo(\App\Models\Grado::class, 'grado_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function cursoPlanEstudios()
    {
        return $this->belongsToMany(\App\Models\Curso::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function ofertaPlanEstudios()
    {
        return $this->hasMany(\App\Models\OfertaPlanEstudio::class, 'plan_estudio_id');
    }

    public function escala()
    {
        return $this->hasOne(\App\Models\Escala::class, 'plan_estudios_id');
    }
}
