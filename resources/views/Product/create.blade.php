@extends('Include.layout')

@section('content')
    <h1 class="container">Add product</h1><br>
    <form action="{{ route('product.store') }}" method="POST" class="container">
        @csrf
        <div>
            <label for="name" class="text-success fs-5 fw-semibold">Product Name: 
            <input type="text" placeholder="Product Name" name="name">
            <div class="text-danger">{{ $errors->first('name') }}</div>
        </label>
        </div><br>
        <div>
            <label for="name" class="text-success fs-5 fw-semibold">SKU: 
            <input type="text" placeholder="SKU" name="sku">
            <div class="text-danger">{{ $errors->first('sku') }}</div>
        </label>
        </div><br>
        <div>
            <label for="name" class="text-success fs-5 fw-semibold">Description: 
            <input type="text" placeholder="Description" name="description">
            <div class="text-danger">{{ $errors->first('description') }}</div>
        </label>
        </div><br>
        <div>
            <label for="name" class="text-success fs-5 fw-semibold">Available Quantity:
            <input type="text" placeholder="Available Quantity" name="available_quantity">
            <div class="text-danger">{{ $errors->first('available_quantity') }}</div>
        </label>
        </div><br>
        <div>
            <label for="name" class="text-success  fs-5 fw-semibold">Purchase Price: 
            <input type="text" placeholder="Purchase Price" name="purchase_price">
            <div class="text-danger">{{ $errors->first('purchase_price') }}</div>

            </label>
        </div><br>
        <button type="submit" class="btn btn-primary  fs-5 fw-semibold">Add</button>
    </form>

@endsection