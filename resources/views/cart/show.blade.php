@extends('layouts.master')
<head>
    {{-- @section('title','Cart INFO') --}}
    @section('style')
        <style></style>
    @endsection
</head>

<div class="container">
    @section('content')
@if ($cart)
    

    <div class="row">
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">
                        <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <strong>{{ $error }}</strong> 
                    </div>
                @endforeach
        
        <div class="col-md-8">
                @foreach ($cart->items as $product)
                    
                
                        <div class="card mb-2">
                            <div class="card-body">
                                <h5 class="card-title">
                               
                                    {{$product['name']}}
                                </h5>
                                <img src="{{$product['image']}}" style="width: 100px;height:100px;">
                                <p style="color: #7f7f7f">{{$product['description']}}</p>

                                <div class="card-text">
                                    جنيه  {{$product['price']}}
                                    <form method="post" action="{{route('product.update',$product['id'])}}">
                                        @csrf
                                        @method('put')
                                        <input type="text" name="qty" id="qty" value="{{$product['qty']}}">
                                        <button type="submit" class="btn btn-primary btn-sm">Change</button>  
                                    </form>
                                    <form method="POST" action="{{ route('product.remove',$product['id']) }}">
                                        @csrf
                                        @method('delete')
                                        <button style="float: left;" type="submit" class="btn btn-danger btn-sm ml-4">Remove</button>
                                    </form> &nbsp; &nbsp; &nbsp; &nbsp;
                                </div>
                            </div>
                        </div><hr style="width: 100%;height:5px;color:black;">
                @endforeach
                
                <p><strong>Total : {{$cart->totalprice}} جنيه</strong></p>

        </div>

        <div class="col-md-4" >
        <div class="card bg-primary text-white" style="padding: 20px">
            <div class="card-body">
                <h3 class="card-title">
                    Your Cart
                    <hr>    
                </h3>
                <div class="card-text">
                    <p>
                    Total Amount : جنيه  <span style="color: #ffdb00">{{$cart->totalprice}}</span>
                    </p>
                    <p>
                    Total Quantities : <span style="color: #ffdb00">{{$cart->totalqty}}</span>
                    </p>
                    <a href="{{route('checkout.cart',$cart->totalprice)}}" class="btn btn-info">Chekout</a>
                </div>
            </div>
        </div>
        </div>
        @else
        <p class="alert alert-danger" style="text-align:center"><strong>There are no items in the cart</strong></p>
        @endif

        

      
    </div>


    @endsection
</div>






@section('scripts')
    <script></script>
@endsection
    