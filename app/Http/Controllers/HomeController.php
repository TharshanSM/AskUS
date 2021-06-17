<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function manageSkills()
    {
        $user_id = Auth::user()->id;
        $skills = Skill::where('user_id',$user_id)->get();
        return view('account.skills',['skills'=> $skills]);
    }

    public function saveSkill(Request $request)
    {

        $skill_input = $request->input('skill');
        $user_id = Auth::user()->id;
        $skill = new Skill();
        $skill->user_id = $user_id;
        $skill->skill = $skill_input;
        $skill->save();

        return redirect()->back();
    }

    public function showUpdateProfile()
    {
        $user = Auth::user();
        return view('account.update_profile',['user'=> $user]);
    }

    public function updateProfile(Request $request)
    {
        $user_id = Auth::user()->id;
        $user = User::where('id',$user_id)->first();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->save();

        return redirect()->back();
    }

    public function deleteSkill($id)
    {
        $skill = Skill::find($id)->delete();
        return redirect()->back();
    }
}
