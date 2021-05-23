@extends('layouts.index')

@section('content')

  <x-section title="About Us">
    <div class="container">
      <div class="row">
        <div class="col-md-4 mb-4 mb-md-0">
          <div class="card mb-3 border-0 text-center rounded-0">
            <img class="img-fluid mb-3" src="img/elegent.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="font-size-18 mb-3">What we really do?</h5>
              <p class="mx-auto"> We develop an easy to use web based interface where users can search for
products, view a complete description of the products and order the products</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4 mb-md-0">
          <div class="card mb-3 border-0 text-center rounded-0">
            <img class="img-fluid mb-3" src="img/vision.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="font-size-18 mb-3">Our Vision</h5>
              <p class="mx-auto">The motive of this Online Shopping Web Application is to allow the user to play
with the search tool and create different combinatorial search criterion to perform
exhaustive search and provide Interactive interface through which a user can interact with different areas
of application easily</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-3 border-0 text-center rounded-0">
            <img class="img-fluid mb-3" src="/img/history.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="font-size-18 mb-3">History of Beginning</h5>
              <p class="mx-auto">We see the problem that people need online shopping because it is more convinent than traditonal one.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    </div>
    <div class="py-12 mb-5 mb-lg-15">
      <div class="container">
        <div class="row">
          <div class="col-md-4 mb-5 mb-xl-0 col-xl-3 col-sm-6 text-center team-member">
            <img width="200" height="200" class="img-fluid mb-3 rounded-circle" src="img/Future.jpg" alt="Card image cap">
            <h2 class="fs-4 mb-0">Azizbek Urmonov</h2>
            <span class="text-gray-41">Web Developer</span>
          </div>
          <div class="col-md-4 mb-5 mb-xl-0 col-xl-3 col-sm-6 text-center team-member">
            <img width="200" height="200" class="img-fluid mb-3 rounded-circle" src="img/shahzod.jpg"
              alt="Card image cap">
            <h2 class="fs-4 mb-0">Shakhzod Mavlonov</h2>
            <span class="text-gray-41">Web Developer</span>
          </div>
          <div class="col-md-4 mb-5 mb-xl-0 col-xl-3 col-sm-6 text-center team-member">
            <img class="img-fluid mb-3 rounded-circle" src="img/matrix.jpg" alt="Card image cap">
            <h2 class="fs-4 mb-0">Khalimetov Mukhiddin</h2>
            <span class="text-gray-41">Web Developer</span>
          </div>
          <div class="col-md-4 mb-5 mb-xl-0 col-xl-3 col-sm-6 text-center team-member">
            <img class="img-fluid mb-3 rounded-circle" src="img/shohruh.jpg" alt="Card image cap">
            <h2 class="fs-4 mb-0">Gulomov Shokhrukhmirzo</h2>
            <span class="text-gray-41">Web Developer</span>
          </div>
          <div class="col-md-4 mb-5 mb-xl-0 col-xl-3 col-sm-6 text-center team-member">
            <img class="img-fluid mb-3 rounded-circle" src="img/jack.jpg" alt="Card image cap">
            <h2 class="fs-4 mb-0">Mirzaakbarov Javokhirbek</h2>
            <span class="text-gray-41">Full Stack Web Developer</span>
          </div>
          <div class="col-md-4 mb-5 mb-xl-0 col-xl-3 col-sm-6 text-center team-member">
            <img class="img-fluid mb-3 rounded-circle" src="img/komiljon.jpg" alt="Card image cap">
            <h2 class="fs-4 mb-0">Yangiboev Komiljon</h2>
            <span class="text-gray-41">Python Developer</span>
          </div>
        </div>
      </div>
    </div>
    </div>
    <div class="container mb-8 mb-lg-0">
      <div class="row mb-8">
        <div class="col-lg-7">
          <div class="row">
            <div class="col-lg-6 mb-5 mb-lg-8">
              <h3 class="font-size-18 text-gray-39 mb-4">What we really do?</h3>
              <p>We develop an easy to use web based interface where users can search for
products, view a complete description of the products and order the product</p>
            </div>
            <div class="col-lg-6 mb-5 mb-lg-8">
              <h3 class="font-size-18 text-gray-39 mb-4">Our Vision</h3>
              <p>The motive of this Online Shopping Web Application is to allow the user to play
