
@extends('layouts.app')
@section('content')
<div class="container">
<h1>Edit Words </h1>
{!! Form::open(['action'=>['VocabController@update',$voc->id],'method'=>'POST','enctype'=>'multipart/form-data']) !!}
    
    <div class ="form-group">
    	{{Form::label('word','Word')}}
    	{{Form::text('word',$voc->title, ['class'=>'form-control','placeholder'=>'Your Word'])}}

    </div>
       <div class ="form-group">
    	{{Form::label('brief','Brief')}}
    	{{Form::textarea('brief',$voc->brief, ['id' => 'ckeditor-demo','class' => 'form-control','placeholder' => 'Brief'])}}

    </div>
    <div class ="form-group">
    	{{Form::label('mnemonics','Mnemonics')}}
    	{{Form::textarea('mnemonics',$voc->brief, ['id' => 'ckeditor-demo','class' => 'form-control','placeholder' => 'Mnemonics'])}}

    </div>
    <div class ="form-group">
    	{{Form::label('example','Example')}}
    	{{Form::textarea('example',$voc->brief, ['id' => 'ckeditor-demo','class' => 'form-control','placeholder' => 'Put Example'])}}

    </div> 
    <div class="from-group">
        {{Form::label('level','Word Level')}}
        {{Form::select('level', array('Basic' => 'Basic', 'Intermediate' => 'Intermediate','Hard'=>'Advance'), $selected = null, array('class' => 'form-control'))}}

    </div> 
    <br>
    {{Form::hidden('_method','PUT')}}
    {{Form::submit('Update',['class'=>'btn btn-primary form-control'])}}
{!! Form::close() !!}
@endsection
</div>