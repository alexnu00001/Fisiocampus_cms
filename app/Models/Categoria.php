<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

/**
 * Class Categoria
 * @package App\Models
 * @version December 24, 2020, 6:57 pm UTC
 *
 * @property string $nombre
 * @property string $tipo
 * @property string $descripcion
 * @property integer $rel_id
 */
class Categoria extends Model implements HasMedia
{
    use SoftDeletes;
     use HasMediaTrait;
    use HasFactory;

    public $table = 'categorias';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombre',
        'tipo',
        'descripcion',
        'rel_id'
    ];


    public function registerMediaCollections()
    {
        $this->addMediaCollection('categoria_principal')
             ->useDisk('categoria_principal')
             ->singleFile();


        $this->addMediaCollection('categoria_icono')
             ->useDisk('categoria_icono')
             ->singleFile();

    }
    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'tipo' => 'string',
        'descripcion' => 'string',
        'rel_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required',
        'tipo' => 'required'
    ];

  public function ofertas()
  {
    return $this->belongsToMany(\App\Models\Oferta::class,'oferta_categorias');
  }


}
