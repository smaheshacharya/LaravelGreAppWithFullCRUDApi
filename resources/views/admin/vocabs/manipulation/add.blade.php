@extends('layouts.app')
@section('content')
<div class="container">
<h1 style="color:blanchedalmond; font-family:Verdana, Geneva, Tahoma, sans-serif;text-align:center;">Create Word</h1>
{!! Form::open(['action'=>'VocabController@store','method'=>'POST']) !!}
    
    <div class ="form-group">
    	{{Form::label('word','Word')}}
    	{{Form::text('word','', ['class'=>'form-control','placeholder'=>'Your Words'])}}

    </div>
       <div class ="form-group">
    	{{Form::label('brief','Brief')}}
    	{{Form::textarea('brief','', ['id' => 'ckeditor-demo','class' => 'form-control','placeholder' => 'Brief Explain'])}}

    </div>
    <div class ="form-group">
    	{{Form::label('mnemonics','Mnemonics')}}
    	{{Form::textarea('mnemonics','', ['id' => 'ckeditor-demo','class' => 'form-control','placeholder' => 'Mnemonics'])}}

    </div>
    <div class ="form-group">
    	{{Form::label('example','Example')}}
    	{{Form::textarea('example','', ['id' => 'ckeditor-demo','class' => 'form-control','placeholder' => 'Put Example'])}}

    </div> 
    <div class="from-group">
        {{Form::label('level','Word Level')}}
        {{Form::select('level', array('Basic' => 'Basic', 'Intermediate' => 'Intermediate','Hard'=>'Advance'), $selected = null, array('class' => 'form-control'))}}

    </div>
     <br>
    {{Form::submit('submit',['class'=>'btn btn-primary form-control'])}}
{!! Form::close() !!}
</div>
@stop

