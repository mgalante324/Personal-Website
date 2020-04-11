@extends('layouts.app')

@section('content')
  <h1>{{$title}}</h1>
  <p>{{$description}}</p>
  @if(count($features) > 0)
    <ul class="list-group">
      @foreach($features as $feature)
          <li>{{$feature}}</li>
      @endforeach
    </ul>
  @endif
@endsection
