<?php

namespace App\Models;

use App\Scopes\OrderByDescScope;
use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class TipoOferta
 * @package App\Models
 * @version November 19, 2020, 11:22 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $ofertas
 * @property string $nombre
 * @property string $descripcion
 */
class TipoOferta extends Model
{
    use SoftDeletes;

    public $table = 'tipos_oferta';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombre',
        'descripcion'
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
        'nombre' => 'required|string|max:191',
        'descripcion' => 'required|string|max:191',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function ofertas()
    {
        return $this->hasMany(\App\Models\Oferta::class, 'oferta_tipo_id');
    }

    // Query
    public static function listaDeOfertas(){
        return TipoOferta::select('tipos_oferta.id AS id', 'tipos_oferta.nombre AS name', 'tipos_oferta.descripcion AS description')
              ->where('tipos_oferta.deleted_at', null)
              ->get();
    }
   protected static function booted()
   {
      static::addGlobalScope(new OrderByDescScope());
   }
}
