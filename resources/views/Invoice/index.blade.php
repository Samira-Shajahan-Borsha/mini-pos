@extends('Include.layout')
@section('content')
    <table class="table table-striped">
        @php
            $serial = 0;
        @endphp
        <thead class="table-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Invoice Number</th>
                <th scope="col">Customer Email</th>
                <th scope="col">Total</th>
                <th scope="col">Date</th>
                <th scope="col">Payment Method</th>
                <th></th>
              </tr>
        </thead>
        <tbody class="table-light">
            @foreach ($invoices as $invoice)
            <tr>
                <td>{{ ++$serial }}</td>
                <td>{{ $invoice->invoice_number }}</td>
                <td>{{ $invoice->customer_mail }}</td>
                <td>{{ $invoice->total }}</td>
                <td>{{ $invoice->date }}</td>
                <td>{{ $invoice->payment_method }}</td>
                
                <td><a href="{{ route('invoice.show',$invoice->id) }}" class="btn btn-outline-dark">Details</a></td>
             
              </tr>
            @endforeach
          </tbody> 
    </table>
@endsection