<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $WeightID
 * @property int $CourierID
 * @property int $StartKg
 * @property int $EndKg
 */
class Ltcourierfee extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'ltcourierfee';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'WeightID';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'CourierID', 'StartKg', 'EndKg', 'Price'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [

    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'WeightID' => 'int', 'CourierID' => 'int', 'StartKg' => 'int', 'EndKg' => 'int'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [

    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var boolean
     */
    public $timestamps = true;

    // Scopes...

    // Functions ...

    // Relations ...
    public function mscourier(){
        return $this->belongsTo(Mscourier::class, 'CourierID');
    }
}
