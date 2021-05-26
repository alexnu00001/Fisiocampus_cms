<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
/**
 * Class Articulo
 * @package App\Models
 * @version February 10, 2021, 8:42 pm UTC
 *
 * @property string $titulo
 * @property string $contenido
 */
class Articulo extends Model
{
    use SoftDeletes;

    use HasFactory;

    use HasMediaTrait;

    public $table = 'articulos';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'titulo',
        'autor_id',
        'contenido',
        'referencias',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'titulo' => 'string',
        'contenido' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'titulo' => 'required',
        'contenido' => 'required',
        'referencias' => 'required',
    ];

    public function getGetExcerptAttribute(){
        return substr($this->contenido, 0, 120);
    }

    public function registerMediaCollections()
    {
        $this->addMediaCollection('articulos_banner')
            ->useDisk('articulos_banner')
            ->singleFile();
    }

    public function autor()
    {
        return $this->belongsTo(Autor::class);
    }
}
