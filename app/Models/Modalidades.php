<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Modalidades
 * @package App\Models
 * @version December 8, 2020, 12:37 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $cursos
 * @property string $nombre
 * @property string $descripcion
 */
class Modalidades extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'modalidades';
    
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
    public function cursos()
    {
        return $this->hasMany(\App\Models\Curso::class, 'modalidad_id');
    }
    
}
