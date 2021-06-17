<?php

namespace App\Http\Controllers;

use App\Models\Jobs;
use Illuminate\Http\Request;
use File;

class JobsController extends Controller
{
    public function showPostVacancy()
    {
        return view('jobs.post_vacancy');
    }


    public function showJobs()
    {
        $jobs = Jobs::all();
        return view('jobs.all',['jobs'=> $jobs]);
    }

    public function showJobDetails($id)
    {
        $job = Jobs::find($id);
        return view('jobs.view',['job'=> $job]);
    }

    public function savePostVacancy(Request $request)
    {

        $email = $request->email;
        $description = $request->description;
        $image = $request->file('image');

        $job = new Jobs();

        $job->email = $email;
        $job->description = $description;

        if (!empty($image)) {
            $file_ex = strtolower(File::extension($image->getClientOriginalName()));

            if ($file_ex != "png" && $file_ex != "jpg" && $file_ex != "jpeg" && $file_ex != "gif") {
                $res['success'] = false;
                $res['message'] = 'Invalid photo type!';
                return response($res);
            }

            $filename = uniqid() . "." . $file_ex;
            //
            $image->storeAs('public/jobs/', $filename);

            $job->image = $filename;
        }

        $job->save();

        return redirect()->back();
    }
}
