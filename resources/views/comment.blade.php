@extends('layouts.app')

@section('content')
    <div class="container">

    @if(session('mssg'))
        <div class="alert alert-success" role="alert">
            <strong>Dear User </strong> {{ session('mssg') }}
            <!-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> -->
        </div>
    @endif

    <div class="card">
    <div class="card-header">
        Comments
    </div>
    
  <ul class="list-group list-group-flush">
    @foreach($comments as $comment)
    <li class="list-group-item"><i class="fas fa-bookmark"></i>          {{$comment->comment}}
    </li>
    @endforeach
  </ul>
  
</div>


            
        
    
    </div>
    <!-- end of container class -->

    
@endsection