<?php

namespace Database\Seeders;

use App\Models\Ltcourierfee;
use App\Models\Mscourier;
use App\Models\Mspayment;
use App\Models\Msproduct;
use App\Models\Mssales;
use App\Models\Trinvoice;
use App\Models\Trinvoicedetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mscourier::Create([
            'CourierID' => 1,
            'CourierName' => 'JNE'
        ]);

        Mscourier::Create([
            'CourierID' => 2,
            'CourierName' => 'J&T'
        ]);

        Mscourier::Create([
            'CourierID' => 3,
            'CourierName' => 'Wahana'
        ]);

        Ltcourierfee::create([
            'WeightID' => 1,
            'CourierID' => 1,
            'StartKg' => 1,
            'EndKg' => 2,
            'Price' => 8000
        ]);

        Ltcourierfee::create([
            'WeightID' => 2,'CourierID' => 1,'StartKg' => 3,'EndKg' => 4,'Price' => 9500
        ]);

        Ltcourierfee::create([
            'WeightID' => '3','CourierID' => '2','StartKg' => '1','EndKg' => '2','Price' => '7500'
        ]);

        Ltcourierfee::create([
            'WeightID' => '4','CourierID' => '2','StartKg' => '3','EndKg' => '4','Price' => '8500'
        ]);

        Ltcourierfee::create([
            'WeightID' => '5','CourierID' => '3','StartKg' => '1','EndKg' => '2','Price' => '10000'
        ]);

        Ltcourierfee::create([
            'WeightID' => '6','CourierID' => '3','StartKg' => '3','EndKg' => '4','Price' => '10000'
        ]);

        Ltcourierfee::create([
            'WeightID' => '7','CourierID' => '1','StartKg' => '5','EndKg' => '10','Price' => '10500'
        ]);

        Ltcourierfee::create([
            'WeightID' => '8','CourierID' => '2','StartKg' => '5','EndKg' => '10','Price' => '9500'
        ]);

        Ltcourierfee::create([
            'WeightID' => '9','CourierID' => '3','StartKg' => '5','EndKg' => '10','Price' => '12000'
        ]);

        Mspayment::create([
            'PaymentID' => '1','PaymentName' => 'Cash'
        ]);

        Mspayment::create([
            'PaymentID' => '2','PaymentName' => 'COD'
        ]);

        Msproduct::create([
            'ProductID' => '1','ProductName' => 'Tepung','Weight' => '1.5','Price' => '10000'
        ]);

        Msproduct::create([
            'ProductID' => '7','ProductName' => 'Bluband','Weight' => '0.25','Price' => '8000'
        ]);

        Msproduct::create([
            'ProductID' => '9','ProductName' => 'Beras','Weight' => '1','Price' => '64000'
        ]);

        Msproduct::create([
            'ProductID' => '10','ProductName' => 'Eskrim','Weight' => '0.5','Price' => '20000'
        ]);

        Msproduct::create([
            'ProductID' => '11','ProductName' => 'Kentang','Weight' => '1','Price' => '15000'
        ]);

        Mssales::create([
            'SalesID' => '1','SalesName' => 'Andy'
        ]);

        Mssales::create([
            'SalesID' => '2','SalesName' => 'Jessica'
        ]);

        Trinvoice::create([
            'InvoiceNo' => 'IN0001','InvoiceDate' => '2015-06-23 00:00:00','InvoiceTo' => 'Invoice Orang 1','ShipTo' => 'Ship Orang 1','SalesID' => '1','CourierID' => '1','PaymentType' => '1','CourierFee' => '0'
        ]);

        Trinvoice::create([
            'InvoiceNo' => 'IN0002','InvoiceDate' => '2019-02-27 00:00:00','InvoiceTo' => 'Invoice Orang 2','ShipTo' => 'Ship Orang 2','SalesID' => '2','CourierID' => '2','PaymentType' => '2','CourierFee' => '0'
        ]);

        Trinvoicedetail::create([
            'InvoiceNo' => 'IN0001','ProductID' => '1','Weight' => '1.5','Qty' => '3','Price' => '10000'
        ]);

        Trinvoicedetail::create([
            'InvoiceNo' => 'IN0001','ProductID' => '7','Weight' => '0.25','Qty' => '1','Price' => '8000'
        ]);

        Trinvoicedetail::create([
            'InvoiceNo' => 'IN0001','ProductID' => '9','Weight' => '2','Qty' => '3','Price' => '64000'
        ]);

        Trinvoicedetail::create([
            'InvoiceNo' => 'IN0002','ProductID' => '7','Weight' => '0.25','Qty' => '1','Price' => '8000'
        ]);

        Trinvoicedetail::create([
            'InvoiceNo' => 'IN0002','ProductID' => '10','Weight' => '0.5','Qty' => '3','Price' => '20000'
        ]);

        Trinvoicedetail::create([
            'InvoiceNo' => 'IN0002','ProductID' => '9','Weight' => '2','Qty' => '2','Price' => '64000'
        ]);
    }
}
