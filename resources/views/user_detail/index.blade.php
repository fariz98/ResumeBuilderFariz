@extends('layouts.app')

@section('content')
<div class="col-md-8 col-md-offset-2"><h3>User Personal Details </h3></div>


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                        <div class="panel-body">
                                <h5 class="card-title">{{$detail->fullname}}  {{$detail->email}} {{$detail->phone}} </h5>
                                <a name="" id="" class="btn btn-sm btn-primary" href="{{route('user_detail.edit', $detail)}}" role="button">Edit</a>
    
                                <form action="{{route('user_detail.destroy', $detail)}}" method="POST" class="mt-2" style="display: inline"> 
                                        {{ csrf_field() }}
                                        {!! method_field('delete') !!}
                                        <input type="submit" value="Delete" class="btn btn-sm btn-danger">
                                </form>
                        </div>
                </div>
        </div>
    </div>
</div>
<div class="container">
        <div class="col-md-8 col-md-offset-2">

                <div class="row mt-3">
                        <div class="col text-right">
                                <a class=" btn btn-primary" href=" {{route('education.index')}} " role="button">Next Section</a>
                        </div>
                </div>
        </div>
</div>
@endsection