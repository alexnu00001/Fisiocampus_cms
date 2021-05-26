<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Pais
 * @package App\Models
 * @version November 19, 2020, 11:11 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $ofertas
 * @property string $nombre
 * @property string $abreviatura
 */
class Pais extends Model
{
    use SoftDeletes;

    public $table = 'paises';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombre',
        'abreviatura'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'abreviatura' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required|string|max:191',
        'abreviatura' => 'required|string|max:191',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function control_suscripciones()
    {
        return $this->hasMany(\App\Models\ControlSuscripcion::class, 'id_pais');
    }

    public function ofertas()
    {
        return $this->hasMany(\App\Models\Oferta::class, 'pais_id');
    }

    public static function listaDePaises(){
        return Pais::select('id', 'nombre', 'abreviatura')
        ->where('deleted_at', null)
        ->get();
    }
}
