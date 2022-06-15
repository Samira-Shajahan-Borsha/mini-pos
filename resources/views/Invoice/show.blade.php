@extends('Include.layout')
@section('content')
    <h3>Invoice Number: {{ $invoice->invoice_number }} </h3>
    <table class="table table-striped">   
    @php
        $serial = 0;
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
            {{-- <tr>
                <td>{{ ++$serial }}</td>
                <td>{{ $products->name  }}</td>
                <td></td>
                <td></td>
                <td></td>
            </tr> --}}
        </tbody>
    </table>

@endsection