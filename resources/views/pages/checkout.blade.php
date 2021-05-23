@extends('layouts.index')

@section('content')

  <x-section title="Check out">

    <div class="container">
      <div class="row">
        <form class="col-lg-6 col-md-12">
          <div class="row">
            <div class="col-md-6 col-sm-12 mb-3">
              <label for="lastname" class="form-label">Surname *</label>
              <input required="" type="text" name="lastname" class="form-control" id="lastname"
                placeholder="Enter your details">
            </div>
            <div class="col-md-6 col-sm-12 mb-3">
              <label for="firstname" class="form-label">Name *</label>
              <input required="" type="text" name="firstname" class="form-control" id="firstname"
                placeholder="Enter your details">
            </div>
            <div class="col-md-6 col-sm-12 mb-3">
              <label for="phone" class="form-label">Phone number *</label>
              <input required="" type="text" name="phone" class="form-control" id="phone"
                placeholder="Enter your phone number">
            </div>
            <div class="col-md-6 col-sm-12 mb-3">
              <label for="email" class="form-label">Email *</label>
              <input required="" type="email" name="email" class="form-control" id="email" placeholder="Enter Email">
            </div>
            <div class="col-md-12 mb-4">
              <label for="message" class="form-label">Address</label>
              <textarea required="" class="form-control" name="message" id="message" rows="3"
                placeholder="Enter your address"></textarea>
            </div>
            <div class="col-md-12 d-flex align-items-start justify-content-between">
              <p class="fs-12">
                * Fields marked with an asterisk are required
              </p>
              <button type="submit" class="btn px-5 btn-primary text-uppercase">
                submit
              </button>
            </div>
          </div>
        </form>
        <div class="col-lg-6 col-md-12">
        <ul class="list-group list-group-flush overflow-auto custom-scrollbar">
        You don't have any products to checkout.
      </ul>
        </div>
      </div>
    </div>

  </x-section>
@endsection
