<?php

namespace App\Repositories;

use App\Models\Pais;
use App\Repositories\BaseRepository;

/**
 * Class PaisRepository
 * @package App\Repositories
 * @version November 19, 2020, 11:11 am UTC
*/

class PaisRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'abreviatura'
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
        return Pais::class;
    }
}
