@extends('layouts.app')
@section('content')
  <a class="btn btn-outline-info btn-sm" href="/">Go Back</a>
  <h1>{{$todo->text}}</h1>
  <div class="badge badge-pill badge-warning">
      {{$todo->due}}
  </div>

  <hr>
  <p>{{$todo->body}}</p>

@endsection
