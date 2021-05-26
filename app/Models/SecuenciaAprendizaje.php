<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

/**
 * Class SecuenciaAprendizaje
 * @package App\Models
 * @version November 19, 2020, 11:24 am UTC
 *
 * @property \App\Models\Curso $curso
 * @property \Illuminate\Database\Eloquent\Collection $odaSecuenciaAprendizajes
 * @property string $nombre
 * @property string $titulo
 * @property boolean $is_seriado
 * @property integer $curso_id
 */
class SecuenciaAprendizaje extends Model implements HasMedia
{
    use SoftDeletes;
    use HasMediaTrait;

    public $table = 'secuencias_aprendizaje';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombre',
        'titulo',
        'is_seriado',
        'curso_id',
        "alt_banner",
        "title_banner",
        "alt_img_princ",
        "title_img_princ",
        "alt_img_sec",
        "title_img_sec",
        "alt_icono",
        "title_icono",
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
        'titulo' => 'string',
        'is_seriado' => 'boolean',
        'curso_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required|string|max:191',
        'titulo' => 'string|max:191',
        'is_seriado' => 'required|boolean',
        'curso_id' => 'required',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];


    public function registerMediaCollections()
    {
        $this->addMediaCollection('secuenciasAprendisajes_principal')
           ->useDisk('secuenciasAprendisajes_principal')
           ->singleFile();
        $this->addMediaCollection('secuenciasAprendisajes_secundaria')
          ->useDisk('secuenciasAprendisajes_secundaria')
          ->singleFile();
        $this->addMediaCollection('secuenciasAprendisajes_icono')
          ->useDisk('secuenciasAprendisajes_icono')
          ->singleFile();
        $this->addMediaCollection('secuenciasAprendisajes_banner')
          ->useDisk('secuenciasAprendisajes_banner')
          ->singleFile();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function curso()
    {
        return $this->hasOne(\App\Models\Curso::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function odaSecuenciaAprendizajes()
    {
        return $this->hasMany(\App\Models\OdaSecuenciaAprendizaje::class, 'secuencia_aprendizaje_id');
    }
}
