@extends('layouts.backend')

@section('content')
  <h1>{{$project->title}}</h1>
  <p>{{$project->description}}</p>
  <a href="{{$project->link1}}" class="btn btn-success">{{$project->link1_button}}</a>
  <a href="{{$project->link2}}" class="btn btn-info">{{$project->link2_button}}</a>
@endsection
