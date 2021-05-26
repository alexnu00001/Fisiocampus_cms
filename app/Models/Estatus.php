<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Estatus
 * @package App\Models
 * @version November 24, 2020, 5:53 am UTC
 *
 * @property string $documento
 * @property string $nombre
 * @property string $descripcion
 * @property integer $estatus_id
 */
class Estatus extends Model
{
    use SoftDeletes;

    public $table = 'estatuses';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'documento',
        'nombre',
        'descripcion',
        'estatus_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'documento' => 'string',
        'nombre' => 'string',
        'descripcion' => 'string',
        'estatus_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'documento' => 'required',
        'nombre' => 'required',
        'descripcion' => 'required',
        'estatus_id' => 'required'
    ];

    
}
