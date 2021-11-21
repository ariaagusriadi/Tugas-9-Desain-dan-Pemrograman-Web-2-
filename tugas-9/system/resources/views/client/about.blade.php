<!DOCTYPE html>
<html lang="en">

<head>
    <title>Aria Shop - About Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <link rel="stylesheet" href="{{ asset('/public/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/public/assets/css/templatemo.css') }}">
    <link rel="stylesheet" href="{{ asset('/public/assets/css/custom.css') }}">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="{{ asset('/public/assets/css/fontawesome.min.css') }}">
<!--
    
TemplateMo 559 Zay Shop

https://templatemo.com/tm-559-zay-shop

-->
</head>

<body>
    <!-- Start Top Nav -->
    @include('client.section.navbar')
    <!-- Close Header -->

    <!-- Modal -->
    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="get" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
                    <button type="submit" class="input-group-text bg-success text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>



    <section class="bg-success py-5">
        <div class="container">
            <div class="row align-items-center py-5">
                <div class="col-md-8 text-white">
                    <h1>About Us</h1>
                    <p>
                        Let's start the best shopping experience
                    </p>
                </div>
                <div class="col-md-4">
                    <img src="{{asset ('/public/assets/img/about-hero.svg') }}" alt="About Hero">
                </div>
            </div>
        </div>
    </section>
    <!-- Close Banner -->

    <!-- Start Section -->
    <section class="container py-5">
        <div class="row text-center pt-5 pb-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Our Services</h1>
                <p>
                 Lets go new experience
                </p>
            </div>
        </div>
        <div class="row">

            <div class="col-md-6 col-lg-3 pb-5">
                <div class="h-100 py-5 services-icon-wap shadow">
                    <div class="h1 text-success text-center"><i class="fa fa-truck fa-lg"></i></div>
                    <h2 class="h5 mt-4 text-center">Delivery Services</h2>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 pb-5">
                <div class="h-100 py-5 services-icon-wap shadow">
                    <div class="h1 text-success text-center"><i class="fas fa-exchange-alt"></i></div>
                    <h2 class="h5 mt-4 text-center">Shipping & Return</h2>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 pb-5">
                <div class="h-100 py-5 services-icon-wap shadow">
                    <div class="h1 text-success text-center"><i class="fa fa-percent"></i></div>
                    <h2 class="h5 mt-4 text-center">Promotion</h2>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 pb-5">
                <div class="h-100 py-5 services-icon-wap shadow">
                    <div class="h1 text-success text-center"><i class="fa fa-user"></i></div>
                    <h2 class="h5 mt-4 text-center">24 Hours Service</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- End Section -->

    <!-- Start Brands -->
    <section class="bg-light py-5">
      <div class="container my-4">
          <div class="row text-center py-3">
              <div class="col-lg-6 m-auto">
                  <h1 class="h1">Aria shop</h1>
                  <p>
                    towards a practical future
                  </p>
              </div>
              <div class="col-lg-9 m-auto tempaltemo-carousel">
                  <div class="row d-flex flex-row">
                      <!--Controls-->
                      <div class="col-1 align-self-center">
                          <a class="h1" href="#multi-item-example" role="button" data-bs-slide="prev">
                              <i class="text-light fas fa-chevron-left"></i>
                          </a>
                      </div>
                      <!--End Controls-->

                      <!--Carousel Wrapper-->
                      <div class="col">
                          <div class="carousel slide carousel-multi-item pt-2 pt-md-0" id="multi-item-example"
                              data-bs-ride="carousel">
                              <!--Slides-->
                              <div class="carousel-inner product-links-wap" role="listbox">

                                  <!--First slide-->
                                  <div class="carousel-item active">
                                      <div class="row">
                                          <div class="col-3 p-md-5">
                                              <a href="#"><img class="img-fluid brand-img"
                                                      src="{{asset ('/public/assets/img/brand_01.png') }}" alt="Brand Logo"></a>
                                          </div>
                                          <div class="col-3 p-md-5">
                                              <a href="#"><img class="img-fluid brand-img"
                                                      src="{{asset ('/public/assets/img/brand_02.png') }}" alt="Brand Logo"></a>
                                          </div>
                                          <div class="col-3 p-md-5">
                                              <a href="#"><img class="img-fluid brand-img"
                                                      src="{{asset('/public/assets/img/brand_03.png') }}" alt="Brand Logo"></a>
                                          </div>
                                          <div class="col-3 p-md-5">
                                              <a href="#"><img class="img-fluid brand-img"
                                                      src="{{asset ('/public/assets/img/brand_04.png') }}" alt="Brand Logo"></a>
                                          </div>
                                      </div>
                                  </div>
                                  <!--End First slide-->

                                  <!--Second slide-->
                                  <div class="carousel-item">
                                      <div class="row">
                                          <div class="col-3 p-md-5">
                                              <a href="#"><img class="img-fluid brand-img"
                                                      src="{{asset ('/public/assets/img/brand_01.png') }}" alt="Brand Logo"></a>
                                          </div>
                                          <div class="col-3 p-md-5">
                                              <a href="#"><img class="img-fluid brand-img"
                                                      src="{{asset ('/public/assets/img/brand_02.png') }}" alt="Brand Logo"></a>
                                          </div>
                                          <div class="col-3 p-md-5">
                                              <a href="#"><img class="img-fluid brand-img"
                                                      src="{{asset('/public/assets/img/brand_03.png') }}" alt="Brand Logo"></a>
                                          </div>
                                          <div class="col-3 p-md-5">
                                              <a href="#"><img class="img-fluid brand-img"
                                                      src="{{asset ('/public/assets/img/brand_04.png') }}" alt="Brand Logo"></a>
                                          </div>
                                      </div>
                                  </div>
                                  <!--End Second slide-->

                                  <!--Third slide-->
                                  <div class="carousel-item">
                                      <div class="row">
                                          <div class="col-3 p-md-5">
                                              <a href="#"><img class="img-fluid brand-img"
                                                      src="{{asset ('/public/assets/img/brand_01.png') }}" alt="Brand Logo"></a>
                                          </div>
                                          <div class="col-3 p-md-5">
                                              <a href="#"><img class="img-fluid brand-img"
                                                      src="{{asset ('/public/assets/img/brand_02.png') }}" alt="Brand Logo"></a>
                                          </div>
                                          <div class="col-3 p-md-5">
                                              <a href="#"><img class="img-fluid brand-img"
                                                      src="{{asset('/public/assets/img/brand_03.png') }}" alt="Brand Logo"></a>
                                          </div>
                                          <div class="col-3 p-md-5">
                                              <a href="#"><img class="img-fluid brand-img"
                                                      src="{{asset ('/public/assets/img/brand_04.png') }}" alt="Brand Logo"></a>
                                          </div>
                                      </div>
                                  </div>
                                  <!--End Third slide-->

                              </div>
                              <!--End Slides-->
                          </div>
                      </div>
                      <!--End Carousel Wrapper-->

                      <!--Controls-->
                      <div class="col-1 align-self-center">
                          <a class="h1" href="#multi-item-example" role="button" data-bs-slide="next">
                              <i class="text-light fas fa-chevron-right"></i>
                          </a>
                      </div>
                      <!--End Controls-->
                  </div>
              </div>
          </div>
      </div>
  </section>
    <!--End Brands-->


    <!-- Start Footer -->
  @include('client.section.footer')
    <!-- End Footer -->

    <!-- Start Script -->
    <script src="{{ asset('/public/assets/js/jquery-1.11.0.min.js') }}"></script>
    <script src="{{ asset('/public/assets/js/jquery-migrate-1.2.1.min.js') }}"></script>
    <script src="{{ asset('/public/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('/public/assets/js/templatemo.js') }}"></script>
    <script src="{{ asset('/public/assets/js/custom.js') }}"></script>
    <!-- End Script -->
</body>

</html>