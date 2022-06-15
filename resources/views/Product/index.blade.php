@extends('Include.layout')
@section('content')
    <table class="table table-success table-striped">
        @php
            $serial = 0;
        @endphp
        <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Name</th>
              <th scope="col">SKU</th>
              <th scope="col">Description</th>
              <th scope="col">Available Quantity</th>
              <th scope="col">Purchase Price</th>
              <th></th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            @foreach ($products as $product)
            <tr>
                <td>{{ ++$serial }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->sku }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->available_quantity }}</td>
                <td>{{ $product->purchase_price }}</td>
                <td><a href="{{ route('product.edit', $product->id) }}" class="btn btn-primary">Edit</a></td>
                <td><a href="{{ route('product.delete', $product->id) }}" class="btn btn-danger">Delete</a></td> 
              </tr>
            @endforeach
          </tbody>  
    </table>
@endsection