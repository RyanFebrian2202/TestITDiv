<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int    $ProductID
 * @property string $ProductName
 * @property float  $Weight
 */
class Msproduct extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'msproduct';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'ProductID';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ProductName', 'Weight', 'Price'
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
        'ProductID' => 'int', 'ProductName' => 'string', 'Weight' => 'float'
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
    public function trinvoicedetail(){
        return $this->hasMany(Trinvoicedetail::class,'ProductID');
    }
}
