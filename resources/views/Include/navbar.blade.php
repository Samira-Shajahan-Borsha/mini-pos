<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <b><a class="navbar-brand text-success" href="/">Grocery Shopping</a></b>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <b><a class="nav-link active text-success" aria-current="page" href="{{ route('product.index') }}">Product List</a></b>
          </li>
          <li class="nav-item">
            <b><a class="nav-link active text-success" href="{{ route('product.create') }}">Add Product</a></b>
          </li>
          <li class="nav-item">
            <b><a class="nav-link active text-success" href="{{ route('invoice.create') }}">New Invoice</a></b>
          </li>
          
         
        </ul>
       
      </div>
    </div>
  </nav>