@extends('layouts.app')

@section('content')


<div class="col-md-8 col-md-offset-2"><h3>Welcome To My Resume Builder by Fariz Redzuan </h3></div>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
             <a name="" id="" class="btn btn-primary" href=" {{route('user_detail.index')}}" role="button"> Build your resume for your future job</a>
        </div>
    </div>
</div>

@endsection