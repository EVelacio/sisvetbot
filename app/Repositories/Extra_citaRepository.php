<?php

namespace App\Repositories;

use App\Models\Extra_cita;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class Extra_citaRepository
 * @package App\Repositories
 * @version May 6, 2019, 1:25 am UTC
 *
 * @method Extra_cita findWithoutFail($id, $columns = ['*'])
 * @method Extra_cita find($id, $columns = ['*'])
 * @method Extra_cita first($columns = ['*'])
*/
class Extra_citaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nota',
        'nota_dinero',
        'fecha',
        'citas_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Extra_cita::class;
    }
}
