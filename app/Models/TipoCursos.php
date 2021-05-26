<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class TipoCursos
 * @package App\Models
 * @version November 19, 2020, 3:54 pm UTC
 *
 * @property string $nombre
 * @property string $titulo
 */
class TipoCursos extends Model
{
    use SoftDeletes;

    public $table = 'tipo_cursos';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombre',
        'titulo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'titulo' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required',
        'titulo' => 'required'
    ];

    
}
