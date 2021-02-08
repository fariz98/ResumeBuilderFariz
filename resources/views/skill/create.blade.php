@extends('layouts.app')

@section('content')


<div class="col-md-8 col-md-offset-2"><h3>Create New Skills </h3></div>
    <div class="container">
        <div class="row">
                <div class="col-md-8 col-md-offset-2">
                        <div class="panel panel-default">
                                <div class="panel-body">
                                <form action="/skill" method='POST'>
                                    {{ csrf_field() }}

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                          <label for="">Skill Name</label>
                                          <input type="text" class="form-control" id="" name="name" placeholder="Example Java, Python, HTML">
                                        </div>
                                      <div>
                                        <div class="form-group col-md-6">
                                          <label for="">Rating Your Skill</label>
                                          <select id="" class="form-control" name="rating">
                                            <option selected>Beginner</option>
                                            <option>Novice</option>
                                            <option>Intermediate</option>
                                            <option>Advance</option>
                                            <option>Expert</option>

                                          </select>
                                        </div>
                                    
                                    <button type="submit" class="btn btn-primary mt-2">Create Skills</button>
                         
    
                                    </form>
                                </div>
                        </div>
                </div>
        </div>
    </div>
</div>


@endsection