@extends('layouts.master')
@section('order')
    active
@endsection
@section('content')
    <div class="container" style="padding-top: 100px;">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <table class="table">
                    <tr>
                        <th class="text-center">Order ID</th>
                        <th class="text-center">Customer ID</th>
                        <th class="text-center">Full Name</th>
                        <td class="text-center">Product Name</td>
                        <td class="text-center">Product Price</td>
                        <td class="text-center">Product Image</td>
                        {{--<th class="text-center">Grade In String</th>--}}

                    </tr>


                    @foreach($orders as $order)
                        @foreach($order->products as $product)
                        <tr>
                            <td class="text-center">{{$order->id}}</td>
                            <td class="text-center">{{$order->customer->id}}</td>
                            <td class="text-center">{{$order->customer->full_name}}</td>
                            <td class="text-center">{{$product->name}}</td>
                            <td class="text-center">{{$product->price}}</td>

                            <td class="text-center"> <img class="img-responsive" src="{{$product->img_link}}"/></td>
                            {{--<td class="text-center">{{$student->level->name}}</td>--}}
                        </tr>
                        @endforeach
                    @endforeach
                </table>
            </div>
        </div>

    </div>




@endsection