<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vocabs;
use App\Http\Resources\Vocabs as VocabsResources;
use App\Http\Requests;

class VocabapiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get some data 
        $vocab = Vocabs::paginate(5);
        return VocabsResources::collection($vocab);
    }

  

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vocab = $request->isMethod('put') ? Vocabs::findOrFail($request->id) : new Vocabs;
        $vocab->id = $request->input('id');
        $vocab->title = $request->input('title');
        $vocab->brief = $request->input('brief');
        $vocab->word_level = $request->input('word_level');
        $vocab->mnemonics = $request->input('mnemonics');
        $vocab->example = $request->input('example');
        if($vocab->save()){
            return new VocabsResource($vocab);
        }





    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Get single article 
        $vocab = Vocabs::findOrFail($id);
        // return single vocabs as res.
        return new VocabsResources($vocab);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Get single article 
        $vocab = Vocabs::findOrFail($id);
        // return single vocabs as res.
        if($vocab->delete()){
        return new VocabsResources($vocab);

        }
    }
    
}
