<h2>Products</h2>
<div class="table-responsive custom-table">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th>#</th>
        <th>Image</th>
        <th>Name</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Featured</th>
      </tr>
    </thead>
    <tbody>
      @foreach (App\Models\Product::all() as $i => $product)
        <tr>
          <td>{{ $product->id }}</td>
          <td>
            <div class="img-wrapper mx-auto square-75 overflow-hidden">
              <img class="w-100 h-100" src="{{ $product->imagesList()[0] }}" class="img-thumbnail" alt="{{ $product->name }}">
            </div>
          </td>
          <td>{{ $product->name }}</td>
          <td>{{ $product->available }}</td>
          <td>{{ $product->price }}</td>
          <td><i class="bi {{$product->is_featured ? "bi-check2-all text-success" : "bi-x-circle text-danger"}} "></i></td>
          <td><a href="#" class="btn btn-info text-white"><i class="bi bi-pencil"></i></a></td>
          <td><a href="#" class="btn btn-danger text-white"><i class="bi bi-trash"></i></a></td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>
