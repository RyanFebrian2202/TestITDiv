<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string   $InvoiceNo
 * @property string   $InvoiceTo
 * @property string   $ShipTo
 * @property DateTime $InvoiceDate
 * @property int      $SalesID
 * @property int      $CourierID
 * @property int      $PaymentType
 */
class Trinvoice extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'trinvoice';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'InvoiceNo';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'InvoiceDate', 'InvoiceTo', 'ShipTo', 'SalesID', 'CourierID', 'PaymentType', 'CourierFee'
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
        'InvoiceNo' => 'string', 'InvoiceDate' => 'datetime', 'InvoiceTo' => 'string', 'ShipTo' => 'string', 'SalesID' => 'int', 'CourierID' => 'int', 'PaymentType' => 'int'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'InvoiceDate'
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var boolean
     */
    public $timestamps = true;

    // Scopes...
    // public function scopeFilter($query, array $filters){
    //     //Search
    //     $query->when($filters['search'] ?? false, function($query, $search) {
    //         return $query
    //             ->where('InvoiceNo','like',$search);
    //     });
    // }

    // Functions ...

    // Relations ...
    public function mssales(){
        return $this->belongsTo(Mssales::class,'SalesID');
    }

    public function mspayment(){
        return $this->belongsTo(Mspayment::class,'PaymentType');
    }

    public function mscourier(){
        return $this->belongsTo(Mscourier::class,'CourierID');
    }

    public function trinvoicedetail(){
        return $this->hasMany(Trinvoicedetail::class,'InvoiceNo');
    }
}
