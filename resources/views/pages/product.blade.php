@extends('layouts.index')

@section('content')
  <div class="pt-4">
    <div class="container">
      <div class="row my-5">
        <div class="col-lg-6 col-md-12 mb-3 mb-md-0">
          <div class="productImages">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                  aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                  aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                  aria-label="Slide 3"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="https://picsum.photos/300/300" class="d-block w-100" alt="Okay">
                </div>
                <div class="carousel-item">
                  <img src="https://picsum.photos/300/300" class="d-block w-100" alt="Okay">
                </div>
                <div class="carousel-item">
                  <img src="https://picsum.photos/300/300" class="d-block w-100" alt="Okay">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 text-center">
          <mark class="text-muted font-monospace">Adidas</mark>
          <h1>Dress</h1>
          <div>
            <div class="border-bottom border-primary fw-light fs-2 my-3 d-inline-block">$139.99</div>
          </div>
          <button class="btn-primary btn-lg btn text-uppercase my-5">add to cart</button>
          <button class="btn-outline-secondary btn-lg btn text-uppercase my-5">add to favorites</button>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam obcaecati ea nisi alias, est blanditiis qui
            officia sit doloribus culpa, amet aliquid odit? Velit quia quaerat nisi minima. Illo ad dolor quasi maxime
            aliquam dolores non autem, explicabo quae fugiat veniam! Quae exercitationem ut itaque optio nostrum
            cupiditate consectetur ducimus?
          </p>
          <div class="d-flex justify-content-center align-items-center">
            <a href="#" class="d-block text-decoration-none mx-2"><i class="bi bi-facebook fs-3"></i></a>
            <a href="#" class="d-block text-decoration-none mx-2"><i class="bi bi-instagram fs-3"></i></a>
            <a href="#" class="d-block text-decoration-none mx-2"><i class="bi bi-telegram fs-3"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
