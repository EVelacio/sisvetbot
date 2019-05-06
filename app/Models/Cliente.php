<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Cliente
 * @package App\Models
 * @version May 6, 2019, 1:20 am UTC
 *
 * @property \App\Models\Mascota mascota
 * @property \App\Models\User user
 * @property \Illuminate\Database\Eloquent\Collection Cita
 * @property string nombre
 * @property string apellido_paterno
 * @property string apellido_materno
 * @property string edad
 * @property string calle
 * @property string numero
 * @property string colonia
 * @property string cp
 * @property string tel
 * @property string cel
 * @property integer users_id
 * @property integer mascotas_id
 */
class Cliente extends Model
{
    use SoftDeletes;

    public $table = 'clientes';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre',
        'apellido_paterno',
        'apellido_materno',
        'edad',
        'calle',
        'numero',
        'colonia',
        'cp',
        'tel',
        'cel',
        'users_id',
        'mascotas_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'apellido_paterno' => 'string',
        'apellido_materno' => 'string',
        'edad' => 'string',
        'calle' => 'string',
        'numero' => 'string',
        'colonia' => 'string',
        'cp' => 'string',
        'tel' => 'string',
        'cel' => 'string',
        'users_id' => 'integer',
        'mascotas_id' => 'integer'
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
    public function mascota()
    {
        return $this->belongsTo(\App\Models\Mascota::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function citas()
    {
        return $this->hasMany(\App\Models\Cita::class);
    }
}
