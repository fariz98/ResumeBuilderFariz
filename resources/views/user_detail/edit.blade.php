@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-md-8 col-md-offset-2"><h3>Edit Personal Details </h3></div>

        <div class="container">
                <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                                <div class="panel panel-default">
                                        <div class="panel-body">
                                        <form action="{{route('user_detail.update', $userDetail)}}" method='POST' enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                            {{ method_field('PUT') }}
                                                <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                                <label for="">Full Name</label>
                                                                        <input type="text" class="form-control" name="fullname" id="" placeholder="" value="{{$userDetail->fullname}}">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                                <label for="">Email Address</label>
                                                                        <input type="email" class="form-control" name="email" id="" value="{{$userDetail->email}}" >
                                                        </div>
                                                </div>
                                                        <div class="form-group">
                                                                <label for="">Phone Number</label>
                                                                        <input type="text" class="form-control" name="phone" id="" value="{{$userDetail->phone}}">
                                                        </div>
                                                        <div class="form-group">
                                                                <label for="">Address </label>
                                                                        <input type="text" class="form-control" name="address" id="" value="{{$userDetail->address}}">
                                                        </div>
                                                        <div class="form-group">
                                                                <label for="">Objective:</label>
                                                                        <textarea class="form-control" name="summarry" rows="5" id="comment">{{$userDetail->summarry}}</textarea>
                                                        </div>
                                                      
                                                        <button type="submit" class="btn btn-primary">Update</button>
                                        </form>
                                        </div>
                                </div>
                        </div>
                </div>
        </div>
    </div>
</div>

@endsection