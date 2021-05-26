<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Escuela
 * @package App\Models
 * @version March 11, 2021, 10:32 am UTC
 *
 * @property string $nombre
 * @property string $descripcion
 * @property string $siglas
 * @property string $link
 * @property integer $direccion_id
 */
class Escuela extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'escuelas';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombre',
        'descripcion',
        'siglas',
        'link',
        'direccion_id'
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
        'siglas' => 'string',
        'link' => 'string',
        'direccion_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required',
        'descripcion' => 'required',
        'siglas' => 'required'
    ];

    
}
