@extends('layouts.app')
@section('content')
  <a class="btn btn-outline-info btn-sm" href="/">Go Back</a>
  <h1>{{$todo->text}}</h1>
  <div class="badge badge-pill badge-warning">
      {{$todo->due}}
  </div>

  <hr>
  <p>{{$todo->body}}</p>

  <a href="/todo/{{$todo->id}}/edit" class="btn btn-primary">Edit</a>

    {!! Form::open(['action' =>['TodosController@destroy' ,$todo->id] ,'method' =>'POST', 'class' =>'float-right']) !!}
    {{ Form::hidden('_method','DELETE')}}
    {{ Form::bsSubmit('Delete', ['class' =>'btn btn-danger']) }}
    {!! Form::close() !!}


@endsection
