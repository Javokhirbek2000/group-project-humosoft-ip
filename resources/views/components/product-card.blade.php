<div class="product-item">
  <div class="product-image">
    <a href="{{ route('product', 'womens-shirt-top') }}" class="image">
      <img class="pic-1" src="https://picsum.photos/id/{{ $i + 1 }}/200/300">
      <img class="pic-2" src="https://picsum.photos/id/{{ $i + 10 }}/200/300">
    </a>
    <ul class="product-links">
      <li><button class="btn" title="Add to favorites" href="#"><i class="bi bi-heart"></i></button></li>
      <li><button class="btn" title="Copy link" href="#"><i class="bi bi-clipboard"></i></button></li>
      <li><button class="btn" title="Quick view" href="#"><i class="bi bi-eye"></i></button></li>
      <li><button class="btn" title="Add to cart" href="#"><i class="bi bi-bag"></i></button></li>
    </ul>
  </div>
  <div class="product-content">
    <h3 class="title"><a href="#">Women's Shirt Top</a></h3>
    <div class="price">$78.90</div>
  </div>
</div>
