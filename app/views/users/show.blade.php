@extends('layouts/default')


@section('content')

    <h1>Hello, {{ $user->username }} </h1>
    <h2> Your passwd is : {{ $user->password }} </h2>
    
@stop