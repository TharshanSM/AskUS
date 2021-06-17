@extends('layouts.app')
@section('content')
                <form action="/comment/savecomment" method="POST">
                    @csrf
                    
                    <div class="form-group row">
                        <label for="Subject" class="col-md-2 offset-2">Post Your Comment Here</label>
                        <div class="col-md-4">
                            <textarea class="form-control" name="txtComment" id="txtComment" cols="50" rows="5" required></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="Subject" class="col-md-2 offset-2">Answer ID</label>
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="txtAnswerID" id="txtAnswerID" value={{$answerid}} readonly>
                        </div>
                    </div>


                    <div class="form-group row">
                        <div class="col-md-2 offset-4">
                            <input type="submit" class="btn btn-primary form-control" value="Submit">
                        </div>
                    </div>
                    
                </form>

@endsection