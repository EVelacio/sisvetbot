<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Veterinario
 * @package App\Models
 * @version May 6, 2019, 1:24 am UTC
 *
 * @property \App\Models\User user
 * @property \Illuminate\Database\Eloquent\Collection Cita
 * @property \Illuminate\Database\Eloquent\Collection clientes
 * @property string nombre
 * @property string apellido_paterno
 * @property string apellido_materno
 * @property string cel
 * @property string cedula_prof
 * @property integer users_id
 */
class Veterinario extends Model
{
    use SoftDeletes;

    public $table = 'veterinarios';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre',
        'apellido_paterno',
        'apellido_materno',
        'cel',
        'cedula_prof',
        'users_id'
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
        'cel' => 'string',
        'cedula_prof' => 'string',
        'users_id' => 'integer'
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
