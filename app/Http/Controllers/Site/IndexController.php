<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Cookie;

class IndexController extends Controller
{

    public function openHomePage()
    {
        $products = Product::all();
        // return view('site.index', compact('products'));
        // return view('site.index', ['products' => $products]);
        return view('site.index')->with('products', $products);

    }

    public function openProductDetails()
    {
        return view('site.product-details');
    }

    public function openCartPage()
    {
        return view('site.cart');
    }

    public function openCheckoutPage()
    {
        return view('site.checkout');
    }

    public function addProductIntoCart(Request $request)
    {
        $product_id = $request->product_id;

        $product = Product::find($product_id);

        if (! $product ) {

            return response()->json([
                'error' => 'Unable to find this product'
            ], 404);
        }

        $cart = session()->get('cart');
        $productId = $product->id;


        // session()->flush();

        if (!$cart) {
            $cart = [
                $productId => [
                    'name' => $product->name,
                    'quantity' => 1,
                    'price' => $product->price,
                    'image' => $product->gallery ? $product->gallery->image: ''
                ]
            ];

            session()->put('cart', $cart);

        }

        if (isset($cart[$productId])) {


            $cart[$productId]['quantity']++;

            session()->put('cart', $cart);

        }

        else {
            $cart[$productId] = [
                'name' => $product->name,
                'quantity' => 1,
                'price' => $product->price,
                'image' => $product->gallery ? $product->gallery->image: ''
            ];

            session()->put('cart', $cart);
        }



        return response()->json([
            'products' => $cart,
        ], 201);

    }

    public function calculateCartItems()
    {
        $cart = session()->get('cart');
        $cartTotalItems = count($cart);

        return response()->json([
            'cart_total_items' => $cartTotalItems
        ], 201);
    }

}
