<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Especie
 * @package App\Models
 * @version May 6, 2019, 1:23 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection clientes
 * @property \Illuminate\Database\Eloquent\Collection Raza
 * @property string nombre
 */
class Especie extends Model
{
    use SoftDeletes;

    public $table = 'especies';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function razas()
    {
        return $this->hasMany(\App\Models\Raza::class);
    }
}
