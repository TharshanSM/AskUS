@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="jumbotron"> 
            <p class="lead">Questions Number: {{$question->id}}</p>
            <h4 class="display-4">{{$question->body}}</h4>
            <hr>
            <blockquote class="blockquote mb-1">
            <footer class="blockquote-footer"> Asked on: <cite title="Source Title">    {{  $question->date}} </footer>
            <footer class="blockquote-footer"> Question Subject: <cite title="Source Title"><span class="badge badge-pill badge-warning">   {{  $question->subject}}</span></footer>
            <footer class="blockquote-footer"> Asked By: <cite title="Source Title">  {{  $question->userEmail}}</footer>
            </blockquote>

            @guest
            <h3><a href="{{ route('login') }}">{{ __('Login') }}</a> To Post Answer</h3>
            @endguest
        </div>
        <hr>

        <!-- count the results -->
        @if(count($answers)==0)
            <h3>No Answers</h3>
        @else
            <h3>Total Answers : {{count($answers)}}</h3>
        @endif

        <!-- display the result -->
        @foreach($answers as $answer)
        <div class="py-2">
                <div class="card">
                    <div class="card-header">Answer No: {{$answer->id}}</div>
                    <div class="card-body">
                        <blockquote class="blockquote mb-0">
                        <p><i class="fas fa-map-pin"></i> {{$answer->answer}}</p>
                        <footer class="blockquote-footer"><i class="fas fa-user-circle"></i> Answered by: <cite title="Source Title"><a href="">{{$answer->authorname}}</a></footer>
                        <footer class="blockquote-footer"><i class="fas fa-clock"></i> Date: <cite title="Source Title">{{$answer->created_at}}</footer>
                        <hr>
                        
                        <div>
                            <p>Comment</p>
                        </div>



                        </blockquote>
                    </div>
        </div>    
        </div>
        @endforeach
        <hr>





        @auth
        <div>
            <div class="card">
                <h5 class="card-header">Post Your Answer Below</h5>
            <div class="card-body">

            <form action="/answers" method="POST">
                    @csrf

                    <div class="form-group row">
                        <input type="text" class="form-control" name="txtQid" value={{$question->id}} readonly> 
                    </div>

                    <div class="form-group row">
                        <textarea class="form-control" name="txtAnswer" id="txtAnswer" cols="150" rows="5" required></textarea>
                    </div>

                    <div class="form-group row">
                        <div>
                            <input type="submit" class="btn btn-primary form-control" value="Post Answer">
                        </div>
                    </div>

               
            </div>
            </div>
        </div>

        <div class="py-2">
            <div class="card border border-warning bg-warning">
                <div class="card-body">
                    <p>Thanks for contributing an answer to our community!</p>
                    <p>Please be sure to answer the question. Provide details and share your research!</p>
                    <p><i>But avoid …</i></p>
                    <ul>
                        <li>Asking for help, clarification, or responding to other answers.</li>
                        <li>Making statements based on opinion; back them up with references or personal experience.</li>
                    </ul>
                </div>
            </div>
            
        </div>
        @endauth

        
    </div>




@endsection