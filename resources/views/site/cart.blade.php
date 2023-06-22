@extends('layouts.site')


@section('content')
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

<div class="container-fluid">
    <div class="row bg-border-color medium-padding120">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">

                    <div class="cart">

                        <h1 class="cart-title">In Your Shopping Cart: <span class="c-primary"> {{ session('cart') ? count(session('cart')): 0 }} items</span></h1>

                    </div>

                    @if (session('cart'))
                    <form action="#" method="post" class="cart-main">

                        <table class="shop_table cart">
                            <thead class="cart-product-wrap-title-main">
                            <tr>
                                <th class="product-remove">&nbsp;</th>
                                <th class="product-thumbnail">Product</th>
                                <th class="product-price">Price</th>
                                <th class="product-quantity">Quantity</th>
                                <th class="product-subtotal">Total</th>
                            </tr>
                            </thead>
                            <tbody>

                            @php $cartTotal = 0 @endphp

                            @foreach (session()->get('cart') as $cartItem)

                            @php

                                $cartTotal += $cartItem['price'] * $cartItem['quantity'];

                            @endphp

                            <tr class="cart_item">

                                <td class="product-remove">
                                    <a href="#" class="product-del remove" title="Remove this item">
                                        <i class="seoicon-delete-bold"></i>
                                    </a>
                                </td>

                                <td class="product-thumbnail">

                                    <div class="cart-product__item">
                                        <a href="#">
                                            <img src="{{ $cartItem['image'] }}" alt="product" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image">
                                        </a>
                                        <div class="cart-product-content">
                                            <h5 class="cart-product-title">{{ $cartItem['name'] }}</h5>
                                        </div>
                                    </div>
                                </td>

                                <td class="product-price">
                                    <h5 class="price amount">{{ $cartItem['price'] }}</h5>
                                </td>

                                <td class="product-quantity">

                                    <div class="quantity">
                                        <a href="#" class="quantity-minus">-</a>
                                        <input title="Qty" class="email input-text qty text" type="text" placeholder="1" readonly value="{{ $cartItem['quantity'] }}">
                                        <a href="#" class="quantity-plus">+</a>
                                    </div>

                                </td>

                                <td class="product-subtotal">
                                    <h5 class="total amount">{{ $cartItem['price'] * $cartItem['quantity'] }}</h5>
                                </td>

                            </tr>
                            @endforeach



                            <tr>
                                <td colspan="5" class="actions">

                                    <div class="coupon">
                                        <input name="coupon_code" class="email input-standard-grey" value="" placeholder="Coupon code" type="text">
                                        <div class="btn btn-medium btn--breez btn-hover-shadow">
                                            <span class="text">Apply Coupon</span>
                                            <span class="semicircle--right"></span>
                                        </div>
                                    </div>

                                    <div class="btn btn-medium btn--dark btn-hover-shadow">
                                        <span class="text">Apply Coupon</span>
                                        <span class="semicircle"></span>
                                    </div>

                                </td>
                            </tr>

                            </tbody>
                        </table>


                    </form>

                    <div class="cart-total">
                        <h3 class="cart-total-title">Cart Totals</h3>
                        <h5 class="cart-total-total">Total: <span class="price">{{ config('product.currency') }} {{ $cartTotal }}</span></h5>
                        <a href="checkout.html" class="btn btn-medium btn--light-green btn-hover-shadow">
                            <span class="text">Checkout</span>
                            <span class="semicircle"></span>
                        </a>
                    </div>
                    @endif

                </div>

            </div>
        </div>
    </div>
</div>
@endsection
