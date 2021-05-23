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
        <li><button class="btn js-quickview" title="Quick view"><i class="bi bi-eye"></i></button></li>
        <li><button class="btn js-cart" title="Add to cart"><i class="bi bi-bag"></i></button></li>
      </ul>
    </div>
    <div class="product-content">
      <h3 class="title"><a href="#">{{ $product->name }}</a></h3>
      <div class="price">${{ $product->price }}</div>
    </div>
  </div>
