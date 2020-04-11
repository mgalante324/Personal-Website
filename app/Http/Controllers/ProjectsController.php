<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Project;

class ProjectsController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $projects = Project::orderBy('title', 'desc');
        // return view('dashboard')->with('projects', $projects);
        $projects = Project::all();
        return view('projects.index')->with('projects', $projects);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
          'title' => 'required',
          'description' => 'required'
        ]);

        // Create ProjectsController
        $project = new Project;
        $project->title = $request->input('title');
        $project->description = $request->input('description');
        $project->languages = $request->input('languages');
        $project->link1 = $request->input('link1');
        $project->link1_button = $request->input('link1_button');
        $project->link2 = $request->input('link2');
        $project->link2_button = $request->input('link2_button');

        $project->save();

        return redirect('/dashboard')->with('success', 'Project Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project = Project::find($id);
        return view('projects.show')->with('project', $project);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = Project::find($id);
        return view('projects.edit')->with('project', $project);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $this->validate($request, [
        'title' => 'required',
        'description' => 'required'
      ]);

      // Create ProjectsController
      $project = Project::find($id);
      $project->title = $request->input('title');
      $project->description = $request->input('description');
      $project->languages = $request->input('languages');
      $project->link1 = $request->input('link1');
      $project->link1_button = $request->input('link1_button');
      $project->link2 = $request->input('link2');
      $project->link2_button = $request->input('link2_button');

      $project->save();

      return redirect('/dashboard')->with('success', 'Project Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Project::find($id);
        $project->delete();
        return redirect('/dashboard')->with('success', 'Project Deleted');
    }
}
