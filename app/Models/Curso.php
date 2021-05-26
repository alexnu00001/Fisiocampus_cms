<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

/**
 * Class Curso
 * @package App\Models
 * @version November 19, 2020, 11:09 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $cursoPlanEstudios
 * @property \Illuminate\Database\Eloquent\Collection $secuenciasAprendizajes
 * @property string $titulo
 * @property string $descripcion
 */
class Curso extends Model implements HasMedia
{
    use SoftDeletes;
    use HasMediaTrait;

    public $table = 'cursos';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'titulo',
        'descripcion',
        'numero_horas',
        'numero_creditos',
        'modalidad_id',
        'modelos_evaluacion',
        'materiales_curso',
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
        'titulo' => 'string',
        'descripcion' => 'string',
        'numero_horas' => 'integer',
        'numero_creditos' => 'integer',
        'modalidad_id' => 'integer',
        'modelos_evaluacion' => 'string',
        'materiales_curso' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'titulo' => 'required|string|max:191',
        'descripcion' => 'required|string',

    ];

    public function registerMediaCollections()
    {
        $this->addMediaCollection('cursos_principal')
           ->useDisk('cursos_principal')
           ->singleFile();
        $this->addMediaCollection('cursos_secundaria')
          ->useDisk('cursos_secundaria')
          ->singleFile();
        $this->addMediaCollection('cursos_icono')
          ->useDisk('cursos_icono')
          ->singleFile();
        $this->addMediaCollection('cursos_banner')
          ->useDisk('cursos_banner')
          ->singleFile();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function cursoPlanEstudios()
    {
        return $this->hasMany(\App\Models\CursoPlanEstudio::class, 'curso_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function secuenciasAprendizajes()
    {
        return $this->belongsToMany(\App\Models\SecuenciaAprendizaje::class);
    }

    public function modalidades()
    {
        return $this->belongsTo(\App\Models\Modalidades::class, 'modalidad_id');
    }

    public function Profesores()
    {
      return $this->belongsToMany(\App\Models\Profesor::class);
    }
}
