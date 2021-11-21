<!DOCTYPE html>
<html lang="en">

<head>
    <title>Aria Shop - Product Listing Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <link rel="stylesheet" href="{{ asset('/public/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/public/assets/css/templatemo.css') }}">
    <link rel="stylesheet" href="{{ asset('/public/assets/css/custom.css') }}">
    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
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



    <!-- Start Content -->
    <div class="container py-5">
        <div class="row">

            <div class="col-lg-3">
                <div class="card">
                    <div class="card-header">
                        Filter
                    </div>
                    <div class="card-body">

                        <form action="{{ url('shop/filter') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="" class="control-label">Nama produk</label>
                                <input type="text" class="form-control" name="nama" value="{{ $nama ?? '' }}">
                            </div>
                            <br>
                            <button class="btn btn-dark float-right"><i class="fa fa-search"></i> Filter</button>
                        </form>


                    </div>
                    <div class="card-body">
                        <form action="{{ url('shop/filter2') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">harga min</label>
                                        <input type="text" class="form-control" name="harga_min"
                                            value="{{ $harga_min ?? '' }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">harga max</label>
                                        <input type="text" class="form-control" name="harga_max"
                                            value="{{ $harga_max ?? '' }}">
                                    </div>
                                </div>
                            </div>

                            <br>

                            <button class="btn btn-dark float-right"><i class="fa fa-search"></i>Filter</button>
                        </form>
                    </div>
                    
                </div>
            </div>

            <div class="col-lg-9">
                <div class="row">
                    <div class="col-md-6">
                        <ul class="list-inline shop-top-menu pb-3 pt-1">
                            <li class="list-inline-item">
                                <a class="h3 text-dark text-decoration-none mr-3" href="#">All</a>
                            </li>
                            <li class="list-inline-item">
                                <a class="h3 text-dark text-decoration-none mr-3" href="#">Men's</a>
                            </li>
                            <li class="list-inline-item">
                                <a class="h3 text-dark text-decoration-none" href="#">Women's</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 pb-4">
                        <div class="d-flex">
                            <select class="form-control">
                                <option>Featured</option>
                                <option>A to Z</option>
                                <option>Item</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row  ">


                        @foreach ($list_produk as $produk)
                            <div class="col-md-3">

                                <div class="card mb-4 product-wap rounded-0 ">
                                    <div class="card rounded-0">
                                        <img class="card-img rounded-0 img-fluid"
                                            src="{{ asset('/public/assets/img/shop_01.jpg') }}">
                                        <div
                                            class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                            <ul class="list-unstyled">
                                                <li><a class="btn btn-success text-white" href="shop-single.html"><i
                                                            class="far fa-heart"></i></a></li>
                                                <li><a class="btn btn-success text-white mt-2"
                                                        href="shop-single.html"><i class="far fa-eye"></i></a></li>
                                                <li><a class="btn btn-success text-white mt-2"
                                                        href="shop-single.html"><i class="fas fa-cart-plus"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <a href="{{ url('/produkshop', $produk->id) }}"
                                            class="h3 text-decoration-none">{{ $produk->nama }}</a>
                                       
                                            <hr>
                                            <p>stok :{{ $produk->stok }}</p>
                                            
                                            
                                        <p class="text-center mb-0">Rp.{{number_format($produk->harga)  }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div div="row">
                    <ul class="pagination pagination-lg justify-content-end">
                        <li class="page-item disabled">
                            <a class="page-link active rounded-0 mr-3 shadow-sm border-top-0 border-left-0" href="#"
                                tabindex="-1">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link rounded-0 mr-3 shadow-sm border-top-0 border-left-0 text-dark"
                                href="#">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link rounded-0 shadow-sm border-top-0 border-left-0 text-dark" href="#">3</a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
    <!-- End Content -->

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
                                                        src="{{ asset('/public/assets/img/brand_01.png') }}"
                                                        alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img"
                                                        src="{{ asset('/public/assets/img/brand_02.png') }}"
                                                        alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img"
                                                        src="{{ asset('/public/assets/img/brand_03.png') }}"
                                                        alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img"
                                                        src="{{ asset('/public/assets/img/brand_04.png') }}"
                                                        alt="Brand Logo"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End First slide-->

                                    <!--Second slide-->
                                    <div class="carousel-item">
                                        <div class="row">
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img"
                                                        src="{{ asset('/public/assets/img/brand_01.png') }}"
                                                        alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img"
                                                        src="{{ asset('/public/assets/img/brand_02.png') }}"
                                                        alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img"
                                                        src="{{ asset('/public/assets/img/brand_03.png') }}"
                                                        alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img"
                                                        src="{{ asset('/public/assets/img/brand_04.png') }}"
                                                        alt="Brand Logo"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End Second slide-->

                                    <!--Third slide-->
                                    <div class="carousel-item">
                                        <div class="row">
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img"
                                                        src="{{ asset('/public/assets/img/brand_01.png') }}"
                                                        alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img"
                                                        src="{{ asset('/public/assets/img/brand_02.png') }}"
                                                        alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img"
                                                        src="{{ asset('/public/assets/img/brand_03.png') }}"
                                                        alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img"
                                                        src="{{ asset('/public/assets/img/brand_04.png') }}"
                                                        alt="Brand Logo"></a>
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
