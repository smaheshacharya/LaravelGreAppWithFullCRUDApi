<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Vocab;
use DB;

class PageController extends Controller
{
    
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth',['except'=>['index','about','setting']]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $title = 'This is index';
        return view('index')->with('title',$title);
    }
    public function setting()
    {   
        return view('setting');
    }
    public function about()
    {   
        return view('about');
    }
    public function basic()
    {
        $data = DB::table('vocabs')->where('word_level', 'basic');
        return view('admin.vocabs.collection')->with('vocabs',$data);
    }
    public function inter()
    {
        $data = DB::table('vocabs')->where('word_level', 'Intermediate');
        return view('admin.vocabs.collection')->with('vocabs',$data);
    }
    public function adv()
    {
        $data = DB::table('vocabs')->where('word_level', 'Hard');
        return view('admin.vocabs.collection')->with('vocabs',$data);
    }

}
