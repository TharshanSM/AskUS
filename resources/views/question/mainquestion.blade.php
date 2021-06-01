@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="jumbotron"> 
            <p class="lead">Questions Number: {{$question->id}}</p>
            <h4 class="display-4">{{$question->body}}</h4>
            <hr class="my-4">
            <p class="lead">Asked on: {{$question->date}}</p>
            <p class="lead">Question Subject: <span class="badge badge-pill badge-warning">{{$question->subject}}</span></p>
            <p class="lead">Asked By: <a href="#">{{$question->userEmail}}</a></p>
            @auth
            <a class="btn btn-primary btn-lg" href="#" role="button">Post Your Answer</a>
            @endauth

            @guest
            <h3><a href="{{ route('login') }}">{{ __('Login') }}</a> To Post Answer</h3>
            @endguest

        </div>

        
    </div>




@endsection