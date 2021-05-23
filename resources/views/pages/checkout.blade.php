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
              <label for="message" class="form-label">Message</label>
              <textarea required="" class="form-control" name="message" id="message" rows="3"
                placeholder="Enter your message"></textarea>
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
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2995.635950872645!2d69.33234131492553!3d41.33852900698644!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38aef48a8ed4d0e9%3A0x3772abeffc72e7b8!2sToshkent%20shahridagi%20Inha%20universiteti!5e0!3m2!1suz!2s!4v1621697734791!5m2!1suz!2s"
            width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
      </div>
    </div>

  </x-section>
@endsection
