<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Direccion
 * @package App\Models
 * @version November 24, 2020, 6:18 am UTC
 *
 * @property string $linea_1
 * @property string $linea_2
 * @property integer $pais_id
 * @property string $codigo_postal
 * @property string $provincia
 * @property string $ciudad
 * @property string $referencia
 * @property string $alias
 */
class Direccion extends Model
{
    use SoftDeletes;

    public $table = 'direccions';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
    	'persona_id',
        'linea_1',
        'linea_2',
        'pais_id',
        'codigo_postal',
        'provincia',
        'ciudad',
        'referencia',
        'alias'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
		'persona_id' => 'integer',
        'linea_1' => 'string',
        'linea_2' => 'string',
        'pais_id' => 'integer',
        'codigo_postal' => 'string',
        'provincia' => 'string',
        'ciudad' => 'string',
        'referencia' => 'string',
        'alias' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'linea_1' => 'required',
        'pais_id' => 'required',
        'provincia' => 'required'
    ];

    
}
