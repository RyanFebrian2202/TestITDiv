<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $InvoiceNo
 * @property int    $ProductID
 * @property float  $Weight
 */
class Trinvoicedetail extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'trinvoicedetail';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = ['InvoiceNo', 'ProductID'];
    public $incrementing = false;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'InvoiceNo', 'ProductID', 'Weight', 'Qty', 'Price'
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
        'InvoiceNo' => 'string', 'ProductID' => 'int', 'Weight' => 'float'
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
        return $this->belongsTo(Trinvoice::class,'InvoiceNo');
    }

    public function msproduct(){
        return $this->belongsTo(Msproduct::class,'ProductID');
    }
}
