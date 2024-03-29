<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();
        return view('projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $project = new Project();

        $project->name = $request->input('name');
        $project->used_technologies = $request->input('used_technologies');
        $project->create_date = $request->input('create_date');
        $project->start_date = $request->input('start_date');
        $project->completed_date = $request->input('completed_date');
        $project->status = $request->input('status');
        $project->description = $request->input('description');
        $project->web_site = $request->input('web_site');
        $project->image_link = $request->input('image_link');

        $project->save();

        return redirect('/');
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
        return view ('projects.show', compact('project'));
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
        return view('projects.edit', compact('project'));
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
        $project = Project::find($id);

        $project->name = $request->input('name');
        $project->used_technologies = $request->input('used_technologies');
        $project->create_date = $request->input('create_date');
        $project->start_date = $request->input('start_date');
        $project->completed_date = $request->input('completed_date');
        $project->status = $request->input('status');
        $project->description = $request->input('description');
        $project->web_site = $request->input('web_site');
        $project->image_link = $request->input('image_link');

        $project->save();
        return redirect()->route('project.show', $project->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Project ::find($id);
        $project->delete();
        return redirect()->route('projects.index');
        // return redirect()->route('projects.index')->with('success', 'Fumetto eliminato con successo.');
    }   

}
