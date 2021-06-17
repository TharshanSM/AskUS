@extends('layouts.app')

@section('content')
<div class="container">
    <form id="vacancy_form" action="{{URL('/update_profile')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="exampleFormControlInput1">Name</label>
          <input type="text" class="form-control" name="name" id="exampleFormControlInput1" value="{{$user->name}}">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Email</label>
            <input type="email" class="form-control" name="email" id="exampleFormControlInput1" value="{{$user->email}}">
          </div>
          <div class="form-group">
            <input type="submit" class="btn btn-primary" id="btnsubmit" value="Update">
          </div>
      </form>
</div>
@endsection
