@extends('layouts.master')
@section('addProduct')
    active
@endsection
@section('content')
    <div class="container" style="margin-top: 100px;">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @foreach($product as $product)
                <form class="form-horizontal" method="post" action="/edit_product/{{$product->id}}">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label class="col-sm-2 control-label" style="text-align: left;">Product Name</label>
                        <div class="col-sm-10">
                            <input name="name" type="text" class="form-control "placeholder="Product Name" value="{{$product->name}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" style="text-align: left;">Price</label>
                        <div class="col-sm-10">
                            <input name="price" type="number" class="form-control" placeholder="Price" value="{{$product->price}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" style="text-align: left;">Product Image Link</label>
                        <div class="col-sm-10">
                            <input name="img_link" type="text" class="form-control "placeholder="Product Image" value="{{$product->img_link}}">
                        </div>
                    </div>
                    @endforeach
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection