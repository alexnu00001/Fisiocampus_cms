<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

/**
 * Class Autor
 * @package App\Models
 * @version February 4, 2021, 8:31 pm UTC
 *
 * @property string $nombre
 * @property string $titulo
 * @property string $descripcion_corta
 * @property string $descripcion_larga
 */
class Autor extends Model implements HasMedia
{
    use HasMediaTrait;

    use SoftDeletes;

    use HasFactory;

    public $table = 'autors';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombre',
        'titulo',
        'descripcion_corta',
        'descripcion_larga'
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
        'descripcion_corta' => 'string',
        'descripcion_larga' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required|string',
        'titulo' => 'required',
        //'descripcion_corta' => 'required',
        //'descripcion_larga' => 'required'
    ];

    public function registerMediaCollections()
    {
        $this->addMediaCollection('autores')
            ->useDisk('autores')
            ->singleFile();
    }
     
    public function articulos()
    {
        return $this->hasMany(Articulo::class);
    }
}
