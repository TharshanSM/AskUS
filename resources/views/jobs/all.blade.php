@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="row">
            @foreach ($jobs as $job)
            <div class="col-md-4 mb-4">
                <div class="card" style="width: 18rem;">
                    <a href="{{URL('/job_details')}}/{{$job->id}}"><img class="card-img-top" src="{{URL('/storage/jobs')}}/{{$job->image}}"></a>
                    <div class="card-body">
                      <h5 class="card-title">{{$job->title}}</h5>
                      <div class="card-text">
                        <p>Job Title: {{$job->description}}</p>
                        <p>Posted At: {{$job->created_at}}</p>
                        <p>Email : {{$job->email}}</p>
                        {{-- <a href="#" class="btn btn-primary"></a> --}}
                      </div>
                      
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
@endsection
