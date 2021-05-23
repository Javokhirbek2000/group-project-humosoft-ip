<h2>Banners</h2>
<div class="table-responsive custom-table">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th>#</th>
        <th>Image</th>
        <th>Name</th>
        <th>Info</th>
        <th>Url</th>
      </tr>
    </thead>
    <tbody>
      @foreach (App\Models\Banner::all() as $i => $banner)
        <tr>
          <td>{{ $banner->id }}</td>
          <td>
            <div class="img-wrapper mx-auto square-75 overflow-hidden">
              <img class="w-100 h-100" src="{{ $banner->image }}" class="img-thumbnail" alt="{{ $banner->name }}">
            </div>
          </td>
          <td>{{ $banner->name }}</td>
          <td>{{ $banner->description }}</td>
          <td>{{ $banner->url }}</td>
          <td><a href="#" class="btn btn-info text-white"><i class="bi bi-pencil"></i></a></td>
          <td><a href="#" class="btn btn-danger text-white"><i class="bi bi-trash"></i></a></td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>
