<?php

namespace App\Repositories;

use App\Models\Modalidades;
use App\Repositories\BaseRepository;

/**
 * Class ModalidadesRepository
 * @package App\Repositories
 * @version December 8, 2020, 12:37 am UTC
*/

class ModalidadesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'descripcion'
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
        return Modalidades::class;
    }
}
