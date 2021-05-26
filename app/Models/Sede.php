<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Sede
 * @package App\Models
 * @version November 24, 2020, 5:42 am UTC
 *
 * @property string $nombre
 * @property string $descripcion
 * @property integer $pais_id
 */
class Sede extends Model
{
    use SoftDeletes;

    public $table = 'sedes';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombre',
        'descripcion',
        'pais_id'
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
        'pais_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required',
        'descripcion' => 'required',
        'pais_id' => 'required'
    ];

    
}
