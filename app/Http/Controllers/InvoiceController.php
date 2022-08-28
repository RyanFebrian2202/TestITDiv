<?php

namespace App\Http\Controllers;

use App\Models\Ltcourierfee;
use App\Models\MsCourier;
use App\Models\Mspayment;
use App\Models\Mssales;
use App\Models\Trinvoice;
use App\Models\Trinvoicedetail;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function createInvoice(Request $request){
        $invoice = Trinvoice::create([
                    'InvoiceDate' => $request->invoiceDate,
                    'InvoiceTo' => $request->invoiceTo,
                    'ShipTo' => $request->shipTo,
                    'SalesID' => $request->sales,
                    'PaymentType' => $request->payment,
                    'CourierID' => $request->courier
        ]);

        Trinvoicedetail::create([
            'InvoiceNo' => $invoice->InvoiceNo,
            'ProductID' => $request->product,
            'Weight' => $request->weight,
            'Qty' => $request->quantity,
            'Price' => $request->price
        ]);

        return redirect(route(''));
    }

    public function getInvoiceDetail(){
        $payments = Mspayment::all();
        $sales = Mssales::all();
        $couriers = MsCourier::all();
        $invoiceStatus = 0;

        if (request('search')){
            //$invoice = Trinvoice::where('InvoiceNo','like',request('search'))->get();
            $invoice = Trinvoice::find(request('search'));

            if($invoice == NULL){
                return view('invoice', compact('invoiceStatus'));
            }

            $invoiceDetails = Trinvoicedetail::where('InvoiceNo','like',request('search'))->get();
            $min_weight = 9999999;
            $max_weight = 0;

            foreach($invoiceDetails as $invoiceDetail){
                if ($invoiceDetail->Weight < $min_weight) {
                    $min_weight = $invoiceDetail->Weight;
                }

                if ($invoiceDetail->Weight > $max_weight) {
                    $max_weight = $invoiceDetail->Weight;
                }
            }

            $courierDetail = Ltcourierfee::where('CourierID','like',$invoice->CourierID)
                                            ->where('StartKg','>=',$min_weight)
                                            ->where('EndKg','<=',$max_weight)
                                            ->first();

            $invoiceStatus = 1;

            return view('invoice',[
                'invoice' => $invoice,
                'payments' => $payments,
                'sales' => $sales,
                'couriers' => $couriers,
                'invoiceDetails' => $invoiceDetails,
                'invoiceStatus' => $invoiceStatus,
                'courierDetail' => $courierDetail
            ]);
        }

        return view('invoice', compact('invoiceStatus'));
    }

    public function updateInvoice(Request $request, $no){
        $invoice = Trinvoice::findOrFail($no);

        $invoice->update([
            'InvoiceDate' => $request->invoiceDate,
            'InvoiceTo' => $request->invoiceTo,
            'ShipTo' => $request->shipTo,
            'SalesID' => $request->sales,
            'PaymentType' => $request->payment,
            'CourierID' => $request->courier
        ]);

        return redirect(route('getInvoice'));
    }

    public function deleteInvoice($no){
        $invoice = Trinvoice::findOrFail($no);

        $invoice->delete();

        return redirect(route('getInvoice'));
    }
}
