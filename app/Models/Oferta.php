<?php

namespace App\Models;

use App\Scopes\OrderByDescScope;
use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

/**
 * Class Oferta
 * @package App\Models
 * @version November 19, 2020, 11:23 am UTC
 *
 * @property \App\Models\Moneda $moneda
 * @property \App\Models\TiposOfertum $ofertaTipo
 * @property \App\Models\Paise $pais
 * @property \Illuminate\Database\Eloquent\Collection $ofertaPlanEstudios
 * @property string $nombre
 * @property string $descripcion
 * @property number $costo
 * @property integer $pais_id
 * @property integer $moneda_id
 * @property integer $oferta_tipo_id
 * @property boolean $is_activo
 * @property boolean $is_public
 */
class Oferta extends Model implements HasMedia
{
    use SoftDeletes;
    use HasMediaTrait;

    public $table = 'ofertas';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombre',
        'descripcion',
        'costo',
        'pais_id',
        'moneda_id',
        'oferta_tipo_id',
        'is_activo',
        'is_public',
        "alt_banner",
        "title_banner",
        "alt_img_princ",
        "title_img_princ",
        "alt_img_sec",
        "title_img_sec",
        "is_compra_individual"
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
        'costo' => 'decimal:2',
        'pais_id' => 'integer',
        'moneda_id' => 'integer',
        'oferta_tipo_id' => 'integer',
        'is_activo' => 'boolean',
        'is_public' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required|string|max:191',
        'descripcion' => 'required|string',
        'costo' => 'required|numeric',
        'pais_id' => 'required',
        'moneda_id' => 'required',
        'oferta_tipo_id' => 'required',
        'is_activo' => 'required|boolean',
        'is_public' => 'required|boolean',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    public function registerMediaCollections()
    {
        $this->addMediaCollection('ofertas_principal')
           ->useDisk('ofertas_principal')
           ->singleFile();
        $this->addMediaCollection('ofertas_secundaria')
          ->useDisk('ofertas_secundaria')
          ->singleFile();
        $this->addMediaCollection('ofertas_icono')
          ->useDisk('ofertas_icono')
          ->singleFile();
        $this->addMediaCollection('ofertas_banner')
          ->useDisk('ofertas_banner')
          ->singleFile();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function moneda()
    {
        return $this->belongsTo(\App\Models\Moneda::class, 'moneda_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function ofertaTipo()
    {
        return $this->belongsTo(\App\Models\TipoOferta::class, 'oferta_tipo_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function pais()
    {
        return $this->belongsTo(\App\Models\Pais::class, 'pais_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function ofertaPlanEstudios()
    {
        return $this->belongsToMany(\App\Models\PlanEstudio::class);
    }
    public function categorias()
    {
        return $this->belongsToMany(Categoria::class,'oferta_categorias','oferta_id','categoria_id');
    }
    public function suscripciones()
    {
      return $this->belongsToMany(Inscripcion_tipo::class,'oferta_inscripcions','oferta_id','inscripcion_tipo_id');
    }
    // Query
    public static function listaDeOfertas(){
        return Oferta::select('ofertas.id AS id', 'ofertas.nombre AS name', 'ofertas.descripcion AS description', 'monedas.nombre AS currency', 'ofertas.costo AS cost', 'paises.nombre AS country')
              ->join('monedas', 'ofertas.moneda_id', '=', 'monedas.id')
              ->join('paises', 'ofertas.pais_id', '=', 'paises.id')
              ->where('ofertas.deleted_at', null)
              ->get();
    }

   protected static function booted()
   {
      static::addGlobalScope(new OrderByDescScope());
   }
}
