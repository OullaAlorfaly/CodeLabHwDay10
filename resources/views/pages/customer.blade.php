@extends('layouts.master')
@section('customer')
    active
    @endsection
@section('content')
    <div class="container" style="padding-top: 100px;">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <table class="table">
                    <tr>
                        <th class="text-center">Id</th>
                        <th class="text-center">First Name</th>
                        <th class="text-center">Last Name</th>
                        <th class="text-center">Full Name</th>
                        <th class="text-center">Phone Number</th>
                        {{--<th class="text-center">Grade In String</th>--}}
                        <th class="text-center">Address</th>
                        <th class="text-center">Action</th>
                        <th class="text-center">Orders</th>

                    </tr>


                    @foreach($customers as $customer)

                        <tr>
                            <td class="text-center">{{$customer->id}}</td>
                            <td class="text-center">{{$customer->first_name}}</td>
                            <td class="text-center">{{$customer->last_name}}</td>
                            <td class="text-center">{{$customer->full_name}}</td>
                            <td class="text-center">{{$customer->phone_number}}</td>
                            <td class="text-center">{{$customer->address}}</td>

                            {{--<td class="text-center">{{$customer->level->name}}</td>--}}

                            <th class="text-center">
                                <a href="edit_customer/{{$customer->id}}" class="btn btn-default pull-left">Edit</a>
                                <a href="delete/{{$customer->id}}" class="btn btn-danger pull-right">Delete</a>
                            </th>
                            <th class="text-center">
                                <a href="/customerOrders/{{$customer->id}}" class="btn btn-success pull-right">Orders</a>
                            </th>
                        </tr>

                    @endforeach
                </table>
            </div>
        </div>

    </div>




@endsection