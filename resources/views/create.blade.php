@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="jumbotron">
        <h4 class="display-4">Ask a question</h4>
            <p class="lead">Asking a good question is best for all and before you ask question make sure your question 
            hasn't been asked by your community </p>
            <hr class="my-4">
        </div>

        
                <form action="/questions" method="POST">
                    @csrf

                    <div class="form-group row">
                        <label for="Subject" class="col-md-2 offset-2">Subject</label>
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="txtSubject" id="txtSubject" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="Subject" class="col-md-2 offset-2">Question</label>
                        <div class="col-md-4">
                            <textarea class="form-control" name="txtQuestion" id="txtQuestion" cols="50" rows="5" required></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-2 offset-4">
                            <input type="submit" class="btn btn-primary form-control" value="Submit">
                        </div>
                    </div>
                    
                
                
                
                
                
                
                
                
                
                
                
                
                </form>
                
                
            
            
            
            
            
            
            
            
        
        
     
    
    
    
    
    
    
    
    
    </div>

@endsection