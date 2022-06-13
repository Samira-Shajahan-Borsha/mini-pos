@extends('Include.layout')

@section('content')
<h1 class="container">Create Invoice</h1><br>
<form action="" method="POST" class="container">
    @csrf
    <div>
        <label for="invoice_num" class="text-success fs-5 fw-semibold">Invoice Number: 
        <input type="number" name="invoice_num" id="" placeholder="Invoice Number" >
{{--         <div class="text-danger">{{ $errors->first('name') }}</div>
 --}}    </label>
    </div><br>
    <div>
        <label for="total" class="text-success fs-5 fw-semibold">Total: 
        <input type="number" name="total" id="" placeholder="Total">
{{--         <div class="text-danger">{{ $errors->first('sku') }}</div>
 --}}    </label>
    </div><br>
    <div>
        <label for="payment_method" class="text-success fs-5 fw-semibold">Payment Method: 
            <select class="form-select" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
         </label>
    </div><br>
    <div>
        <label for="name" class="text-success fs-5 fw-semibold">Date:
        <input type="text" placeholder="Date" name="available_quantity">
{{--         <div class="text-danger">{{ $errors->first('available_quantity') }}</div>
 --}}    </label>
    </div><br>
    <div>
        <label for="name" class="text-success  fs-5 fw-semibold">Purchase Price: 
        <input type="text" placeholder="Purchase Price" name="purchase_price">
{{--         <div class="text-danger">{{ $errors->first('purchase_price') }}</div>
 --}}
        </label>
    </div><br>
    <button type="submit" class="btn btn-primary  fs-5 fw-semibold">Add</button>
</form>
@endsection


