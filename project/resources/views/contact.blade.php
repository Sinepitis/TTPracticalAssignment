@extends('layout.app')

@section('content')
<h1>Contact</h1>
<h2>Feel free to contact us with any complaints or suggestions!</h2>
{!! Form::open(['url' => 'contact/submit']) !!}
<div class = "form-group">
  {{Form::label('name', 'Name')}}
  {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Put Name Here'])}}
</div>
  <div class ="form-group">
  {{Form::label('email', 'E-mail Address')}}
  {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'email@example.thing'])}}
</div>
  <div class ="form-group">
{{Form::label('message', 'Message')}}
{{Form::textarea('message', '', ['class' => 'form-control', 'placeholder' => 'Write a sweet message!'])}}
</div>
<div class ="form-group">
  {{form::submit('Submit',['class' => 'btn btn-primary'])}}
</div>

@endsection
