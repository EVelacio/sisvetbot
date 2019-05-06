<?php

namespace App\Repositories;

use App\Models\Raza;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class RazaRepository
 * @package App\Repositories
 * @version May 6, 2019, 1:29 am UTC
 *
 * @method Raza findWithoutFail($id, $columns = ['*'])
 * @method Raza find($id, $columns = ['*'])
 * @method Raza first($columns = ['*'])
*/
class RazaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'especies_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Raza::class;
    }
}
