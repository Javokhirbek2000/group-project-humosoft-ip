<div id="bannerSlider" class="carousel slide banner-slider " data-bs-ride="carousel">
  <div class="carousel-indicators">
    @foreach (App\Models\Banner::all() as $i => $banner)
      <button type="button" data-bs-target="#bannerSlider" data-bs-slide-to="{{ $i }}"
        class="{{ $i == 0 ? 'active' : '' }}" aria-current="{{ $i == 0 }}"
        aria-label="{{ $banner->name }}"></button>
    @endforeach

  </div>
  <div class="carousel-inner">
    @foreach (App\Models\Banner::all() as $i => $banner)
      <div class="carousel-item  {{ $i == 0 ? 'active' : '' }}  ">

        <div class="img-mask h-80vh"></div>
        <img src="https://picsum.photos/id/{{ $i }}/1200/500" class="d-block w-100 h-80vh object-fit-cover"
          alt="...">

        <div class="carousel-caption d-block z-index-2 top-50 start-50 translate-middle w-75">
          <h4 class="text-uppercase">{{ $banner->name }}</h4>
          <h1 class="text-uppercase mb-5">{{ $banner->description }}</h1>
          <a href="{{ $banner->url }}" class="btn btn-outline-light">SHOP NOW</a>
        </div>
      </div>
    @endforeach
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#bannerSlider" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#bannerSlider" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
