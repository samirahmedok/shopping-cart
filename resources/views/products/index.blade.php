@extends('layouts.master')
@section('styles')
    <style>
        body{background-color:#ffffff;}

    </style>
@endsection

<div class="container">
    @section('content')
    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong>{{session()->get('success')}}</strong> 
        </div>
    @endif
    <div class="row">
        @foreach ($product as $product)
        <div class="col-sm-6 col-md-4" >
            <div class="thumbnail" style="box-shadow:1px 0px 11px 0px;max-width:250px">
                <img src="{{$product->image}}" alt="..." class="img-responsive" style="max-height: 150px;">
                <div class="caption" style="max-height: 180px;margin-top:-50">
                    <h3>{{$product->name}}</h3>
                    <p class="description" style="color: #7f7f7f;">{{$product->description}}</p>
                    <div class="clearfix">
                        <div class="pull-left price" style="font-weight:bold;font-size: 16px;">{{$product->price}} <span style="color: rgb(5, 128, 11)">جنيه</span></div>
                        <a href="{{route('add.cart',$product->id)}}" class="btn btn-success pull-right" role="button">Add to Cart</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @endsection
</div>


@section('scripts')
    <script type="text/javascript">

    </script>
@endsection