<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Lenguaje
 * @package App\Models
 * @version November 19, 2020, 11:27 am UTC
 *
 * @property string $nombre
 * @property string $nombre_ingles
 * @property string $simbolo
 */
class Lenguaje extends Model
{
    use SoftDeletes;

    public $table = 'lenguajes';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombre',
        'nombre_ingles',
        'simbolo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'nombre_ingles' => 'string',
        'simbolo' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required|string|max:191',
        'nombre_ingles' => 'required|string|max:191',
        'simbolo' => 'required|string|max:191',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    
}
