@extends('layouts.site')

@section('content')
<div class="content-wrapper">



    <!-- Books products grid -->


    <div class="container">
        <div class="row pt120">
            <div class="col-lg-8 col-lg-offset-2">
                <div class="heading align-center mb60">
                    <h4 class="h1 heading-title">E-commerce tutorial</h4>

                    <p class="heading-text">Buy books, and we ship to you.

                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row medium-padding120">
            <div class="product-details">
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                    <div class="product-details-thumb">
                        <div class="swiper-container" data-effect="fade">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                                <!-- Slides -->
                                <div class="product-details-img-wrap swiper-slide">
                                    <img src="{{ asset('assets/site/img/product-details.png') }}" alt="product" data-swiper-parallax="-10">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-6 col-lg-offset-1 col-md-6 col-md-offset-1 col-sm-6 col-sm-offset-1 col-xs-12 col-xs-offset-0">
                    <div class="product-details-info">
                        <div class="product-details-info-price">$16.99</div>
                        <h3 class="product-details-info-title">Marketing Strategy</h3>
                        <p class="product-details-info-text">Qolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                            nibham liber tempor cum soluta nobis eleifend option congue nihil uarta decima et quinta.
                            Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis.
                        </p>

                        <div class="quantity">
                            <a href="#" class="quantity-minus">-</a>
                            <input title="Qty" class="email input-text qty text" type="text" value="2">
                            <a href="#" class="quantity-plus">+</a>
                        </div>

                        <a href="cart.html" class="btn btn-medium btn--primary">
                            <span class="text">Add to Cart</span>
                            <i class="seoicon-commerce"></i>
                            <span class="semicircle"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End Books products grid -->



</div>
@endsection
