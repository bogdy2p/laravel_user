@extends('layouts.default')


@section('content')
  
  <h1> Create new User</h1>
  
  {{ Form::open() }}
  
  <div>
  
     {{ Form::label('username','Username: ') }}
  
     {{ Form::text('username') }}
  
  </div>   
     
     
  <div>
  
     {{ Form::label('password','Password: ') }}
  
     {{ Form::password('password') }}
  
  </div>   
  
  
  <div>  {{ Form::submit('Create User') }}  </div>
  
  
  {{ Form::close() }}

@stop