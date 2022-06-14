@extends('Include.layout')

@section('content')
    <h2 class="text-center">Add Product</h2><br>
    <form class="row g-3" action="{{ route('product.store') }}" method="POST">
        @csrf
        <div class="col-md-6">
          <label for="name" class="form-label fs-5 fw-semibold">Product Name</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="Enter product name">
          <div class="text-danger">{{ $errors->first('name') }}</div>
        </div>
        <div class="col-md-6">
          <label for="sku" class="form-label fs-5 fw-semibold">SKU</label>
          <input type="text" class="form-control" id="sku" name="sku" placeholder="Enter SKU">
          <div class="text-danger">{{ $errors->first('sku') }}</div>
        </div>
        
        <div class="col-md-6">
            <label for="description" class="form-label fs-5 fw-semibold">Description</label>
            <input type="text" class="form-control" id="description" name="description" placeholder="Description">
            <div class="text-danger">{{ $errors->first('description') }}</div>
        </div>
        <div class="col-md-6">
            <label for="available_quantity" class="form-label fs-5 fw-semibold">Available Quantity</label>
            <input type="number" class="form-control" id="available_quantity" name="available_quantity" placeholder="Enter available quantity">
            <div class="text-danger">{{ $errors->first('available_quantity') }}</div>
        </div>
        <div class="col-md-6">
            <label for="available_quantity" class="form-label fs-5 fw-semibold">Purchase Price</label>
            <input type="number" class="form-control" id="purchase_price" name="purchase_price" placeholder="Enter purchase price">
            <div class="text-danger">{{ $errors->first('purchase_price') }}</div>
        </div>
        <div class="col-12 text-center">
          <button type="submit" class="btn btn-primary">Add</button>
        </div>
      </form>
@endsection