<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;


/**
 * Class Logro
 * @package App\Models
 * @version February 18, 2021, 6:50 pm UTC
 *
 * @property string $nombre
 * @property string $descripcion
 * @property unsignedBigInteger $tipo_id
 */
class Logro extends Model implements HasMedia
{
    use HasMediaTrait;
    use SoftDeletes;
    use HasFactory;

    public $table = 'logros';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombre',
        'descripcion',
        'tipo_id'
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
        'nombre' => 'required',
        'descripcion' => 'required',
        'tipo_id' => 'required'
    ];

    public function registerMediaCollections()
    {
    $this->addMediaCollection('logros')
        ->useDisk('logros');
    }
}
