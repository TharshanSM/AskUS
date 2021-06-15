<?php

namespace App\Http\Controllers;



use App\Http\Controllers\Controller;
use App\Models\question;
use App\Models\answer;
use App\Models\comment;
use Illuminate\Support\Facades\DB;



class questionsController extends Controller
{
    public function index(){
        $questions=DB::table('questions')->orderByRaw('date desc')->get();
        $totalquestions=DB::table('questions')->count();
        return view('question.questions',['questions'=>$questions],['totalquestions'=>$totalquestions]);
    }

    public function redirect($id){
        $question=DB::table('questions')->where('id',$id)->first();
        $answers=DB::table('answers')->where('qid',$id)->get();

        $comments=answer::find(3)->comments;
        error_log($comments);
        return view('question.mainquestion',['question'=>$question],['answers'=>$answers]);
        
    }

    public function create(){
        return view('create');
    }

    public function store(){

        $user=auth()->user();
        
        error_log(request('txtSubject'));
        error_log(request('txtQuestion'));
        error_log(date('Y-m-d'));
        error_log($user->email);

        $question=new question();
        $question->subject=request('txtSubject');
        $question->body=request('txtQuestion');
        $question->date=date('Y-m-d');
        $question->userEmail=$user->email;

        $question->save();


        return redirect('questions')->with('mssg','Your Question is Posted');

    }

    public function userquestions(){
        $user=auth()->user();
        $useremail=$user->email;
        $question=DB::table('questions')->where('userEmail',$useremail)->get();
        return view('question.userquestion',['questions'=>$question]);
    }

    public function delete($id){
        //return 'Question Deleted';
        DB::table('questions')->where('id', $id)->delete();
        DB::table('answers')->where('qid',$id)->delete();
        return redirect('questions/userquestions')->with('mssg','Your Question is Deleted');
    }

   
    

}
