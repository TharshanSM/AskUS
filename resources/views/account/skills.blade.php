@extends('layouts.app')

@section('content')
<div class="container">
    <form id="vacancy_form" action="{{URL('/save_skill')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="exampleFormControlInput1">Add your Skills</label>
          <input type="text" class="form-control" name="skill" id="exampleFormControlInput1" placeholder="testing">
        </div>
          <div class="form-group">
            <input type="submit" class="btn btn-primary" id="btnsubmit" value="Add Skill">
          </div>
      </form>

      <div>
            <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">id</th>
                <th scope="col">Skill</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($skills as $skill)
                <tr>
                    <th scope="row">{{$skill->id}}</th>
                    <td>{{$skill->skill}}</td>
                    <td><a class="btn btn-danger btn-sm" href="{{url('skill/delete/'.$skill->id)}}">
                        Delete
                    </a></td>
                </tr>
                @endforeach
            </tbody>
        </table>

      </div>
</div>
@endsection
