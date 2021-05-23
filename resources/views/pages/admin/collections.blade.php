<h2>Collections</h2>
<div class="table-responsive custom-table">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th>#</th>
        <th>Image</th>
        <th>Name</th>
        <th>Featured</th>
        <th>Products Count</th>
      </tr>
    </thead>
    <tbody>
      @foreach (App\Models\Collection::all() as $i => $collection)
        <tr>
          <td>{{ $collection->id }}</td>
          <td>
            <div class="img-wrapper square-75 mx-auto overflow-hidden">
              <img class="w-100 h-100" src="{{ $collection->image }}" class="img-thumbnail" alt="{{ $collection->name }}">
            </div>
          </td>
          <td>{{ $collection->name }}</td>
          <td><i class="bi {{$collection->is_featured ? "bi-check2-all text-success" : "bi-x-circle text-danger"}} "></i></td>
          <td>{{ count($collection->products) }}</td>
          <td><a href="#" class="btn btn-info text-white"><i class="bi bi-pencil"></i></a></td>
          <td><a href="#" class="btn btn-danger text-white"><i class="bi bi-trash"></i></a></td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>
