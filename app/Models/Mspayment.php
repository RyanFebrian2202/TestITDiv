<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int    $PaymentID
 * @property string $PaymentName
 */
class Mspayment extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'mspayment';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'PaymentID';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'PaymentName'
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
        'PaymentID' => 'int', 'PaymentName' => 'string'
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
        return $this->hasMany(Trinvoice::class,'PaymentType');
    }
}
