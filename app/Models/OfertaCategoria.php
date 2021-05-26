<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class OfertaCategoria
 * @package App\Models
 * @version March 15, 2021, 3:46 pm UTC
 *
 * @property integer $categoria_id
 * @property integer $oferta_id
 */
class OfertaCategoria extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'oferta_categorias';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'categoria_id',
        'oferta_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'categoria_id' => 'integer',
        'oferta_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'categoria_id' => 'required',
        'oferta_id' => 'required'
    ];

    
}
