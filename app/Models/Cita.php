<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Cita
 * @package App\Models
 * @version May 6, 2019, 1:24 am UTC
 *
 * @property \App\Models\Cliente cliente
 * @property \App\Models\Mascota mascota
 * @property \App\Models\Veterinario veterinario
 * @property \Illuminate\Database\Eloquent\Collection Abono
 * @property \Illuminate\Database\Eloquent\Collection clientes
 * @property \Illuminate\Database\Eloquent\Collection ExtraCita
 * @property string fecha_cita
 * @property string fecha_remision
 * @property string hora_cita
 * @property string tipo_servicio
 * @property string importe
 * @property string saldo
 * @property integer veterinarios_id
 * @property integer mascotas_id
 * @property integer clientes_id
 */
class Cita extends Model
{
    use SoftDeletes;

    public $table = 'citas';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'fecha_cita' => 'string',
        'fecha_remision' => 'string',
        'hora_cita' => 'string',
        'tipo_servicio' => 'string',
        'importe' => 'string',
        'saldo' => 'string',
        'veterinarios_id' => 'integer',
        'mascotas_id' => 'integer',
        'clientes_id' => 'integer'
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
    public function cliente()
    {
        return $this->belongsTo(\App\Models\Cliente::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function mascota()
    {
        return $this->belongsTo(\App\Models\Mascota::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function veterinario()
    {
        return $this->belongsTo(\App\Models\Veterinario::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function abonos()
    {
        return $this->hasMany(\App\Models\Abono::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function extraCitas()
    {
        return $this->hasMany(\App\Models\ExtraCita::class);
    }
}
