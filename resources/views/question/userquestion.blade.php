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
            <h4 class="display-4">Your Questions</h4>
            
            
            <hr class="my-4">
            @auth
            <div class="btn-group" role="group" aria-label="Basic example">
                <a class="btn btn-primary " href="{{ url('questions/create') }}" role="button">Ask Question</a>
                <a class="btn btn-primary " href="{{ url('questions/userquestions') }}" role="button">View My Question</a>
                <a class="btn btn-primary " href="{{ url('answers/useranswers') }}" role="button">View My Answers</a>
            </div>
            
            @endauth

            @guest
            <h3><a href="{{ route('login') }}">{{ __('Login') }}</a> to ask question</h3>

            @endguest


        


        </div>
            <div class="col-md-8">
            @foreach($questions as $question)
            <div class="card">
            <div class="card-header">
                Question Subject : <span class="badge badge-pill badge-warning">  {{$question->subject}}</span>
            </div>
            <div class="card-body">
                <h5 class="card-title">Question: {{$question->body}}</h5>
                <p class="card-text">Date : {{$question->date}}</p>
                
                <a href="{{ url('questions',[$question->id]) }}" class="btn btn-link">View Answer</a>
                <a href="{{ url('questions/deletequestion',[$question->id]) }}" class="btn btn-link">Delete Question</a>
            </div>  
            </div>
            <br>
            @endforeach
            </div>
        </div> 



@endsection