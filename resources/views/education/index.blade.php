@extends('layouts.app')

@section('content')
<div class="col-md-8 col-md-offset-2"><h3>Education Summary</h3></div>


@foreach($education as $e)

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                        <div class="panel-body">
                                <h5 class="card-title">{{$e->school_name}} {{$e->degree}} ({{$e->graduation_start_date}} - {{$e->graduation_end_date}})</h5>
                                <a name="" id="" class="btn btn-sm btn-primary" href="{{route('education.edit', $e)}}" role="button">Edit</a>
    
                                <form action="{{route('education.destroy', $e)}}" method="POST" class="mt-2" style="display: inline"> 
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
                <a  href=" {{route('education.create')}} " role="button">+ Add another Education</a>

        <div class="row mt-3">
                <div class="col text-left">
                        <a class="btn btn-secondary" href=" {{route('user_detail.index')}} " role="button" >Back</a>
                </div>

                <div class="col text-right">
                        <a class="btn btn-primary" href=" {{route('experience.index')}} " role="button">Next Section</a>
                </div>
        </div>
</div>

@endsection