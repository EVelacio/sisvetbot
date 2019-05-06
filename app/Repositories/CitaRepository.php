<?php

namespace App\Repositories;

use App\Models\Cita;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class CitaRepository
 * @package App\Repositories
 * @version May 6, 2019, 1:24 am UTC
 *
 * @method Cita findWithoutFail($id, $columns = ['*'])
 * @method Cita find($id, $columns = ['*'])
 * @method Cita first($columns = ['*'])
*/
class CitaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'fecha_cita',
        'fecha_remision',
        'hora_cita',
        'tipo_servicio',
        'importe',
        'saldo',
        'veterinarios_id',
        'mascotas_id',
        'clientes_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Cita::class;
    }
}
