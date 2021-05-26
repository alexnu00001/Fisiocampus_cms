<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class ControlSuscripcion
 * @package App\Models
 * @version February 28, 2021, 4:58 am UTC
 *
 * @property \App\Models\Paise $idPais
 * @property string $titulo
 * @property string $descripcion
 * @property string $id_stripe
 * @property boolean $status
 * @property integer $id_pais
 */
class ControlSuscripcion extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'cint_suscripcion';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'titulo',
        'descripcion',
        'id_stripe',
        'status',
        'id_pais'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'titulo' => 'string',
        'descripcion' => 'string',
        'id_stripe' => 'string',
        'status' => 'boolean',
        'id_pais' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'titulo' => 'nullable|string|max:191',
        'descripcion' => 'nullable',
        'id_stripe' => 'nullable|string|max:191',
        'status' => 'nullable|boolean',
        'id_pais' => 'required',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function paises()
    {
        return $this->belongsTo(\App\Models\Paise::class, 'id_pais');
    }
}
