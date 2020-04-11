@extends('layouts.backend')

@section('content')
<div class="container" style="margin-top: 100px;">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                  <div style="margin-bottom: 20px;">
                    <a href="/projects/create" class="btn btn-primary" style="float: right;">Create Project</a>
                    <h3>Your Projects</h3>
                  </div>
                    <table class="table table-striped table-hover">
                      <thead>
                        <tr>
                          <th scope="col">Title</th>
                          <th scope="col">Edit</th>
                          <th scope="col">Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                        @if(count($projects) > 0)
                          @foreach($projects as $project)
                            <tr>
                              <td scope="row">{{$project->title}}</td>
                              <td><a href="/projects/{{$project->id}}/edit" class="btn btn-primary">Edit</a></td>
                              <td>
                                {!! Form::open(['action' => ['ProjectsController@destroy', $project->id], 'method' => 'POST']) !!}
                                  {{ Form::hidden('_method', 'DELETE') }}
                                  {{ Form::submit('DELETE', ['class' => 'btn btn-danger'])}}
                                {!! Form::close() !!}
                              </td>
                            </tr>
                          @endforeach
                        @else
                          <p>No Projects Found.</p>
                        @endif
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
