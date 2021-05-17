<nav class="navbar navbar-expand-lg navbar-light shadow-sm">
  <div class="container-fluid">
    <a class="navbar-brand me-5" href="#">
      <img src="img/logo.png" height="50" alt="logo">
    </a>
    <button class="navbar-toggler shadow-sm btn-light" type="button" data-bs-toggle="collapse"
      data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
      aria-label="Toggle navigation">
      <i class="bi bi-list"></i>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link active" href="/">
            HOME
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">SHOP</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">ABOUT US</a>
        </li>
      </ul>
      <div class="btn-group">
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
</nav>
<div class="p-3 bg-white shadow-sm collapse" id="searchbar">
  <form class="d-flex">
    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-primary" type="submit">Search</button>
  </form>
</div>
<div class="offcanvas offcanvas-end" id="cartlist">
  <div class="offcanvas-header">
    <h5 id="offcanvasRightLabel" class="mb-0">YOUR CART</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <div class="bg-white h-100 d-grid">
      <ul class="list-group list-group-flush overflow-auto custom-scrollbar">
        @for ($i = 0; $i < 20; $i++)
          <li class="list-group-item position-relative">
            <button type="button"
              class="button-small rounded-circle shadow-sm position-absolute top-1 end-0 btn btn-danger btn-sm">
              <i class="bi bi-trash"></i>
            </button>
            <div class="d-flex">
              <div class="flex-shrink-0">
                <img src="https://picsum.photos/id/{{ $i }}/200/300" alt="..."
                  class="img-thumbnail square-75">
              </div>
              <div class="flex-grow-1 ms-3">
                <a href="/product/ad" class="mb-4 text-one-line h6 d-block">"Charge" Athletic Shorts</a>
                <div class="d-flex align-items-center justify-content-between">
                  <div class="btn-group btn-group-sm">
                    <button type="button" class="btn btn-outline-primary py-0">-</button>
                    <span class="btn btn-outline-primary py-0">5</span>
                    <button type="button" class="btn btn-outline-primary py-0">+</button>
                  </div>
                  <p class="fs-6 mb-0 text-muted">$20</p>
                </div>
              </div>
            </div>
          </li>
        @endfor
      </ul>
      <div class="d-flex mb-2 justify-content-between align-items-center border-top border-bottom py-2">
        <p class="fs-5 mb-0">SUBTOTAL</p>
        <p class="fs-6 mb-0">$500</p>
      </div>
      <button class="btn btn-lg btn-primary w-100">CHECKOUT</button>
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
        @for ($i = 0; $i < 20; $i++)
          <li class="list-group-item position-relative">
            <button type="button"
              class="button-small rounded-circle shadow-sm position-absolute top-1 end-0 btn btn-danger btn-sm">
              <i class="bi bi-trash"></i>
            </button>
            <div class="d-flex">
              <div class="flex-shrink-0">
                <img src="https://picsum.photos/id/{{ $i }}/200/300" alt="..."
                  class="img-thumbnail square-75">
              </div>
              <div class="flex-grow-1 ms-3">
                <a href="/product/ad" class="mb-4 text-one-line h6 d-block">"Charge" Athletic Shorts</a>
                <div class="d-flex align-items-center justify-content-between">
                  <p class="fs-6 mb-0 text-muted">$20</p>
                </div>
              </div>
            </div>
          </li>
        @endfor
      </ul>

    </div>
  </div>
</div>
@include("modals.authModal")



