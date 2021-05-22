@extends('layouts.index')

@section("content")
<x-section title="{{ucfirst($title)}}">
    <div class="row">
      @for ($i = 0; $i < 8; $i++)
        <div class="col-lg-3 col-md-4 col-sm-6 py-2 px-2 ">
            @include("components.product-card")
        </div>
      @endfor
    </div>
    <nav aria-label="Page navigation" class="mt-5">
        <ul class="pagination justify-content-center">
          <li class="page-item disabled"><a class="page-link" tabindex="-1" href="#"><</a></li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item"><a class="page-link" href="#">></a></li>
        </ul>
      </nav>
  </x-section>

@endsection