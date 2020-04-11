<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class PagesController extends Controller
{
    public function index() {
      // $title = 'Mike Galante';
      //return view('pages.index', compact('title'));

      // return view('pages.index')->with('title', $title);
      // $projects = Project::all();
      $projects = Project::orderBy('title','desc')->paginate(5);
      return view('pages.index')->with('projects', $projects);
    }

    // public function about() {
    //   //Pass in multiple values to a view
    //   $data = array(
    //     'title' => 'About',
    //     'description' => 'This is the description for the about page.',
    //     //pass an array inside of this array
    //     'features' => ['Introduction', 'Skills', 'Projects', 'Resumes']
    //   );
    //   return view('pages.about')->with($data);
    // }

    public function sendEmail(Request $request) {

      $this->validate($request, [
        'full_name' => 'required',
        'email' => 'required',
        'subject' => 'required'
      ]);

      $name = $request->input('full_name');
      $email = $request->input('email');
      $subject = $request->input('subject');
      $message = $request->input('message');

      $msg = $name . "/r/n" . $email . "/r/n" . $message;

      if(mail("mgalante324@gmail.com",$subject,$msg)) {
        return redirect('/')->with('success', 'Email Sent');
      } else {
        return redirect('/login')->with('success', 'Email Not Sent');
      }

    }
}
