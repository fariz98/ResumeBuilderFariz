@extends('layouts.app')

@section('content')


<div class="col-md-8 col-md-offset-2"><h3>Create New Education </h3></div>
    <div class="container">
        <div class="row">
                <div class="col-md-8 col-md-offset-2">
                        <div class="panel panel-default">
                                <div class="panel-body">
                                <form action="/education" method='POST'>
                                    {{ csrf_field() }}

                                      <div class="form-row">
                                        <div class="form-group col-md-6">
                                          <label for="">School Name</label>
                                          <input type="text" class="form-control" id="" name="school_name" placeholder="Enter Your School/College Name">
                                        </div>
                                      <div>
                                      <div class="form-group col-md-6">
                                          <label for="">School Location</label>
                                          <input type="text" class="form-control" id="" name="school_location" placeholder="Enter Your School Location">
                                        </div>
                                      </div>
                                      <div class="form-group col-md-6">
                                        <label for="">Course Name</label>
                                        <input type="text" name="field_of_study" class="form-control" id="" placeholder="Example: Computer Science, Engineering">
                                      </div>
                                        <div class="form-group col-md-6">
                                          <label for="">Education Level</label>
                                          <select id="" class="form-control" name="degree">
                                            <option selected>SPM</option>
                                            <option>Diploma</option>
                                            <option>Bachelor</option>
                                            <option>Master</option>
                                          </select>
                                        </div>
                                      <div class="form-group col-md-6">
                                        <label for="">Graduation Start</label>
                                        <input type="date" class="form-control" name="graduation_start_date" id="" placeholder="">
                                      </div>
                                      <div class="form-row">
                                        <div class="form-group col-md-6">
                                          <label for="">Graduation End</label>
                                          <input type="date"  class="form-control" name="graduation_end_date" id="">
                                        </div>
                                      </div>
                                      <div class="form-row">
                                        <div class="form-group col-md-6">
                                          <label for="">Education Brief</label>
                                          <textarea  class="form-control" name="summary" id=""></textarea>
                                        </div>
                                      </div>
                                    <button type="submit" class="btn btn-primary mt-2 ">Create Education</button> 
                                </form>
                                </div>
  
                        </div>
                </div>
        </div>
    </div>
</div>
@endsection