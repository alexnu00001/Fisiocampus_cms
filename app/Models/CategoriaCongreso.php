<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class CategoriaCongreso
 * @package App\Models
 * @version November 24, 2020, 6:12 am UTC
 *
 * @property string $nombre
 * @property string $descripcion
 */
class CategoriaCongreso extends Model
{
    use SoftDeletes;

    public $table = 'categoria_congresos';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombre',
        'descripcion',
        'categoria_padre_id'
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
        'nombre' => 'required'
    ];


}
