@extends('layouts.app')

@section('content')

    <div class="container">
        <form id="vacancy_form" action="{{URL('/save_vacancy')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="exampleFormControlInput1">Email address</label>
              <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Job Description</label>
              <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleFormControlFile1">Upload Image for Job Post</label>
                <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
              </div>
              <div class="form-group">
                <input type="submit" class="btn btn-primary" id="btnsubmit" value="Post Vacancy">
              </div>
          </form>
    </div>
@endsection
