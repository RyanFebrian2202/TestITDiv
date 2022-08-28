<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int    $SalesID
 * @property string $SalesName
 */
class Mssales extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'mssales';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'SalesID';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'SalesName'
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
        'SalesID' => 'int', 'SalesName' => 'string'
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
    public function trinvoice(){
        return $this->hasMany(Trinvoice::class,'SalesID');
    }
}
