<nav id="main-header"
  class="navbar navbar-expand-lg flex-column navbar-light shadow-sm position-fixed top-0 start-0 w-100 z-index-9 bg-white">
  <div class="container-fluid">
    <a class="navbar-brand me-5" href="/">
      <img src="{{ asset('img/logo.png') }}" height="50" alt="logo">
    </a>
    <button class="navbar-toggler shadow-sm btn-light" type="button" data-bs-toggle="collapse"
      data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
      aria-label="Toggle navigation">
      <i class="bi bi-list"></i>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 text-center text-lg-start">
        <li class="nav-item dropdown">
          <a class="nav-link active" href="/">
            HOME
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/shop">SHOP</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/about">ABOUT US</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/contact">CONTACTS</a>
        </li>
      </ul>
      <div class="btn-group w-100 w-lg-auto">
        <button type="button" class="btn shadow-sm btn-light" data-bs-toggle="offcanvas" data-bs-target="#wishlist">
          <i class="bi bi-heart" data-bs-toggle="offcanvas" data-bs-target="#wishlist"></i>
          <span class="badge rounded-pill bg-primary" data-bs-toggle="offcanvas" data-bs-target="#wishlist">10</span>
        </button>
        <button type="button" class="btn shadow-sm btn-light" data-bs-toggle="offcanvas" data-bs-target="#cartlist">
          <i class="bi bi-cart" data-bs-toggle="offcanvas" data-bs-target="#cartlist"></i>
          <span class="badge rounded-pill bg-primary" data-bs-toggle="offcanvas" data-bs-target="#cartlist">5</span>
        </button>
        <button type="button" data-bs-target="#auth-modal" data-bs-toggle="modal" class="btn shadow-sm btn-light">
          <i class="bi bi-person-circle"></i>
        </button>
        <button type="button" class="btn shadow-sm btn-light" data-bs-toggle="collapse" data-bs-target="#searchbar">
          <i class="bi bi-search"></i>
        </button>
      </div>
    </div>
  </div>
  <div class="p-2 bg-white shadow-sm collapse w-100" id="searchbar">
    <form action="{{ route('search') }}" class="d-flex">
      <input class="form-control me-2" type="search" placeholder="Search" name="search" aria-label="Search">
      <button class="btn btn-outline-primary" type="submit">Search</button>
    </form>
  </div>
</nav>

<div class="offcanvas offcanvas-end cartlist" id="cartlist">
  <div class="offcanvas-header">
    <h5 id="offcanvasRightLabel" class="mb-0">YOUR CART</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <div class="bg-white h-100 d-grid wishlist-wrapper">
      <ul class="list-group list-group-flush overflow-auto custom-scrollbar">

      </ul>
      <div class="d-flex mb-2 justify-content-between align-items-center border-top border-bottom py-2">
        <p class="fs-5 mb-0">TOTAL</p>
        <p class="fs-6 mb-0 js-cart-total">0</p>
      </div>
      <a href="/checkout" class="btn btn-lg btn-primary w-100">CHECKOUT</a>
    </div>
  </div>
</div>

<div class="offcanvas offcanvas-end" id="wishlist">
  <div class="offcanvas-header">
    <h5 id="offcanvasRightLabel" class="mb-0">YOUR WISHLIST</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <div class="bg-white">
      <ul class="list-group list-group-flush">

      </ul>

    </div>
  </div>
</div>
@include("modals.authModal")
