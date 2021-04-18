<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class questionsController extends Controller
{
    public function index(){
        $questions=DB::table('question')->orderByRaw('date desc')->get();
        $totalquestions=DB::table('question')->count();
        return view('questions',['questions'=>$questions],['totalquestions'=>$totalquestions]);
    }

    public function redirect($id){
        $question=DB::table('question')->where('id',$id)->first();
        return view('mainquestion',['question'=>$question]);
        
    }

    public function create(){
        return view('create');
    }
}
