<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\question;
use App\Models\answer;
use Illuminate\Support\Facades\DB;

class answerController extends Controller
{
    public function create(){
        $user=auth()->user();

        error_log($user->email);
        error_log($user->name);
        error_log(request('txtAnswer'));
        error_log(request('txtQid'));

        

        $answer= new answer();
        $qid=request('txtQid');

        $answer->qid=request('txtQid');
        $answer->useremail=$user->email;
        $answer->authorname=$user->name;
        $answer->answer=request('txtAnswer');

        $answer->save();
        // return redirect()->route('questions/', ['id' => $qid]);
        return redirect('questions/')->with('mssg','Your Answer is Posted');
    
    
    }


    public function useranswers(){
        $user=auth()->user();
        $answers=DB::table('answers')
        ->join('questions', 'answers.qid', '=', 'questions.id')
        ->select('answers.*', 'questions.body')
        ->where('answers.useremail',$user->email)->orderByRaw('answers.id desc')->get();
        
        error_log($answers);
        return view('answer.useranswer',['answers'=>$answers]);
    }

    public function editanswers($answerid){
        $answers=DB::table('answers')->where('id',$answerid)->get();
        // error_log($answers);
        return view('answer.editanswer',['answer'=>$answers]);
        
    }

    public function saveanswers(){
        $affected=DB::table('answers')->where('id',request('txtAnswerID'))->update(['answer'=>request('txtEditAnswer')]);
        if($affected){
            return redirect('/answers/useranswers')->with('mssg','Your Answer Was Changed');
        }else{
            error_log(request('txtEditAnswer')); 
            return 'Error';
        }

    }

    public function deleteanswers($answerid){
        $affected=DB::table('answers')->where('id', $answerid)->delete();
        if($affected){
            return redirect('/answers/useranswers')->with('mssg','Your Answer Was Deleted');
        }
        
    }

    
}
