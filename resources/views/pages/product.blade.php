@extends('layouts.master')
@section('product')
    active
@endsection
@section('content')
    <div class="container" style="padding-top: 100px;">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">

                    @foreach($products as $product)

                        <div class="col-md-6">
                            <div class="panel panel-default">
                                <div class="panel-body" style="height: 220px;">
                                    <div class="col-xs-6">
                                        <img class="img-responsive" src="{{$product->img_link}}"/>
                                    </div>
                                    <div class="col-xs-6">
                                        <h4>{{$product->name}}</h4>
                                        <p>$ {{$product->price}}</p>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 pull-right">
                                            <a href="product_delete/{{$product->id}}" class="btn btn-danger pull-right">Delete</a>
                                            <a href="edit_product/{{$product->id}}" class="btn btn-default pull-right">Edit</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                @endforeach
            </div>
        </div>

    </div>

@endsection