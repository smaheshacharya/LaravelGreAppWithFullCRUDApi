<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user_progress;
use DB;

class UserprogressController extends Controller
{
    public function store_progress(Request $request)
    {
        $user = new user_progress;
        $user->user_id = auth()->user()->id;
        $user->time_spend = $request->input('time');
        $user->save();
    }

    public function show_progress()
    {
        $user_id = auth()->user()->id;
        $user_history = user_progress::where('user_id',$user_id)->get();
        return $user_history;
    }
}
