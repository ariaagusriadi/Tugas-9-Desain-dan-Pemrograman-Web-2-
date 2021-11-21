<!DOCTYPE html>
<html lang="en">

<head>
    <title>Aria Shop - Product Detail Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <link rel="stylesheet" href="{{ asset('/public/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/public/assets/css/templatemo.css') }}">
    <link rel="stylesheet" href="{{ asset('/public/assets/css/custom.css') }}">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="{{ asset('/public/assets/css/fontawesome.min.css') }}">

    <!-- Slick -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/public/assets/css/slick.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/public/assets/css/slick-theme.css') }}">
    <!--
    


-->
</head>

<body>
    <!-- Start Top Nav -->
    @include('client.section.navbar')
    <!-- Close Header -->

    <!-- Modal -->
    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
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



    <!-- Open Content -->
    <section class="bg-light">
        <div class="container pb-5">
            <div class="row">
                <div class="col-lg-5 mt-5">
                    <div class="card mb-3">
                        <img class="card-img img-fluid" src="{{ asset('/public/assets/img/shop_01.jpg') }}"
                            alt="Card image cap" id="product-detail">
                    </div>
                    <div class="row">
                        <!--Start Controls-->
                        <div class="col-1 align-self-center">
                            <a href="#multi-item-example" role="button" data-bs-slide="prev">
                                <i class="text-dark fas fa-chevron-left"></i>
                                <span class="sr-only">Previous</span>
                            </a>
                        </div>
                        <!--End Controls-->
                        <!--Start Carousel Wrapper-->


                        <!--End Controls-->
                    </div>
                </div>
                <!-- col end -->
                <div class="col-lg-7 mt-5">
                    <div class="card">

                        
                        <div class="card-body">
                            <h1 class="h2">{{ $produk->nama }}</h1>
                            <p class="h3 py-2">Rp.{{ number_format($produk->harga )}}</p>
                           
                            
                            <h6>Description:</h6>
                            <p>{{ $produk->deskripsi }}
                                <h6> seller : {{ $produk->seller->username }}</h6>
                            </p>
                            <ul class="list-inline">
                               
                                <li class="list-inline-item">
                                    <h6>Avaliable stok :</h6>
                                   
                                </li>
                                <li class="list-inline-item">
                                    <p class="text-muted"><strong>{{ $produk->stok }} </strong></p>
                                </li>
                            </ul>

                           
                            <form action="" method="GET">
                                <input type="hidden" name="product-title" value="Activewear">
                                <div class="row">
                                    <div class="col-auto">
                                        <ul class="list-inline pb-3">
                                            <li class="list-inline-item">Size :
                                                <input type="hidden" name="product-size" id="product-size" value="S">
                                            </li>
                                            <li class="list-inline-item"><span
                                                    class="btn btn-success btn-size">S</span></li>
                                            <li class="list-inline-item"><span
                                                    class="btn btn-success btn-size">M</span></li>
                                            <li class="list-inline-item"><span
                                                    class="btn btn-success btn-size">L</span></li>
                                            <li class="list-inline-item"><span
                                                    class="btn btn-success btn-size">XL</span></li>
                                        </ul>
                                    </div>
                                    <div class="col-auto">
                                        <ul class="list-inline pb-3">
                                            <li class="list-inline-item text-right">
                                                Quantity
                                                <input type="hidden" name="product-quanity" id="product-quanity"
                                                    value="1">
                                            </li>
                                            <li class="list-inline-item"><span class="btn btn-success"
                                                    id="btn-minus">-</span></li>
                                            <li class="list-inline-item"><span class="badge bg-secondary"
                                                    id="var-value">1</span></li>
                                            <li class="list-inline-item"><span class="btn btn-success"
                                                    id="btn-plus">+</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row pb-3">
                                    <div class="col d-grid">
                                        <button type="submit" class="btn btn-success btn-lg" name="submit"
                                            value="buy">Buy</button>
                                    </div>
                                    <div class="col d-grid">
                                        <button type="submit" class="btn btn-success btn-lg" name="submit"
                                            value="addtocard">Add To Cart</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Close Content -->

    


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

    <!-- Start Slider Script -->
    <script src="{{asset ('/public/assets/js/slick.min.js') }}"></script>
    <script>
        $('#carousel-related-product').slick({
            infinite: true,
            arrows: false,
            slidesToShow: 4,
            slidesToScroll: 3,
            dots: true,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 3
                    }
                }
            ]
        });
    </script>
    <!-- End Slider Script -->

</body>

</html>