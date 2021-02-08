@extends('layouts.app')

@section('content')



<div class="container">
<div class="col-md-8 col-md-offset-2"><h3>Edit Experiences </h3></div>

        <div class="container">
                <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                                <div class="panel panel-default">
                                        <div class="panel-body">
                                        <form action="{{route('experience.update', $experience)}}" method='POST'>
                                        {{ csrf_field() }}
                                        {{ method_field('PUT') }}
                                        <div class="form-row">
                                        <div class="form-group col-md-6">
                                          <label for="">Job Title</label>
                                          <input type="text" class="form-control" id="" name="job_title" value="{{$experience->job_title}}">
                                        </div>
                                      <div>
                                      <div class="form-group col-md-6">
                                          <label for="">Company Name</label>
                                          <input type="text" class="form-control" id="" name="employer" value="{{$experience->employer}}">
                                        </div>
                                      </div>
                                      <div class="form-group col-md-6">
                                        <label for="">City</label>
                                        <input type="text" name="city" class="form-control" id="" value="{{$experience->city}}">
                                      </div>
                                      <div class="form-group col-md-6">
                                        <label for="">Job Brief</label>
                                        <textarea name="state" class="form-control" id="" >{{$experience->state}}</textarea>
                                      </div>
                                      <div class="form-group col-md-6">
                                        <label for=""> Start Date of Working</label>
                                        <input type="date" class="form-control" name="start_date" id="" value="{{$experience->start_date}}">
                                      </div>
                                      <div class="form-row">
                                        <div class="form-group col-md-6">
                                          <label for=""> End Date of Working</label>
                                          <input type="date"  class="form-control" name="end_date" id="" value="{{$experience->end_date}}">
                                        </div>
                                      </div>
                                                <button type="submit" class="btn btn-primary mt-2">Update Experiences</button>
                                   
                                        </form>
                                        </div>
                                </div>
                        </div>
                </div>
        </div>
</div>
   
@endsection