<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

/**
 * Class Oda
 * @package App\Models
 * @version November 19, 2020, 11:25 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $odaSecuenciaAprendizajes
 * @property string $nombre
 * @property string $descripcion
 * @property string $archivo
 * @property integer $tipo_id
 */
class Oda extends Model implements HasMedia
{
    use HasMediaTrait;
    //use SoftDeletes;

    public $table = 'oda';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombre',
        'descripcion',
        'archivo',
        'tipo_id',
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
        'archivo' => 'string',
        'tipo_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required|string|max:191',
        'descripcion' => 'required|string',
        'archivo' => 'required|string',
        'tipo_id' => 'required|integer',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];


    public function registerMediaCollections()
    {
        $this->addMediaCollection('documentos')
           ->useDisk('documentos')
           ->singleFile();
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function odaSecuenciaAprendizajes()
    {
        return $this->belongsToMany(\App\Models\SecuenciaAprendizaje::class);
    }
}
