<?php

namespace App\Models;

use App\Models\Mscourier as ModelsMscourier;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int    $CourierID
 * @property string $CourierName
 */
class Mscourier extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'mscourier';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'CourierID';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'CourierName'
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
        'CourierID' => 'int', 'CourierName' => 'string'
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
    public function ltcourierfee(){
        return $this->hasMany(ModelsMscourier::class,'CourierID');
    }

    public function trinvoice(){
        return $this->hasMany(Trinvoice::class,'CourierID');
    }
}
