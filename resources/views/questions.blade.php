@extends('layouts.app')

@section('content')

<div class="container">

            
        
    
        <div class="jumbotron">
            <h4 class="display-4">All Questions</h4>
            <p class="lead">{{$totalquestions }} questions </p>
            
            <hr class="my-4">
            @auth
            <a class="btn btn-primary btn-lg" href="{{ url('questions/create') }}" role="button">Ask Question</a>
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
                
                <a href="{{ url('questions',[$question->id]) }}" class="btn btn-link">View Question</a>
            </div>  
            </div>
            <br>
            @endforeach
            </div>
        </div> 



@endsection
