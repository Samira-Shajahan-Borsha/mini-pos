@extends('Include.layout')
@section('content')

    <h3>Invoice Number: {{ $invoice->invoice_number }} </h3>

    <table class="table table-striped">   
    @php
        $serial = 0;
        $total = 0;
    @endphp
        <thead>
            <tr>
                <th>#</th>
                <th>Product Name</th>
                <th>Unit Price</th>
                <th>Quantity</th>
                <th>Total Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sold_items as $sold_item)
            <tr>
                <td>{{ ++$serial }}</td>
                <td>{{ $sold_item->name  }}</td>
                <td>{{ $sold_item->selling_price }}</td>
                <td>{{ $sold_item->quantity }}</td>
                <td>{{ $sold_item->selling_price * $sold_item->quantity }}</td>
                @php
                    $total += $sold_item->selling_price * $sold_item->quantity;
                @endphp
            </tr>
            @endforeach
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td>Total Amount: </td>
                <td>{{ $total }}</td>
            </tr>
        </tbody>
    </table>
    
@endsection