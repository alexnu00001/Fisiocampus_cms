<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

/**
 * Class Profesor
 * @package App\Models
 * @version November 24, 2020, 6:29 am UTC
 *
 * @property integer $persona_id
 * @property string $resumen
 * @property string $sobre_mi
 * @property string $redes
 */
class Profesor extends Model implements HasMedia
{
    use SoftDeletes;
    use HasMediaTrait;

    public $table = 'profesors';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'persona_id',
        'curso',
        'escuela_id', // Dirije hacia la misma tabla
        'estudio_academico_id', // Dirije hacia la misma tabla
        'resumen',
        'sobre_mi',
        'redes',
        'ubicacion',
        'avatar',
        'uid_interno',
        'job',
        'especialidad'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'persona_id' => 'integer',
        'curso'=> 'string',
        'resumen' => 'string',
        'sobre_mi' => 'string',
        'redes' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'persona_id' => 'required',
        'resumen' => 'required'
    ];


  public function registerMediaCollections()
  {
    $this->addMediaCollection('profesores_principal')
      ->useDisk('profesores_principal')
      ->singleFile();
  }

}
