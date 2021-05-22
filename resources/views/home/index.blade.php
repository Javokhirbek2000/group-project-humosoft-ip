@extends('layouts.index')

@section('content')
faefaef
  @include('partials.banners')
  <x-section title="Featured Collections">
    <div class="row">
      @for ($i = 0; $i < 8; $i++)
        @php
          $isBig = $i == 0 || $i == 1;
        @endphp
        <div class="{{ $i == 0 || $i == 1 ? 'col-lg-6 col-sm-12' : 'col-md-4 col-sm-6' }} py-2 px-2">
          <a href="/collection/shoes" class="card bg-dark text-white {{ $isBig ? 'h-350px' : 'h-250px' }} custom-card">
            <img src="https://picsum.photos/200/300" class="card-img h-100 object-fit-cover" alt="Shoes">
            <div class="card-img-overlay d-flex flex-column justify-content-between">
              <h5 class="card-title">Shoes {{ $i }}</h5>
              <p class="card-text">Producst: {{ 10 }}</p>
            </div>
          </a>
        </div>
      @endfor
    </div>
  </x-section>

  <x-section title="Featured Products">
    <div class="row">
      @for ($i = 0; $i < 8; $i++)
        <div class="col-lg-3 col-md-4 col-sm-6 py-2 px-2 ">
          <div class="product-item">
            <div class="product-image">
              <a href="product/5" class="image">
                <img class="pic-1" src="https://picsum.photos/id/{{ $i + 1 }}/200/300">
                <img class="pic-2" src="https://picsum.photos/id/{{ $i + 10 }}/200/300">
              </a>
              <a href="" class="product-like-icon"><i class="far fa-heart"></i></a>
              <ul class="product-links">
                <li><a href="#"><i class="bi bi-heart"></i></a></li>
                <li><a href="#"><i class="bi bi-clipboard"></i></a></li>
                <li><a href="#"><i class="bi bi-eye"></i></a></li>
                <li><a href="#"><i class="bi bi-bag"></i></a></li>
              </ul>
            </div>
            <div class="product-content">
              <h3 class="title"><a href="#">Women's Shirt Top</a></h3>
              <div class="price">$66.90</div>
            </div>
          </div>
        </div>
      @endfor
    </div>
  </x-section>
@endsection
