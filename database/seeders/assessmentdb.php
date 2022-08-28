<?php
/**
 * Export to PHP Array plugin for PHPMyAdmin
 * @version 5.1.1
 */

/**
 * Database `assessmentdb`
 */

/* `assessmentdb`.`ltcourierfee` */
$ltcourierfee = array(
  array('WeightID' => '1','CourierID' => '1','StartKg' => '1','EndKg' => '2','Price' => '8000'),
  array('WeightID' => '2','CourierID' => '1','StartKg' => '3','EndKg' => '4','Price' => '9500'),
  array('WeightID' => '3','CourierID' => '2','StartKg' => '1','EndKg' => '2','Price' => '7500'),
  array('WeightID' => '4','CourierID' => '2','StartKg' => '3','EndKg' => '4','Price' => '8500'),
  array('WeightID' => '5','CourierID' => '3','StartKg' => '1','EndKg' => '2','Price' => '10000'),
  array('WeightID' => '6','CourierID' => '3','StartKg' => '3','EndKg' => '4','Price' => '10000'),
  array('WeightID' => '7','CourierID' => '1','StartKg' => '5','EndKg' => '10','Price' => '10500'),
  array('WeightID' => '8','CourierID' => '2','StartKg' => '5','EndKg' => '10','Price' => '9500'),
  array('WeightID' => '9','CourierID' => '3','StartKg' => '5','EndKg' => '10','Price' => '12000')
);

/* `assessmentdb`.`mscourier` */
$mscourier = array(
  array('CourierID' => '1','CourierName' => 'JNE'),
  array('CourierID' => '2','CourierName' => 'J&T'),
  array('CourierID' => '3','CourierName' => 'Wahana')
);

/* `assessmentdb`.`mspayment` */
$mspayment = array(
  array('PaymentID' => '1','PaymentName' => 'Cash'),
  array('PaymentID' => '2','PaymentName' => 'COD')
);

/* `assessmentdb`.`msproduct` */
$msproduct = array(
  array('ProductID' => '1','ProductName' => 'Tepung','Weight' => '1.5','Price' => '10000'),
  array('ProductID' => '7','ProductName' => 'Bluband','Weight' => '0.25','Price' => '8000'),
  array('ProductID' => '9','ProductName' => 'Beras','Weight' => '1','Price' => '64000'),
  array('ProductID' => '10','ProductName' => 'Eskrim','Weight' => '0.5','Price' => '20000'),
  array('ProductID' => '11','ProductName' => 'Kentang','Weight' => '1','Price' => '15000')
);

/* `assessmentdb`.`mssales` */
$mssales = array(
  array('SalesID' => '1','SalesName' => 'Andy'),
  array('SalesID' => '2','SalesName' => 'Jessica')
);

/* `assessmentdb`.`trinvoice` */
$trinvoice = array(
  array('InvoiceNo' => 'IN0001','InvoiceDate' => '2015-06-23 00:00:00','InvoiceTo' => 'Invoice Orang 1','ShipTo' => 'Ship Orang 1','SalesID' => '1','CourierID' => '1','PaymentType' => '1','CourierFee' => '0'),
  array('InvoiceNo' => 'IN0002','InvoiceDate' => '2019-02-27 00:00:00','InvoiceTo' => 'Invoice Orang 2','ShipTo' => 'Ship Orang 2','SalesID' => '2','CourierID' => '2','PaymentType' => '2','CourierFee' => '0')
);

/* `assessmentdb`.`trinvoicedetail` */
$trinvoicedetail = array(
  array('InvoiceNo' => 'IN0001','ProductID' => '1','Weight' => '1.5','Qty' => '3','Price' => '10000'),
  array('InvoiceNo' => 'IN0001','ProductID' => '7','Weight' => '0.25','Qty' => '1','Price' => '8000'),
  array('InvoiceNo' => 'IN0001','ProductID' => '9','Weight' => '2','Qty' => '3','Price' => '64000'),
  array('InvoiceNo' => 'IN0002','ProductID' => '7','Weight' => '0.25','Qty' => '1','Price' => '8000'),
  array('InvoiceNo' => 'IN0002','ProductID' => '10','Weight' => '0.5','Qty' => '3','Price' => '20000'),
  array('InvoiceNo' => 'IN0002','ProductID' => '9','Weight' => '2','Qty' => '2','Price' => '64000')
);
