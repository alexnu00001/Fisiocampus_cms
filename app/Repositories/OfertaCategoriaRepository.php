<?php

namespace App\Repositories;

use App\Models\OfertaCategoria;
use App\Repositories\BaseRepository;

/**
 * Class OfertaCategoriaRepository
 * @package App\Repositories
 * @version March 15, 2021, 3:46 pm UTC
*/

class OfertaCategoriaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'categoria_id',
        'oferta_id'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return OfertaCategoria::class;
    }
}
