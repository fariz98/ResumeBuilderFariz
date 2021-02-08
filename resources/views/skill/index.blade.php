@extends('layouts.app')

@section('content')
<div class="col-md-8 col-md-offset-2"><h3>Details Summary Skills </h3></div>
@foreach($skill as $e)

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                        <div class="panel-body">
                                <h5 class="card-title">{{$e->name}} ( {{$e->rating}} )</h5>
                                <a name="" id="" class="btn btn-sm btn-primary" href="{{route('skill.edit', $e)}}" role="button">Edit</a>
    
                                <form action="{{route('skill.destroy', $e)}}" method="POST" class="mt-2" style="display: inline"> 
                                        {{ csrf_field() }}
                                        {!! method_field('delete') !!}
                                        <input type="submit" value="Delete" class="btn btn-sm btn-danger">
                                </form>
                        </div>
                </div>
        </div>
    </div>
</div>

@endforeach

<div class="container">
        <div class="col-md-8 col-md-offset-2">
                <a  href=" {{route('skill.create')}} " role="button">+ Add another Skills</a>

        <div class="row mt-3">
                <div class="col text-left">
                        <a class="btn btn-secondary" href=" {{route('experience.index')}} " role="button">Back</a>
                </div>

                <div class="col text-right">
                        <a class=" btn btn-primary" href=" # " role="button">Next Section</a>
                </div>
        </div>
</div>

@endsection