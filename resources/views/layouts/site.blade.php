<!DOCTYPE html>
<html lang="en">
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Ecommerce Shop</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/site/css/fonts.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/site/css/crumina-fonts.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/site/css/normalize.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/site/css/grid.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/site/css/styles.css') }}">


    <!--Plugins styles-->

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/site/css/jquery.mCustomScrollbar.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/site/css/swiper.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/site/css/primary-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/site/css/magnific-popup.css') }}">

    <!--Styles for RTL-->

    <!--<link rel="stylesheet" type="text/css" href="{{ asset('assets/site/css/rtl.css') }} rtl.css">-->

    <!--External fonts-->

    <link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>

    @yield('styles')

</head>





<body class=" ">

    <header class="header" id="site-header">

        <div class="container">

            <div class="header-content-wrapper">

                <ul class="nav-add">
                    <li class="cart">

                        <a href="#" class="js-cart-animate">
                            <i class="seoicon-basket"></i>
                            <span class="cart-count cart_total_items">{{ session('cart') ? count(session('cart')): 0 }}</span>
                        </a>

                        <div class="cart-popup-wrap">
                            <div class="popup-cart">
                                <h4 class="title-cart"><span class="cart_total_items">{{ session('cart') ? count(session('cart')): 0 }}</span> products in the cart!</h4>
                                <p class="subtitle">Please make your choice.</p>
                                <div class="btn btn-small btn--dark">
                                    <span class="text">view all catalog</span>
                                </div>
                            </div>
                        </div>

                    </li>
                </ul>
            </div>

        </div>

    </header>


    {{-- content  --}}
    @yield('content')


    <!-- Footer -->

    <footer class="footer">
        <div class="sub-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    </div>
                </div>
            </div>
        </div>
    </footer>


    @yield('scripts')

    <script src="{{ asset('assets/site/js/jquery-2.1.4.min.js') }}"></script>
    <script src="{{ asset('assets/site/js/crum-mega-menu.js') }}"></script>
    <script src="{{ asset('assets/site/js/swiper.jquery.min.js') }}"></script>
    <script src="{{ asset('assets/site/js/theme-plugins.js') }}"></script>
    <script src="{{ asset('assets/site/js/main.js') }}"></script>
    <script src="{{ asset('assets/site/js/form-actions.js') }}"></script>

    <script src="{{ asset('assets/site/js/velocity.min.js') }}"></script>
    <script src="{{ asset('assets/site/js/ScrollMagic.min.js') }}"></script>
    <script src="{{ asset('assets/site/js/animation.velocity.min.js') }}"></script>

    <!-- ...end JS Script -->


    </body>

    </html>
