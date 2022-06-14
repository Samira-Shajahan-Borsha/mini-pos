@extends('Include.layout')

@section('content')
<h2 class="text-center">Create Invoice</h2><br>
<form class="row g-3" action="" method="">
  @csrf
    <div class="col-md-6">
      <label for="name" class="form-label fs-5 fw-semibold">Invoice Number</label>
      <input type="number" class="form-control" id="name" name="invoice_num" placeholder="Enter Invoice Number">
    </div>
    
    <div class="col-md-6">
      <label for="inputState" class="form-label fs-5 fw-semibold">Payment Method</label>
      <select id="inputState" class="form-select">
        <option selected>Cash</option>
        <option>Bkash</option> 
        <option>Card</option> 
      </select>
    </div>
    <div class="col-md-6">
        <label for="customerEmail" class="form-label fs-5 fw-semibold">Customer Email</label>
        <input type="text" class="form-control" id="customerEmail" name="customer_email" placeholder="Enter customer mail">
    </div>
    <div class="col-md-6">
        <label for="inputDate" class="form-label fs-5 fw-semibold">Date</label>
        <div class="row">
            <div class="col-md-12">
                <input type="date" id="date" name="date" class="form-control">
            </div>
        </div>
    </div>
    <div class="col-12 text-center">
      <button type="submit" class="btn btn-primary">Create Invoice</button>
    </div>
  </form>

@endsection


