<div class="product-item">
  <div class="product-image">
    <a href="{{ route('product', $product->id) }}" class="image">
      @php($images = $product->imagesList())
        @if (count($images) > 0)
          <img class="pic-1" src="{{ $images[0] }}">
          <img class="pic-2" src="{{ $images[count($images) - 1] }}">
        @else {
          <img class="pic-1" src="{{ assets('img/noimg.png') }}">
          <img class="pic-2" src="{{ assets('img/noimg.png') }}">
          }
        @endif
      </a>
      <ul class="product-links" data-id="{{ $product->id }}" data-name="{{ $product->name }}"
        data-price="{{ $product->price }}" data-available="{{ $product->available }}"
        data-description="{{ $product->description }}" data-images="{{ $product->imagesComma() }}">
        <li><button class="btn js-wishlist" title="Add to favorites"><i class="bi bi-heart"></i></button></li>
        <li><button class="btn js-clipboard" title="Copy link"><i class="bi bi-clipboard"></i></button><input type="text"
            class="visually-hidden" value="https:{{ route('product', 'womens-shirt-top') }}" class="copy-input"></li>
        <li><button class="btn js-quickview" data-bs-toggle="modal" data-bs-target="#product{{ $product->id }}"
            title="Quick view"><i class="bi bi-eye"></i></button></li>
        <li><button class="btn js-cart" title="Add to cart"><i class="bi bi-bag"></i></button></li>
      </ul>
    </div>
    <div class="product-content">
      <h3 class="title"><a href="#">{{ $product->name }}</a></h3>
      <div class="price">${{ $product->price }}</div>
    </div>
  </div>
  <div class="text-center modal fade pe-0" data-id="{{ $product->id }}" id="product{{ $product->id }}"
    data-name="{{ $product->name }}" data-price="{{ $product->price }}"
    data-available="{{ $product->available }}" data-description="{{ $product->description }}"
    data-images="{{ $product->imagesComma() }}">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="row">
          <div class="col-lg-6 col-md-12 mb-3 mb-md-0">
            <div class="productImages h-100">
              <div id="productImg{{ $product->id }}" class="carousel slide h-100" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  @foreach ($product->imagesList() as $i => $image_url)
                    <button type="button" data-bs-target="#productImg{{ $product->id }}"
                      data-bs-slide-to="{{ $i }}" class="{{ $i == 0 ? 'active' : '' }}"
                      aria-current="{{ $i == 0 ? 'true' : 'false' }}"></button>
                  @endforeach

                </div>

                <div class="carousel-inner h-100">
                  @foreach ($product->imagesList() as $i => $image_url)
                    <div class="carousel-item h-100 {{ $i == 0 ? 'active' : '' }}">
                      <img src="{{ $image_url }}" class="d-block w-100 h-100" alt="Okay">
                    </div>
                  @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#productImg{{ $product->id }}"
                  data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#productImg{{ $product->id }}"
                  data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-12 text-center py-3" data-id="{{ $product->id }}"
            data-name="{{ $product->name }}" data-price="{{ $product->price }}"
            data-available="{{ $product->available }}" data-description="{{ $product->description }}"
            data-images="{{ $product->imagesComma() }}">
            <mark class="text-muted font-monospace">{{ $product->brand }}</mark>
            <h1>{{ $product->name }}</h1>
            <div>
              <div class="border-bottom border-primary fw-light fs-2 my-3 d-inline-block">${{ $product->price }}</div>
            </div>
            <div class="text-success">Quantity in Stock: {{ $product->available }}</div>
            <div class="my-5">
              <button {{ $product->available == 0 ? 'disabled' : '' }} type="button"
                class="js-cart btn-primary btn-lg btn text-uppercase mb-3" data-added="Added to cart"
                data-default="add to cart"> {{ $product->available == 0 ? 'Unavailable' : 'add to cart' }}add to
                cart</button>
              <button type="button" class="btn-outline-secondary btn-lg btn text-uppercase mb-3 js-wishlist"
                data-added="Added to favorites" data-default="Add to favorites">add to
                favorites</button>
            </div>
            <p>
              {{ $product->description }}
            </p>
            <div class="d-flex justify-content-center align-items-center">
              <a href="#" class="d-block text-decoration-none mx-2"><i class="bi bi-facebook fs-3"></i></a>
              <a href="#" class="d-block text-decoration-none mx-2"><i class="bi bi-instagram fs-3"></i></a>
              <a href="#" class="d-block text-decoration-none mx-2"><i class="bi bi-telegram fs-3"></i></a>
            </div>
            <div class="d-flex w-100 px-3 mt-3">
              <button type="button" class="btn btn-outline-primary w-50 me-2" data-bs-dismiss="modal">Close</button>
              <a href="{{ route('product', $product->id) }}" class="btn btn-primary w-50 ms-2">Read
                More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
