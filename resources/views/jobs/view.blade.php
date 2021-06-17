@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="row">
           <img src="{{URL('/storage/jobs')}}/{{$job->image}}" alt="">
        </div>

    </div>
@endsection
