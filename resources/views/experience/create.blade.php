@extends('layouts.app')

@section('content')


<div class="col-md-8 col-md-offset-2"><h3>Create Your Working Experiences </h3></div>
    <div class="container">
        <div class="row">
                <div class="col-md-8 col-md-offset-2">
                        <div class="panel panel-default">
                                <div class="panel-body">
                                <form action="/experience" method='POST'>
                                    {{ csrf_field() }}

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                          <label for="">Job Title</label>
                                          <input type="text" class="form-control" id="" name="job_title" placeholder="Enter Your Job Title">
                                        </div>
                                      <div>
                                      <div class="form-group col-md-6">
                                          <label for="">Company Name</label>
                                          <input type="text" class="form-control" id="" name="employer" placeholder="Enter Your Company Name">
                                        </div>
                                      </div>
                                      <div class="form-group col-md-6">
                                        <label for="">City</label>
                                        <input type="text" name="city" class="form-control" id="" placeholder="Example: Puchong, Petaling Jaya">
                                      </div>
                                      <div class="form-group col-md-6">
                                        <label for="">Job Brief</label>
                                        <textarea  name="state" class="form-control" id="" placeholder="Brief Your Job Description"></textarea>
                                      </div>
                                      <div class="form-group col-md-6">
                                        <label for=""> Start Date of Working</label>
                                        <input type="date" class="form-control" name="start_date" id="" placeholder="">
                                      </div>
                                      <div class="form-row">
                                        <div class="form-group col-md-6">
                                          <label for=""> End Date of Working</label>
                                          <input type="date"  class="form-control" name="end_date" id="">
                                        </div>
                                      </div>
                                    <button type="submit" class="btn btn-primary mt-2">Create Experiences</button>

                                    
                                </form>
                                </div>
                        </div>
                </div>
        </div>
    </div>
</div>


@endsection