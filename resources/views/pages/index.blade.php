@extends('layouts.app')
<!-- Header/Navigavtion Section-->
<section class="header">
  <div class="overlay"></div>
  <div class="flex-center">
    <div class="centered">
      <div class="title">Mike Galante</div>
      <ul class="list-inline">
        <li class="list-inline-item"><a href="#introduction" class="links">Introduction</a></li>
        <li class="list-inline-item"><a href="#projects" class="links">Projects</a></li>
        <li class="list-inline-item"><a href="#resume" class="links">Resume</a></li>
        <li class="list-inline-item"><a href="#contact" class="links">Contact</a></li>
      </ul>
    </div>
    <div class="arrowScroll">
      <a href="#introduction">
      <span></span>
      <span></span></a>
    </div>
  </div>
</section>

<!-- Intro Section -->
<section id="introduction" class="intro">
  <div class="row fh">
    <div class="col-md-6 box-left">
      <div class="text-wrapper-left">
        <h1>Hello</h1>
        <h3>MY NAME IS MIKE</h3>
      </div>
    </div>
    <div class="col-md-6 box-right">
      <div class="text-wrapper-right">
        <p>I'm an IT Professional based in Connecticut. I enjoy making software with minimal, yet effective designs.
          I'm always learning new ways to develop software, like this website! </p>
      </div>
    </div>
  </div>
</section>

<!-- Project Section -->
<section id="projects" class="section-body">
  <h1>Projects</h1>
  <table class="table table-striped table-hover">
    <thead>
      <tr>
        <th scope="col">Title</th>
        <th scope="col">Description</th>
        <th scope="col">Language(s)</th>
        <th scope="col">Links</th>
      </tr>
    </thead>
    <tbody>
      @foreach($projects as $project)
        <tr>
          <td scope="row">{{ $project->title }}</td>
          <td>{{ $project->description }}</td>
          <td>{{ $project->languages }}</td>
          <td>
            <a href="{{ $project->link1 }}" target="_blank"><button type="button" class="btn btn-success">{{ $project->link1_button}}</button></a>
            <a href="{{ $project->link2 }}" target="_blank"><button type="button" class="btn btn-primary">{{ $project->link2_button}}</button></a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
  {{ $projects->links() }}
</section>

<!-- Resume Section -->
<section id="resume" class="section-body">

  <div class="resume-section">
    <a href="pdf/MichaelGalante2020.pdf" class="btn btn-outline-success btn-lg" target="_blank">View Resume</a>
  </div>
<<<<<<< HEAD

=======
  
>>>>>>> ccab2b543cfd046a408de427eb5933eb4faf74f4
</section>

@include('inc.messages')

<!-- Contact Section -->
<section id="contact" style="text-align: center;" class="section-body">
  <h1>Contact</h1>
  <h4>Feel free to reach out to me on the form below.</h4>
  {!! Form::open(['action' => 'PagesController@sendEmail', 'method' => 'POST']) !!}
    <div class="form-group">
      {{ Form::text('full_name', '', ['class' => 'form-control', 'placeholder' => 'Full Name']) }}
    </div>
    <div class="form-group">
      {{ Form::email('email', '', ['class' => 'form-control', 'placeholder' => 'Email']) }}
    </div>
    <div class="form-group">
      {{ Form::text('subject', '', ['class' => 'form-control', 'placeholder' => 'Subject']) }}
    </div>
    <div class="form-group">
      {{ Form::textarea('message', '', ['class' => 'form-control', 'placeholder' => 'Message']) }}
    </div>
    {{ Form::submit('Send', ['class'=>'btn btn-success']) }}
  {!! Form::close() !!}
</section>
<!-- Footer -->
<footer>
  <div class="footer-icons">
    <a href="https://www.linkedin.com/in/michael-galante-55917baa/" title="LinkedIn" target="_blank"><i class="fab fa-linkedin-in fa-2x"></i></a>
    <a href="https://github.com/mgalante324" title="Gtihub" target="_blank"><i class="fab fa-github fa-2x"></i></a>
  </div>
</footer>
@section('content')
@endsection
