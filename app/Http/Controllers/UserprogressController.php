<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user_progresses;
use DB;

class UserprogressController extends Controller
{
    public function store_progress(Request $request)
    {
        $user = new user_progresses;
        $user->user_id = auth()->user()->id;
        $user->time_spend = $request->get('data');
        $user->save();
    }

    public function show_progress()
    {
        $user_id = auth()->user()->id;
        $user_history = user_progresses::where('user_id',$user_id);
        return view('setting')->with('user_data',$user_history);
    }
}
