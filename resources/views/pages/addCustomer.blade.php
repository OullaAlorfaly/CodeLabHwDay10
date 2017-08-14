@extends('layouts.master')
@section('addCustomer')
    active
@endsection
@section('content')
    <div class="container" style="margin-top: 100px;">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <form class="form-horizontal" method="post" action="/add_customer/addCustomer">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label class="col-sm-2 control-label" style="text-align: left;">First Name</label>
                            <div class="col-sm-10">
                                <input name="first_name" type="text" class="form-control "placeholder="First Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" style="text-align: left;">Last Name</label>
                            <div class="col-sm-10">
                                <input name="last_name" type="text" class="form-control" placeholder="Last Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" style="text-align: left;">Phone Number</label>
                            <div class="col-sm-10">
                                <input name="phone_number" type="text" class="form-control" placeholder="Phone Number">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" style="text-align: left;">Address</label>
                            <div class="col-sm-10">
                                <input name="address" type="text" class="form-control" placeholder="Address">
                            </div>
                        </div>
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