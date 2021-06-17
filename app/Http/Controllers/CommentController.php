<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\question;
use App\Models\answer;
use App\Models\comment;
use Illuminate\Support\Facades\DB;

class CommentController extends Controller
{
    public function viewcomments($id){
        $comments=DB::table('comments')->where('answer_id',$id)->get();;
        return view('comment',['comments'=>$comments]);

    }

    public function addcomments($id){
        // $comments=DB::table('comments')->where('answer_id',$id)->get();;
        return view('addcomment',['answerid'=>$id]);
    }

    public function savecomment(){
        $user=auth()->user();
        error_log($user->email);
        error_log(request('txtComment'));
        error_log(request('txtAnswerID'));

        $id=request('txtAnswerID');

        $comment=new comment();
        $comment->authoremail=$user->email;
        $comment->answer_id=request('txtAnswerID');
        $comment->comment=request('txtComment');
        $comment->save();

        return redirect('questions')->with('mssg','Your Comment is Posted');
    }
}
