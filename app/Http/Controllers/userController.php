<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\question;
use App\Models\answer;
use App\Models\user;
use Illuminate\Support\Facades\DB;

class userController extends Controller
{
    public function index(){
        $userid=auth()->user()->id;
        $user=DB::table('users')->where('id',$userid)->get();
        error_log('UserID: '.$user);

        return view('user',['users'=>$user]);
    }
}
