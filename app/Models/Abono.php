<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Abono
 * @package App\Models
 * @version May 6, 2019, 1:25 am UTC
 *
 * @property \App\Models\Cita cita
 * @property \Illuminate\Database\Eloquent\Collection clientes
 * @property string fecha
 * @property string pago
 * @property integer citas_id
 */
class Abono extends Model
{
    use SoftDeletes;

    public $table = 'abonos';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'fecha',
        'pago',
        'citas_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'fecha' => 'string',
        'pago' => 'string',
        'citas_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function cita()
    {
        return $this->belongsTo(\App\Models\Cita::class);
    }
}
