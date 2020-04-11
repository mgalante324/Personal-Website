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
          I am most comfortable with Wordpress, but I'm always learning new ways to develop software, like this website! </p>
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

  <div style="text-align: center;">
    <h1>Resume</h1>
    <h4>Click the button to download or print my resume.</h4>
    <a href="pdf/MichaelGalante2020.pdf" class="btn btn-success" target="_blank">Resume</a>
  </div>
  <hr style="border-top: 3px double #292929; ">
  <!-- Header Area -->
  <div class="row">
    <div class="col-lg-12 centered">
      <h1>Michael Galante</h1>
      <p>IT Professional with 4 years experience in web development, digital marketing, and social media.</p>
    </div>
  </div>
  <!-- Body -->
  <div class="row">
    <div class="col-lg-8">
      <h4 class="blue-title">Experience</h4>
      <h5><b>Peoples Products</b>, Newington, CT — <i>IT Manager</i></h5>
      <p>SEPTEMBER 2016 - PRESENT</p>
      <ul>
        <li>Develop web applications to improve the functionality and ease of use of outdated company systems.</li>
        <li>Manage our Social Media Manager.</li>
        <li>Work with the Marketing department to direct an attractive, consistent message.</li>
      </ul>
      <h5><b>Peoples Products</b>, Newington, CT — <i>Junior Web Developer and Social Media Manager</i></h5>
      <p>MAY 2016 - SEPTEMBER 2016</p>
      <ul>
        <li>Managed social media accounts on Facebook, Twitter, Instagram, LinkedIn and Youtube.</li>
        <li>Managed and updated websites in WordPress CMS.</li>
      </ul>
      <h4 class="blue-title">Projects</h4>
      <h5><b>Encompassing Sales</b> — <i>In progress</i></h5>
      <ul>
        <li>Building a website for home remodeling companies to improve efficiency of in-office work. </li>
        <li>This website includes:</li>
          <ul>
            <li>Scripts for call center representatives.</li>
            <li>A system to enter, view, and update leads.</li>
            <li>A daily/weekly/monthly schedule of appointments.</li>
            <li>The finished product will include a section of the site dedicated to providing timely detailed reporting.</li>
          </ul>
      </ul>
      <h5><b>Recruiting Platform</b></h5>
      <ul>
        <li>Built a web platform that consolidates all employee recruiting efforts to one place.</li>
        <li>The website contains:</li>
          <ul>
            <li>All applicants that apply for jobs.</li>
            <li>An interview schedule as well as notification system for hiring managers.</li>
            <li>All the job ads currently running along with metrics.</li>
          </ul>
      </ul>
      <h5><b>Lead Management System</b></h5>
      <ul>
        <li>Built a system to improve lead management and at same time reduce costs significantly by replacing expensive purchased software.</li>
        <li>The following are functions of this system:</li>
          <ul>
            <li>Took in leads from all of our websites and sent out notifications via text and email.</li>
            <li>Injected leads directly into our CRM.</li>
            <li>Has a front end display for in-office administration use. </li>
          </ul>
      </ul>
    </div>
    <div class="col-lg-4">
      <h4 class="blue-title">Skills</h4>
      <p>PHP, HTML, CSS, MySQL, WordPress, Laravel</p>
      <p>Adobe Photoshop, Illustrator, InDesign</p>
      <p>Facebook, Twitter, Instagram, Youtube for business marketing</p>
      <p>Email Marketing (Constant Contact)</p>
      <h4 class="blue-title">Education</h4>
      <h5><b>Assumption College</b>, Worcester, MA — <i>B.A. Computer Science</i></h5>
      <p>AUGUST 2012 - MAY 2016</p>
      <p>In my courses we wrote many programs to learn the important aspects of object oriented programming which helps me in my current role to build web applications and continue to learn web development on the job.</p>
    </div>
  </div>
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
