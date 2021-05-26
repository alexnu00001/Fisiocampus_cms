<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Moneda
 * @package App\Models
 * @version November 19, 2020, 11:18 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $ofertas
 * @property string $nombre
 * @property string $abreviatura
 * @property string $simbolo
 */
class Moneda extends Model
{
    use SoftDeletes;

    public $table = 'monedas';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombre',
        'abreviatura',
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
        'abreviatura' => 'string',
        'simbolo' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required|string|max:191',
        'abreviatura' => 'required|string|max:191',
        'simbolo' => 'required|string|max:191',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function ofertas()
    {
        return $this->hasMany(\App\Models\Oferta::class, 'moneda_id');
    }
}
