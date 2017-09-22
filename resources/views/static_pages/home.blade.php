@extends('layouts.default')
@section('title', 'Home')
@section('content')
  <div class="jumbotron">
    <h1>Hello !</h1>
    <p class="lead">
      !_!
    </p>
    <p>
      Fan
    </p>
    <p>
      <a href="{{ route('signup') }}" class="btn btn-lg btn-success" href="#" role="button">Sign Up</a>
    </p>
  </div>
@stop
