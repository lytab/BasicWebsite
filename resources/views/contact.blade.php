@extends('layouts.app')
@section('title','Home')
    
@section('content')
    
<h1>Contact</h1>
{!!Form::open(['url'=>'contact/submit'])!!}
<div class="form-group">
        {{Form::label('name','Name')}}
        {{Form::text('name',null,['class'=>'form-control','placeholder'=>'Enter name'])}}
     </div>
    <div class="form-group">
        {{Form::label('email','E-Mail Address')}}
        {{Form::text('email',null,['class'=>'form-control','placeholder'=>'Example@gmail.com'])}}
     </div>
     <div class="form-group">
            {{Form::label('message','Message')}}
            {{Form::textarea('message',null,['class'=>'form-control','placeholder'=>'Enter message','rows'=>'5'])}}
         </div>
         <div>
             {{Form::submit('Submit',['class'=>'btn btn-success'])}}
         </div>
{!!Form::close()!!}
@endsection