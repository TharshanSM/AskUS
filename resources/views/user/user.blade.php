@extends('layouts.app')

@section('content')
    <div class="container">

        <!-- Session messages -->
        @if(session('mssg'))
            <div class="alert alert-success" role="alert">
                <strong>Dear User </strong> {{ session('mssg') }}
                <!-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> -->
            </div>
        @endif


        <div class="jumbotron"> 
            @foreach($users as $user)
            <h4 class="display-5">Welcome {{$user->name}}!</h4>
            <hr>
            
            <div class="btn-group" role="group" aria-label="Basic example">
            <!-- <a class="btn btn-primary " href="" role="button">View Profile</a> -->
            <!-- <a class="btn btn-primary " href="" role="button">UpdateProfile Details</a> -->
            <a class="btn btn-primary " href="" role="button">Update Profie Details</a>
            <a class="btn btn-primary " href="" role="button">View Job Prefrences</a>
            </div>
            @endforeach
        </div>

            <div class="row">
            
                <!-- profile photo -->
                <div class="col-md-4">
                    <div class="card ">
                    <h5 class="card-header">Profile Image</h5>
                        <div class="card-body bg bg-info">
                            <img src="https://picsum.photos/300" class="img-fluid rounded mx-auto d-block" alt="Profile Image">
                        </div>
                    </div>
                </div>

            <div class="col-md-8">
            @foreach($users as $user)
                <div class="card">
                    <h5 class="card-header">Profile Details</h5>
                <div class="card-body">
                <h5 class="display-5 text-center bold">Personal Details</h5>
                <p class="display-5">Name: {{$user->name}} </h1>
                <p class="display-5">Email Address:{{$user->email}} </h1> 
                <hr>   
                <h5 class="display-5 text-center bold">Professional Details</h5>
                <p class="display-5">About Me: N/A </h1> 
                <p class="display-5">Intrested Topic: N/A </h1>   
                <p class="display-5">Languages: N/A </h1>  
                <p class="display-5">Projects: N/A </h1>
                <p class="display-5">Current Semester: N/A </h1>
                <p class="display-5">Current GPA: N/A </h1>          


                </div>
                </div>
            @endforeach
            </div>
           
                
            </div>
            <!-- end of row -->
            
        
    
    </div>
    <!-- end of container class -->

    
@endsection