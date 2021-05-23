@extends('layouts.index')

@section('content')
  <x-section title="Profile">
    <div class="container">
      <div class="my-5">
        <ul class="nav nav-tabs d-flex" id="myTab" role="tablist">
          <li class="nav-item w-50" role="presentation">
            <button class="nav-link active w-100 text-uppercase fw-bold" id="my-data-tab" data-bs-toggle="tab"
              data-bs-target="#my-data" type="button" role="tab" aria-controls="home"
              aria-selected="true">Account</button>
          </li>
          <li class="nav-item w-50" role="presentation">
            <button class="nav-link w-100 text-uppercase fw-bold" id="order-history-tab" data-bs-toggle="tab"
              data-bs-target="#order-history" type="button" role="tab" aria-controls="profile" aria-selected="false">Order
              history</button>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="my-data" role="tabpanel" aria-labelledby="my-data-tab">
            <div class="py-3">
              <form>
                <div class="input-section mb-3">
                  <h3 class="text-uppercase h3">My data</h3>
                  <div class="row align-items-end">
                    <div class="col-sm-4">
                      <div class="form-group"><label class="form-label">Your name (SHAHZOD)</label><input name="name"
                          autocomplete="given-name" type="text" required class="form-control" placeholder="Your name"
                          aria-label="Your name" value="SHAHZOD">
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group"><label class="form-label">Your surname (MAVLONOV)</label><input name="name"
                          autocomplete="family-name" type="text" required class="form-control" placeholder="Your Surname"
                          aria-label="Your Surname" value="MAVLONOV">
                      </div>
                    </div>
                    <div class="col-sm-4"><button type="submit" class="btn btn-secondary px-5">Save</button>
                    </div>
                  </div>
                </div>
              </form>
              <form>
                <div class="input-section mb-3">
                  <h3 class="text-uppercase h3">My password</h3>
                  <div class="row align-items-end">
                    <div class="col-sm-3">
                      <div class="form-group">
                        <div class="input-group"><input name="password" autocomplete="current-password" type="password"
                            required class="form-control" placeholder="Current password" aria-label="Current password">

                        </div>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group   ">
                        <div class="input-group"><input name="newPassword" autocomplete="new-password" type="password"
                            required class="form-control" placeholder="New password" aria-label="New password">

                        </div>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <div class="input-group"><input name="repeatedNewPassword" autocomplete="new-password"
                            type="password" required class="form-control" placeholder="Repeat new password"
                            aria-label="Repeat new password">

                        </div>
                      </div>
                    </div>
                    <div class="col-sm-3"><button type="submit" class="btn btn-secondary px-5">Save</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="tab-pane fade" id="order-history" role="tabpanel" aria-labelledby="order-history-tab">
            <div class="py-3">
              <div class="table-responsive">
                <table class="table table-hover orders-history">
                  <thead>
                    <tr>
                      <th scope="col">Index Number</th>
                      <th scope="col">Products Ordered</th>
                      <th scope="col">Date of Order</th>
                      <th scope="col">Price</th>
                      <th scope="col">Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    @for ($i = 0; $i < 5; $i++)
                      <tr role="button" data-bs-toggle="collapse" data-bs-target="#order{{ $i }}"
                        class="cursor-pointer-on">
                        <th scope="row">152</th>
                        <td class="products-ordered"><a class="mx-0dot5" href="/product/UHJvZHVjdDoxNzQ="><img
                              src="http://api.smartmir.uz/media/__sized__/products/uniheadphone-300x300-thumbnail-255x255.png"></a><a
                            class="mx-0dot5" href="/product/UHJvZHVjdDoxNzM="><img
                              src="http://api.smartmir.uz/media/__sized__/products/headphonecase-300x300-thumbnail-255x255.png"></a><a
                            class="mx-0dot5" href="/product/UHJvZHVjdDoxNzU="><img
                              src="http://api.smartmir.uz/media/__sized__/products/1_pk5Ef8g-thumbnail-255x255.png"></a>
                        </td>
                        <td>23.05.2021</td>
                        <td>5649800</td>
                        <td>Unfulfilled</td>
                      </tr>
                      <tr id="order{{ $i }}" class="collapse">
                        <td colspan="5" class="p-0 border-top-0">
                          <table class="table table-sm orders-details table-info table-hover mb-0 border-top-0">
                            <thead>
                              <tr>
                                <th scope="col">Products</th>
                                <th scope="col">Price</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">SubTotal</th>
                                <th scope="col">Total</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td><a href="/product/UHJvZHVjdDoxNzQ="><img
                                      src="http://api.smartmir.uz/media/__sized__/products/uniheadphone-300x300-thumbnail-255x255.png"
                                      class="mr-2" alt=""><span>White Solo 2 Wireless</span></a></td>
                                <td>2098800</td>
                                <td>1</td>
                                <td>2098800</td>
                                <td rowspan="3">5649800</td>
                              </tr>
                              <tr class="orders-details">
                                <td><a href="/product/UHJvZHVjdDoxNzM="><img
                                      src="http://api.smartmir.uz/media/__sized__/products/headphonecase-300x300-thumbnail-255x255.png"
                                      class="mr-2" alt=""><span>Universal Headphones Case in Black</span></a></td>
                                <td>1685400</td>
                                <td>1</td>
                                <td>1685400</td>
                              </tr>
                              <tr class="orders-details">
                                <td><a href="/product/UHJvZHVjdDoxNzU="><img
                                      src="http://api.smartmir.uz/media/__sized__/products/1_pk5Ef8g-thumbnail-255x255.png"
                                      class="mr-2" alt=""><span>Ultra Wireless S50 Headphones S50 with Bluetooth
                                    </span></a>
                                </td>
                                <td>1865600</td>
                                <td>1</td>
                                <td>1865600</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                      </tr>
                    @endfor
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </x-section>
@endsection
