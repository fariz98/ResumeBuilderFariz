@extends('layouts.app')

@section('content')
<div class="col-md-8 col-md-offset-2"><h3>Work Summary Experiences </h3></div>
@foreach($experience as $e)

        <div class="container">
                <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                                <div class="panel panel-default">
                                        <div class="panel-body">
                                                <h5 class="card-title">{{$e->job_title}}   {{$e->start_date}} to {{$e->end_date}}</h5>

                                                <ul>
                                                <li>{{ $e->employer}}</li>
                                                <li>{{ $e->city}}</li>
                                                <li>{{ $e->state}}</li>

                                                </ul>
                                                <a name="" id="" class="btn btn-sm btn-primary" href="{{route('experience.edit', $e)}}" role="button">Edit</a>
                
                                                <form action="{{route('experience.destroy', $e)}}" method="POST" class="mt-2" style="display: inline"> 
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
                <a  href=" {{route('experience.create')}} " role="button">+ Add another Experiences</a>

        <div class="row mt-3">
                <div class="col text-left">
                        <a class="btn btn-secondary" href=" {{route('education.index')}} " role="button">Back</a>
                </div>

                <div class="col text-right">
                        <a class=" btn btn-primary" href=" {{route('skill.index')}} " role="button">Next Section</a>
                </div>
        </div>
</div>

@endsection