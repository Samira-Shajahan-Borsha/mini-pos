@extends('Include.layout')

@section('content')
    <h1 class="container">Edit product</h1><br>
    <form action="{{ route('product.update', $product->id) }}" method="POST" class="container">
        @csrf
        <div>
            <label for="name" class="text-success fs-5 fw-semibold">Product Name: 
            <input type="text" placeholder="Product Name" name="name" value="{{ $product->name }}">
            <div class="text-danger">{{ $errors->first('name') }}</div>
            </label>
        </div><br>
        <div>
            <label for="name" class="text-success fs-5 fw-semibold">SKU: 
            <input type="text" placeholder="SKU" name="sku" value="{{ $product->sku }}">
            <div class="text-danger">{{ $errors->first('sku') }}</div>
            </label>
        </label>
        </div><br>
        <div>
            <label for="name" class="text-success fs-5 fw-semibold">Description: 
            <input type="text" placeholder="Description" name="description" value="{{ $product->description }}">
            <div class="text-danger">{{ $errors->first('description') }}</div>
            </label>
        </div><br>
        <div>
            <label for="name" class="text-success fs-5 fw-semibold">Available Quantity:
            <input type="text" placeholder="Available Quantity" name="available_quantity" value="{{ $product->available_quantity }}">
            <div class="text-danger">{{ $errors->first('available_quantity') }}</div>
            </label>
        </div><br>
        <div>
            <label for="name" class="text-success  fs-5 fw-semibold">Purchase Price: 
            <input type="text" placeholder="Purchase Price" name="purchase_price" value="{{ $product->purchase_price }}" >
            <div class="text-danger">{{ $errors->first('purchase_pricezzzzzzzzzz fw-semibold') }}</div>
            </label>
        </div><br>
        <button type="submit" class="btn btn-primary fs-5 fw-semibold">Update</button>
    </form>

@endsection