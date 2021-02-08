@extends('layouts.app')

@section('content')


<div class="col-md-8 col-md-offset-2"><h3>Edit Education </h3></div>
    <div class="container">
        <div class="row">
                <div class="col-md-8 col-md-offset-2">
                        <div class="panel panel-default">
                                <div class="panel-body">
                                <form action="{{route('education.update', $education)}}" method='POST'>
                                    {{ csrf_field() }}
                                    {{ method_field('PUT') }}
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                          <label for="">School Name</label>
                                          <input type="text" class="form-control" id="" name="school_name" value="{{$education->school_name}}">
                                        </div>
                                      <div>
                                      <div class="form-group col-md-6">
                                          <label for="">School Location</label>
                                          <input type="text" class="form-control" id="" name="school_location" value="{{$education->school_location}}">
                                        </div>
                                      </div>
                                      <div class="form-group col-md-6">
                                        <label for="">Course Name</label>
                                        <input type="text" name="field_of_study" class="form-control" id="" value="{{$education->field_of_study}}">
                                      </div>
                                        <div class="form-group col-md-6">
                                          <label for="">Education Level</label>
                                          <select id="" class="form-control" name="degree">
                                            <option selected>{{$education->degree}}</option>
                                            <option>SPM</option>
                                            <option>Diploma</option>
                                            <option>Bachelor</option>
                                            <option>Master</option>
                                          </select>
                                        </div>
                                      <div class="form-group col-md-6">
                                        <label for="">Graduation Start</label>
                                        <input type="date" class="form-control" name="graduation_start_date" id="" value="{{$education->graduation_start_date}}">
                                      </div>
                                      <div class="form-row">
                                        <div class="form-group col-md-6">
                                          <label for="">Graduation End</label>
                                          <input type="date"  class="form-control" name="graduation_end_date" value="{{$education->graduation_end_date}}" id="">
                                        </div>
                                      </div>
                                      <div class="form-row">
                                        <div class="form-group col-md-6">
                                          <label for="">Education Brief</label>
                                          <textarea  class="form-control" name="summary" id="">{{$education->summary}}</textarea>
                                        </div>
                                      </div>
                                    <button type="submit" class="btn btn-primary mt-2 ">Update Education</button> 
                                </form>
                                </div>
                        </div>
                </div>
        </div>
    </div>
</div>
@endsection