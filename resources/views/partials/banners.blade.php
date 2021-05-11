<div id="bannerSlider" class="carousel slide banner-slider " data-bs-ride="carousel">
  <div class="carousel-indicators">
    @for ($i = 0; $i < 5; $i++)
      <button type="button" data-bs-target="#bannerSlider" data-bs-slide-to="{{ $i }}"
        class="{{ $i == 0 ? 'active' : '' }}" aria-current="{{ $i == 0 }}"
        aria-label="Slide {{ $i + 1 }}"></button>
    @endfor

  </div>
  <div class="carousel-inner">
    @for ($i = 0; $i < 5; $i++)
      <div class="carousel-item  {{ $i == 0 ? 'active' : '' }}  ">

        <div class="img-mask h-80vh"></div>
        <img src="https://picsum.photos/id/{{ $i }}/1200/500" class="d-block w-100 h-80vh object-fit-cover"
          alt="...">

        <div class="carousel-caption d-block z-index-2 top-50 start-50 translate-middle w-75">
          <h4 class="text-uppercase">FOR OVER 10 YEARS{{ $i + 1 }}</h4>
          <h1 class="text-uppercase mb-5">WEAVING RELATIONSHIPS ONE THREAD AT A TIME
            {{ $i + 1 }}</h1>
          <a href="#" class="btn btn-outline-light">SHOP NOW</a>
        </div>
      </div>
    @endfor
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
