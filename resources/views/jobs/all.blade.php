@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="row">
            @foreach ($jobs as $job)
            <div class="col-md-4 mb-4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{URL('/storage/jobs')}}/{{$job->image}}">
                    <div class="card-body">
                      <h5 class="card-title">{{$job->title}}</h5>
                      <p class="card-text">{{$job->description}}</p>
                      {{-- <a href="#" class="btn btn-primary"></a> --}}
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
@endsection
