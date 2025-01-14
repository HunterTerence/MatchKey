<!DOCTYPE html>
@extends('layouts.app')

@section('content')

		<h1>Match Key</h1>
		{!! Form::open(['url'=> 'register/submit'])!!}
		<div class="form-group" style="width: 400px;">
			{{Form::label('username','Username')}}
			{{Form::text('username','',['class'=> 'form-control','placeholder'=>'Enter name'])}}
		</div>
		<div class="form-group" style="width: 400px;">
			{{Form::label('password','Password')}}
			{{Form::text('password','',['class'=> 'form-control','placeholder'=>'Enter Password'])}}
		</div>
		<div class="form-group" style="width: 400px;">
			{{Form::label('confirmpassword','ConfirmPassword')}}
			{{Form::text('confirmpassword','',['class'=> 'form-control','placeholder'=>'Enter ConfirmPassword'])}}
		</div>
		<div class="form-group" style="width: 400px;">
			{{Form::label('email','E-mail')}}
			{{Form::text('email','',['class'=> 'form-control','placeholder'=>'example@example.com'])}}
		</div>
		<div>
			{{Form::submit('Submit',['class'=>'btn btn-primary'])}}
		</div>
		{!!Form::close()!!}

@endsection