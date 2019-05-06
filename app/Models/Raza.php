<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Raza
 * @package App\Models
 * @version May 6, 2019, 1:29 am UTC
 *
 * @property \App\Models\Especy especy
 * @property \Illuminate\Database\Eloquent\Collection clientes
 * @property \Illuminate\Database\Eloquent\Collection Mascota
 * @property string nombre
 * @property integer especies_id
 */
class Raza extends Model
{
    use SoftDeletes;

    public $table = 'razas';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre',
        'especies_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'especies_id' => 'integer'
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
    public function especy()
    {
        return $this->belongsTo(\App\Models\Especy::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function mascotas()
    {
        return $this->hasMany(\App\Models\Mascota::class);
    }
}
