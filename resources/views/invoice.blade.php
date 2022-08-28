<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body class="m-5">
    <form action="" class="mb-5">
        @csrf
        <div class="row g-3 align-items-center">
            <div class="col-auto">
                <label for="search" class="col-form-label">No Invoice</label>
            </div>
            <div class="col-auto">
                <input type="text" name="search" id="search" class="form-control" aria-describedby="passwordHelpInline"
                    placeholder="IN0001" value="{{request('search')}}">
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>

    <h3 class="mb-4">Invoice Detail</h3>

    @if ($invoiceStatus!=0)
    <form action="{{route('updateInvoice',['no'=>$invoice->InvoiceNo])}}" class="row g-3" method="POST" enctype="multipart/form-data">
        @csrf
        @method('patch')
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="col-md-10">
                        <label for="inputEmail4" class="form-label">Invoice Date</label>
                        <input type="date" name="invoiceDate" class="form-control" id="inputEmail4"
                            value="{{$invoice->InvoiceDate->format('Y-m-d')}}">
                    </div>
                    <div class="col-md-10">
                        <label for="inputPassword4" class="form-label">To</label>
                        <textarea class="form-control" name="invoiceTo" id="floatingTextarea2" style="height: 100px"
                            value="{{$invoice->InvoiceTo}}">{{$invoice->InvoiceTo}}</textarea>
                    </div>
                    <div class="col-md-10">
                        <label for="inputState" class="form-label">Sales Name</label>
                        <select id="inputState" class="form-select" name="sales">
                            @foreach ($sales as $sale)
                            <option @if($invoice->SalesID === $sale->SalesID) selected @endif
                                value="{{$sale->SalesID}}">{{$sale->SalesName}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-10">
                        <label for="inputState" class="form-label">Courier</label>
                        <select id="inputState" class="form-select" name="courier">
                            @foreach ($couriers as $courier)
                            <option @if($invoice->CourierID === $courier->CourierID) selected @endif
                                value="{{$courier->CourierID}}">{{$courier->CourierName}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col">
                    <div class="col-md-10">
                        <label for="inputPassword4" class="form-label">Ship To</label>
                        <textarea class="form-control" name="shipTo" id="floatingTextarea2" style="height: 100px"
                            value="{{$invoice->ShipTo}}">{{$invoice->ShipTo}}</textarea>
                    </div>
                    <div class="col-md-10">
                        <label for="inputState" class="form-label">Payment Type</label>
                        <select id="inputState" class="form-select" name="payment">
                            @foreach ($payments as $payment)
                            <option @if($invoice->PaymentType === $payment->PaymentID) selected @endif
                                value="{{$payment->PaymentID}}">{{$payment->PaymentName}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <table class="table table-bordered mt-4">
                <thead>
                    <tr>
                        <th scope="col">Item</th>
                        <th scope="col">Weight(Kg)</th>
                        <th scope="col">QTY</th>
                        <th scope="col">Unit Pirce</th>
                        <th scope="col">Total</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $total = 0;
                    $total_weight = 0;
                    $total_qty = 0;
                    @endphp
                    @foreach ($invoiceDetails as $invoiceDetail)
                    <tr>
                        <td scope="row">{{$invoiceDetail->msproduct->ProductName}}</td>
                        <td>{{$invoiceDetail->Weight}}</td>
                        <td>{{$invoiceDetail->Qty}}</td>
                        <td>{{$invoiceDetail->Price}}</td>
                        <td>{{$invoiceDetail->Price * $invoiceDetail->Qty}}</td>
                    </tr>
                    @php
                    $total = $total + $invoiceDetail->Price * $invoiceDetail->Qty;
                    $total_weight = $total_weight + $invoiceDetail->Weight;
                    $total_qty = $total_qty + $invoiceDetail->Qty;
                    @endphp
                    @endforeach
                </tbody>
            </table>

            <div class="row mt-4">
                <div class="col">
                </div>
                <div class="col-md-auto">
                    <label for="inputPassword4" class="form-label d-flex justify-content-start align-items-end"><b>Sub Total</b></label>
                    <br>
                    <label for="inputPassword4" class="form-label d-flex justify-content-start align-items-end"><b>Courier Fee</b></label>
                    <hr>
                    <label for="inputPassword4" class="form-label d-flex justify-content-start align-items-end"><b>Total</b></label>
                </div>
                <div class="col col-lg-2">
                    <label for="inputPassword4" class="form-label d-flex justify-content-end align-items-end pe-5"
                        style="width: 100%"><b>{{$total}}</b></label>
                    <br>
                    <label for="inputPassword4" class="form-label d-flex justify-content-end align-items-end pe-5"
                        style="width: 100%"><b>{{$total_weight * $total_qty * $courierDetail->Price}}</b></label>
                    <hr>
                    <label for="inputPassword4" class="form-label d-flex justify-content-end align-items-end pe-5"
                        style="width: 100%"><b>{{$total + ($total_weight * $total_qty * $courierDetail->Price)}}</b></label>
                </div>
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
    </form>

    <form action="{{route('deleteInvoice',['no'=>$invoice->InvoiceNo])}}" method="POST" enctype="multipart/form-data" class="mt-4">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>

    @else
    <h4>Data not found</h4>
    @endif

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
