@extends('layouts.index')

@section('content')
  <x-section title="Collections">
    <div class="row">
      @foreach (App\Models\Collection::get() as $i => $collection)
        @php
          $isBig = $i == 0 || $i == 1;
        @endphp
        <div class="{{ $i == 0 || $i == 1 ? 'col-lg-6 col-sm-12' : 'col-md-4 col-sm-6' }} py-2 px-2">
          <a href="{{ route('collection', $collection->id) }}" class="card bg-dark text-white {{ $isBig ? 'h-350px' : 'h-250px' }} custom-card">
            <img src="https://picsum.photos/200/300" class="card-img h-100 object-fit-cover" alt="Shoes">
            <div class="card-img-overlay d-flex flex-column justify-content-between">
              <h5 class="card-title">{{ $collection->name }}</h5>
              <!-- <p class="card-text">Products</p> -->
            </div>
          </a>
        </div>
      @endforeach
    </div>
  </x-section>
@endsection
