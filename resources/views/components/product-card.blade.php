<div class="product-item">
  <div class="product-image">
    <a href="{{ route('product', 'womens-shirt-top') }}" class="image">
      <img class="pic-1" src="https://picsum.photos/id/{{ $i + 1 }}/200/300">
      <img class="pic-2" src="https://picsum.photos/id/{{ $i + 10 }}/200/300">
    </a>
    <ul class="product-links" data-id="{{ $i + 1 }}" data-name="Women's Shirt Top" data-price="78.90"
      data-available="10"
      data-description="Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero facilis non culpa expedita debitis ipsam assumenda aut id nemo ab?"
      data-images="https://picsum.photos/id/237/300/300,https://picsum.photos/id/238/300/300,https://picsum.photos/id/239/300/300">
      <li><button class="btn js-wishlist" title="Add to favorites"><i class="bi bi-heart"></i></button></li>
      <li><button class="btn js-clipboard" title="Copy link"><i class="bi bi-clipboard"></i></button><input type="text"
          class="visually-hidden" value="https:{{ route('product', 'womens-shirt-top') }}" class="copy-input"></li>
      <li><button class="btn js-quickview" title="Quick view"><i class="bi bi-eye"></i></button></li>
      <li><button class="btn js-cart" title="Add to cart"><i class="bi bi-bag"></i></button></li>
    </ul>
  </div>
  <div class="product-content">
    <h3 class="title"><a href="#">Women's Shirt Top</a></h3>
    <div class="price">$78.90</div>
  </div>
</div>
