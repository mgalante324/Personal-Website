@extends('layouts.backend')

@section('content')
  <div style="margin-top: 100px;">
    <h1>Edit Project</h1>
    {!! Form::open(['action' => ['ProjectsController@update', $project->id], 'method' => 'POST']) !!}
      <div class="form-row">
        <div class="form-group col-md-6">
          {{-- {{ Form::label('title', 'Title') }} --}}
          {{ Form::text('title', $project->title, ['class' => 'form-control', 'placeholder' => 'Title']) }}
        </div>
        <div class="form-group col-md-6">
          {{ Form::text('languages', $project->languages, ['class' => 'form-control', 'placeholder' => 'Languages']) }}
        </div>
      </div>
      <div class="form-group">
        {{ Form::textarea('description',$project->description, ['class' => 'form-control', 'placeholder' => 'Description']) }}
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          {{ Form::text('link1', $project->link1, ['class' => 'form-control', 'placeholder' => 'Link 1 (link to view site/app/game)']) }}
        </div>
        <div class="form-group col-md-6">
          {{ Form::text('link1_button', $project->link1_button, ['class' => 'form-control', 'placeholder' => 'Link 1 Button Text']) }}
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          {{ Form::text('link2', $project->link2, ['class' => 'form-control', 'placeholder' => 'Link 2 (Github)']) }}
        </div>
        <div class="form-group col-md-6">
          {{ Form::text('link2_button', $project->link2_button, ['class' => 'form-control', 'placeholder' => 'Link 2 Button Text (Github)']) }}
        </div>
      </div>
      {{ Form::hidden('_method','PUT')}}
      {{ Form::submit('Submit', ['class'=>'btn btn-success']) }}
    {!! Form::close() !!}
  </div>
@endsection
