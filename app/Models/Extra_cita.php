<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Extra_cita
 * @package App\Models
 * @version May 6, 2019, 1:25 am UTC
 *
 * @property \App\Models\Cita cita
 * @property \Illuminate\Database\Eloquent\Collection clientes
 * @property string nota
 * @property string nota_dinero
 * @property string fecha
 * @property integer citas_id
 */
class Extra_cita extends Model
{
    use SoftDeletes;

    public $table = 'extra_citas';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'nota',
        'nota_dinero',
        'fecha',
        'citas_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nota' => 'string',
        'nota_dinero' => 'string',
        'fecha' => 'string',
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
