<?php

namespace App\Repositories;

use App\Models\Abono;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class AbonoRepository
 * @package App\Repositories
 * @version May 6, 2019, 1:25 am UTC
 *
 * @method Abono findWithoutFail($id, $columns = ['*'])
 * @method Abono find($id, $columns = ['*'])
 * @method Abono first($columns = ['*'])
*/
class AbonoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'fecha',
        'pago',
        'citas_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Abono::class;
    }
}
