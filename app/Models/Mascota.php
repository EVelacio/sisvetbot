<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Mascota
 * @package App\Models
 * @version May 6, 2019, 1:23 am UTC
 *
 * @property \App\Models\Raza raza
 * @property \Illuminate\Database\Eloquent\Collection Cita
 * @property \Illuminate\Database\Eloquent\Collection Cliente
 * @property string nombre
 * @property string sexo
 * @property string color
 * @property string edad
 * @property integer razas_id
 */
class Mascota extends Model
{
    use SoftDeletes;

    public $table = 'mascotas';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre',
        'sexo',
        'color',
        'edad',
        'razas_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'sexo' => 'string',
        'color' => 'string',
        'edad' => 'string',
        'razas_id' => 'integer'
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
    public function raza()
    {
        return $this->belongsTo(\App\Models\Raza::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function citas()
    {
        return $this->hasMany(\App\Models\Cita::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function clientes()
    {
        return $this->hasMany(\App\Models\Cliente::class);
    }
}
