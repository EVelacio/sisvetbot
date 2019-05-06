<?php

namespace App\Repositories;

use App\Models\Veterinario;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class VeterinarioRepository
 * @package App\Repositories
 * @version May 6, 2019, 1:24 am UTC
 *
 * @method Veterinario findWithoutFail($id, $columns = ['*'])
 * @method Veterinario find($id, $columns = ['*'])
 * @method Veterinario first($columns = ['*'])
*/
class VeterinarioRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'apellido_paterno',
        'apellido_materno',
        'cel',
        'cedula_prof',
        'users_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Veterinario::class;
    }
}
