@extends('Include.layout')

@section('content')
{{-- CREATE INVOICE --}}
<h2 class="text-center">Create Invoice</h2><br>
<form class="row g-3" action="{{ route('invoice.store') }}" method="POST">
    @csrf
    <div class="col-md-6">
        <label for="name" class="form-label fs-5 fw-semibold">Invoice Number</label>
        <input type="number" class="form-control" id="name" name="invoice_num" placeholder="Enter Invoice Number">
        <div class="text-danger">{{ $errors->first('invoice_num') }}</div>
    </div>
    
    <div class="col-md-6">
      <label for="inputState" class="form-label fs-5 fw-semibold">Payment Method</label>
      <select id="inputState" class="form-select" name="payment_method">
        <option selected disabled>Not Selected</option> 
        <option>Cash</option>
        <option>Bkash</option> 
        <option>Card</option> 
      </select>
      <div class="text-danger">{{ $errors->first('payment_method') }}</div>
    </div>
    <div class="col-md-6">
        <label for="customerEmail" class="form-label fs-5 fw-semibold">Customer Email</label>
        <input type="text" class="form-control" id="customerEmail" name="customer_email" placeholder="Enter customer mail">
        <div class="text-danger">{{ $errors->first('customer_email') }}</div>
    </div>
    <div class="col-md-6">
        <label for="inputDate" class="form-label fs-5 fw-semibold">Date</label>
        <div class="row">
            <div class="col-md-12">
                <input type="date" id="date" name="date" class="form-control">
            </div>
            <div class="text-danger">{{ $errors->first('date') }}</div>
        </div>
    </div>
    <div class="col-12 text-center">
      <button type="submit" class="btn btn-primary">Create Invoice</button>
    </div>
  </form>
  <br><hr>
    
    
    <div class="row">
        <div class="col-md-6">
            <label for="inputState" class="form-label fs-5 fw-semibold">Select Product</label>
                <select id="inputState" class="form-select" name="payment_method" onchange="productSelection(this)">
                    <option selected disabled>Not Selected</option> 
                    @foreach ($products as $product)
                        <option value="{{ $product->id }}" data-name="{{ $product->name }}">{{ $product->name }} - Available Quantity: {{ $product->available_quantity }} - Purchase Price: {{ $product->purchase_price }}</option>
                    @endforeach
                </select>
        </div>
    </div>

    <br>

    <div class="row">
        <div id="selected_products" class="col-md-12">
            {{-- <div class="row">
                <div class="col-md-4">
                    <label for="">Name: </label>
                    <span>Chocolate</span>
                </div>
                <div class="col-md-4">
                    <label for="">Quantity: </label>
                    <input type="number">
                </div>
                <div class="col-md-4">
                   <label for="">Price: </label>
                   <input type="number" id="">
                </div>
            </div> --}}
        </div>
    </div>

    <script>
        function productSelection(obj)
        {
            // console.log(obj[obj.selectedIndex].getAttribute('data-name'));
            let html = document.getElementById('selected_products').innerHTML;
            html += '<div class="row">'+
                            '<div class="col-md-4"> '+
                                '<label for="">Name:&nbsp</label>'+
                                '<span>Chocolate</span>'+
                            '</div>'+
                            '<div class="col-md-4">'+
                                '<label for="">Quantity:&nbsp</label>'+
                                '<input type="number">'+
                            '</div>'+
                            '<div class="col-md-4">'+
                                '<label for="">Price:&nbsp</label>'+
                                '<input type="number" id="">'+
                            '</div>'+
                        '</div>';

            document.getElementById('selected_products').innerHTML = html;            
        }
    </script>


@endsection


