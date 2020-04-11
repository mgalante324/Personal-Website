@extends('layouts.backend')

@section('content')
  <div class="container" style="margin-top: 100px;">
    <h1>Projects</h1>
    @if(count($projects) > 0)
        @foreach($projects as $project)
          <h3>{{$project->title}}</h3>
        @endforeach
    @else
      <p>No Projects Found.</p>

    @endif
  </div>

@endsection
