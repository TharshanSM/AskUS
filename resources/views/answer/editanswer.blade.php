@extends('layouts.app')
@section('content')
                <form action="/answers/saveanswers" method="POST">
                    @csrf
                    @foreach($answer as $answer)
                    <div class="form-group row">
                        <label for="Subject" class="col-md-2 offset-2">Edit your Answer here</label>
                        <div class="col-md-4">
                            <textarea class="form-control" name="txtEditAnswer" id="txtEditAnswer" cols="50" rows="5" required>{{$answer->answer }}</textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="Subject" class="col-md-2 offset-2">Answer ID</label>
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="txtAnswerID" id="txtAnswerID" value={{$answer->id}} readonly>
                        </div>
                    </div>


                    <div class="form-group row">
                        <div class="col-md-2 offset-4">
                            <input type="submit" class="btn btn-primary form-control" value="Submit">
                        </div>
                    </div>
                    @endforeach
                </form>

@endsection