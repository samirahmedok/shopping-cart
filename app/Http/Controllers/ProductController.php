<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\cart;
use Illuminate\Http\Request;
use Cartalyst\Stripe\Laravel\Facades\Stripe;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        // $this->middleware('auth')->except('showCart','index');
    }


    public function index()
    {
        $product = product::all();
        return view('products.index',compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, product $product)
    {
        $request->validate([
            'qty' => 'required|numeric|min:1',
        ]);

        $cart = new cart( session()->get('cart'));
        $cart->updateqty($product->id,$request->qty);
        session()->put('cart',$cart);
        return back()->with('success','product updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(product $product)
    {
        
        $cart = new cart( session()->get('cart') ); 
        $cart->remove($product->id);
         if($cart->totalqty <= 0)
         {
             session()->forget('cart');
         }else{
            session()->put('cart', $cart);
         }
         return back()->with('success','product has removed successfully');
    }

    public function addToCart(product $product)
    {
        if(session()->has('cart')){
            $cart = new cart(session()->get('cart'));

        }else{
            $cart = new cart();
        }
        $cart->add($product);
        // dd($cart);
        session()->put('cart',$cart);
        return back()->with('success','product has been added');
    }

    public function showCart()
    {
        if(session()->has('cart')){
            $cart = new cart(session()->get('cart'));

        }else{
            $cart = null ;
        }
        return view('cart.show',compact('cart'));
    }

    public function checkout($amount)
    {
        return view('cart.checkout',compact('amount'));
    }
    public function charge(Request $request)
    {
        // dd($request->stripeToken);
        $charge = Stripe::charges()->create([
            'currency' => 'USD',
            'source' => $request->stripeToken,
            'amount' => $request->amount,
            'description' => 'test from laravel new app'
        ]);

        $chargeID = $charge['id'];

        if($chargeID)
        {
            session()->forget('cart');
            return redirect('/')->with('success','Payment completed successfully');
        }else{
            return back();
        }
    }
}
