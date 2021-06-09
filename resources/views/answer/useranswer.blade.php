@extends('layouts.app')

@section('content')

<div class="container">


        @if(session('mssg'))
            <div class="alert alert-success" role="alert">
                <strong>Dear User </strong> {{ session('mssg') }}
                <!-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> -->
            </div>
        @endif

            
        
        <div class="jumbotron">
            <h4 class="display-4">Your Answers</h4>
            
            
            
            <hr class="my-4">
            @auth
            <a class="btn btn-primary btn-lg" href="{{ url('questions/create') }}" role="button">Ask Question</a>
            <a class="btn btn-primary btn-lg" href="{{ url('questions/userquestions') }}" role="button">View My Question</a>
            <a class="btn btn-primary btn-lg" href="{{ url('answers/useranswers') }}" role="button">View My Answers</a>
            
            @endauth

            @guest
            <h3><a href="{{ route('login') }}">{{ __('Login') }}</a> to View Your Questions</h3>
            @endguest


            
       


            </div>
            <div class="col-md-8">
            <hr>
            <h3>Total Answers : {{count($answers)}}</h3><hr>
            <!-- <div class="py-2 "> -->

            @foreach($answers as $answer)
            <div class="card">
            <div class="card-header">
                Question : {{$answer->body}}
            </div>
            <div class="card-body">
                <p class="card-title">Your Answer: {{$answer->answer}}</p>
                <p class="card-text">Answered Date : {{$answer->created_at}}</p>
                
                <a href="" class="btn btn-link">Edit Answer</a>
                <a href="" class="btn btn-link">Delete Answer</a>
            </div>  
            </div>
            <br>
            @endforeach
            </div>
        </div> 


        </div>
       
@endsection