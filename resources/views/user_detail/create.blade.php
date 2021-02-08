@extends('layouts.app')

@section('content')


<div class="container">
    <div class="col-md-8 col-md-offset-2"><h3>Create Personal Details </h3></div>

        <div class="container">
                <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                                <div class="panel panel-default">
                                        <div class="panel-body">
                                        <form action="/user_detail" method='POST' enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                        
                                                <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                                <label for="">Full Name</label>
                                                                        <input type="text" class="form-control" name="fullname" id="" placeholder="Enter Your Name" >
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                                <label for="">Email Address</label>
                                                                        <input type="email" class="form-control" name="email" id="Enter your email address"  >
                                                        </div>
                                                </div>
                                                <div class="form-group">
                                                        <label for="">Phone Number</label>
                                                                <input type="text" class="form-control" name="phone" id="" placeholder="Enter your phone number">
                                                </div>
                                                <div class="form-group">
                                                        <label for="">Address </label>
                                                                <input type="text" class="form-control" name="address" id="" placeholder="Enter your current address">
                                                </div>
                                                <div class="form-group">
                                                        <label for="">Objective</label>
                                                                <textarea class="form-control" name="summarry" rows="5" id="comment" placeholder="Enter your Objective"></textarea>
                                                </div>
                                                <div class="form-group">
                                                        <label for="">Picture</label>
                                                                <input type="file" name="image" value="">
                                                                <input type="hidden" name="_token" value="{{ csrf_token()}}">
                                                </div>
                                                <button type="submit" class="btn btn-primary mt-2">Create</button>
                                        </form>
                                        </div>
                                </div>
                        </div>
                </div>
        </div>
    </div>
</div>


@endsection