with the search tool and create different combinatorial search criterion to perform
exhaustive search and provide Interactive interface through which a user can interact with different areas
of application easily</p>
            </div>
            <div class="col-lg-6 mb-5 mb-lg-8">
              <h3 class="font-size-18 text-gray-39 mb-4">History of the Company</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum autem repellendus ipsa. At maxime, velit
                amet, ex deleniti commodi a officiis nobis ullam sint tempore unde! Veritatis quos enim repellendus!</p>
            </div>
            <div class="col-lg-6 mb-5 mb-lg-8">
              <h3 class="font-size-18 text-gray-39 mb-4">Cooperate with Us!</h3>
              <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestiae, atque. Eum, harum necessitatibus.
                Recusandae deserunt nemo suscipit quidem! Minus, exercitationem beatae. Id quisquam voluptatem excepturi
                cupiditate nihil dolores perspiciatis obcaecati?</p>
            </div>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="ml-lg-8">
            <h3 class="font-size-18 text-gray-39 mb-4">What can we do for you ?</h3>

            <div id="basicsAccordion1" class="about-accordion">

              <div class="card mb-4 border-color-4 rounded-0">
                <div class="card-header card-collapse border-color-4" id="basicsHeadingOne">
                  <h5 class="mb-0">
                    <button type="button" class="btn btn-link btn-block flex-horizontal-center card-btn p-0 font-size-18"
                      data-bs-toggle="collapse" data-bs-target="#basicsCollapseOnee" aria-expanded="true"
                      aria-controls="basicsCollapseOnee">
                      <span class="border border-color-5 rounded font-size-12 mr-5">
                        <i class="fas fa-plus"></i>
                        <i class="fas fa-minus"></i>
                      </span>
                      Support 24/7
                    </button>
                  </h5>
                </div>
                <div id="basicsCollapseOnee" class="collapse show" aria-labelledby="basicsHeadingOne"
                  data-parent="#basicsAccordion1">
                  <div class="card-body">
                    <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi labore eum porro quam
                      necessitatibus corrupti hic beatae! In deserunt hic tenetur exercitationem, illo consectetur
                      doloremque vel ad porro dignissimos facere?</p>
                  </div>
                </div>
              </div>
              <div class="card mb-4 border-color-4 rounded-0">
                <div class="card-header card-collapse border-color-4" id="basicsHeadingTwo">
                  <h5 class="mb-0">
                    <button type="button" class="btn btn-link btn-block flex-horizontal-center card-btn p-0 font-size-18"
                      data-bs-toggle="collapse" data-bs-target="#basicsCollapseTwo" aria-expanded="false"
                      aria-controls="basicsCollapseTwo">
                      <span class="border border-color-5 rounded font-size-12 mr-5">
                        <i class="fas fa-plus"></i>
                        <i class="fas fa-minus"></i>
                      </span>
                      Best Quality
                    </button>
                  </h5>
                </div>
                <div id="basicsCollapseTwo" class="collapse" aria-labelledby="basicsHeadingTwo"
                  data-parent="#basicsAccordion1">
                  <div class="card-body">
                    <p class="mb-0">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum perspiciatis numquam
                      voluptatibus vero labore, dolores nam? Vitae ea culpa corrupti id, aliquam sed temporibus officiis
                      libero ex voluptate nostrum doloremque.</p>
                  </div>
                </div>
              </div>

              <div class="card mb-4 border-color-4 rounded-0">
                <div class="card-header card-collapse border-color-4" id="basicsHeadingThree">
                  <h5 class="mb-0">
                    <button type="button" class="btn btn-link btn-block flex-horizontal-center card-btn p-0 font-size-18"
                      data-bs-toggle="collapse" data-bs-target="#basicsCollapseThree" aria-expanded="false"
                      aria-controls="basicsCollapseThree">
                      <span class="border border-color-5 rounded font-size-12 mr-5">
                        <i class="fas fa-plus"></i>
                        <i class="fas fa-minus"></i>
                      </span>
                      Fastest Delivery
                    </button>
                  </h5>
                </div>
                <div id="basicsCollapseThree" class="collapse" aria-labelledby="basicsHeadingThree"
                  data-parent="#basicsAccordion1">
                  <div class="card-body">
                    <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem hic, assumenda modi
                      blanditiis aliquam officia ipsa cumque. Perferendis iusto voluptatibus mollitia tempore repellat
                      numquam nostrum architecto quibusdam atque. Error, veritatis.</p>
                  </div>
                </div>
              </div>

              <div class="card mb-4 border-color-4 rounded-0">
                <div class="card-header card-collapse border-color-4" id="basicsHeadingFour">
                  <h5 class="mb-0">
                    <button type="button" class="btn btn-link btn-block flex-horizontal-center card-btn p-0 font-size-18"
                      data-bs-toggle="collapse" data-bs-target="#basicsCollapseFour" aria-expanded="false"
                      aria-controls="basicsCollapseFour">
                      <span class="border border-color-5 rounded font-size-12 mr-5">
                        <i class="fas fa-plus"></i>
                        <i class="fas fa-minus"></i>
                      </span>
                      Customer Care
                    </button>
                  </h5>
                </div>
                <div id="basicsCollapseFour" class="collapse" aria-labelledby="basicsHeadingFour"
                  data-parent="#basicsAccordion1">
                  <div class="card-body">
                    <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure laudantium esse
                      recusandae ullam architecto similique tempore ad aspernatur officiis quae unde dolorum tempora sequi
                      et nobis, quasi, earum vel. Quas.</p>
                  </div>
                </div>
              </div>

              <div class="card mb-4 border-color-4 rounded-0">
                <div class="card-header card-collapse border-color-4" id="basicsHeadingFive">
                  <h5 class="mb-0">
                    <button type="button" class="btn btn-link btn-block flex-horizontal-center card-btn p-0 font-size-18"
                      data-bs-toggle="collapse" data-bs-target="#basicsCollapseFive" aria-expanded="false"
                      aria-controls="basicsCollapseFive">
                      <span class="border border-color-5 rounded font-size-12 mr-5">
                        <i class="fas fa-plus"></i>
                        <i class="fas fa-minus"></i>
                      </span>
                      Over 200 Satisfied Customers
                    </button>
                  </h5>
                </div>
                <div id="basicsCollapseFive" class="collapse" aria-labelledby="basicsHeadingFive"
                  data-parent="#basicsAccordion1">
                  <div class="card-body">
                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium, alias, laborum
                      dolor eligendi excepturi enim modi unde sit cum est fuga sequi tenetur quibusdam vitae earum quidem,
                      nulla harum? Nostrum!</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End Card -->
      </div>
      <!-- End Basics Accordion -->
    </div>
    </div>
    </div>
    </div>
  </x-section>
@endsection
