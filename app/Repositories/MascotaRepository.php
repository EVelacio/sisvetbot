<?php

namespace App\Repositories;

use App\Models\Mascota;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class MascotaRepository
 * @package App\Repositories
 * @version May 6, 2019, 1:23 am UTC
 *
 * @method Mascota findWithoutFail($id, $columns = ['*'])
 * @method Mascota find($id, $columns = ['*'])
 * @method Mascota first($columns = ['*'])
*/
class MascotaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'sexo',
        'color',
        'edad',
        'razas_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Mascota::class;
    }
}
