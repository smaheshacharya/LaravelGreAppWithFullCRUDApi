<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vocabs;
use DB;

class VocabController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Vocabs::orderBy('title','desc')->paginate(7);
        return view('admin.vocabs.collection')->with('vocabs',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.vocabs.manipulation.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'word'=>'required',
            'brief'=>'required',
            'level'=>'required',
            'mnemonics'=> 'required',
            'example' =>'required'
        ]);
        $voc = new Vocabs;
        $voc->title = $request->input('word');
        $voc->brief = $request->input('brief');
        $voc->word_level = $request->input('level');
        $voc->mnemonics = $request->input('mnemonics');
        $voc->example = $request->input('example');
        // $voc->user_id = auth()->user()->id;//yo paxi thapne auth halepaxu
        $voc->save();
        return redirect(url('/vocab'))->with('success','Post Create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $data = "Individual word Not Found";
        return view('admin.vocabs.manipulation.show')->with('vocab',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $voc = Vocabs::find($id);
        if(auth()->user()->id !== 1 ){
            if(auth()->user()->id !== 3){
                return redirect(url('/vocab'))->with('error','Unauthorize Page');
            }
           
        }
       return view('admin.vocabs.manipulation.edit')->with('voc',$voc);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'word'=>'required',
            'brief'=>'required',
            'level'=>'required',
            'mnemonics'=> 'required',
            'example' =>'required'
            
        ]);
        $voc = Vocabs::find($id);
        $voc->title = $request->input('word');
        $voc->brief = $request->input('brief');
        $voc->word_level = $request->input('level');
        $voc->mnemonics = $request->input('mnemonics');
        $voc->example = $request->input('example');
        // $voc->user_id = auth()->user()->id;//yo paxi thapne auth halepaxu
        $voc->save();
        return redirect(url('/vocab'))->with('success','Updated ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $voc = Vocabs::find($id);
        if(auth()->user()->id !== 1 ){
            if(auth()->user()->id !== 3){
                return redirect(url('/vocab'))->with('error','Unauthorize Page');
            }
           
        }
        $voc->delete();
        return redirect(url('/vocab'))->with('success','Delete Words');
    }
}
