<?php

namespace App\Http\Controllers;

use App\Models\project;
use App\Http\Requests\StoreprojectRequest;
use App\Http\Requests\UpdateprojectRequest;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();

        return view("admin.index", compact("projects"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreprojectRequest $request)
    {
        $request->validated();
        $newProject = new Project();
        $newProject->fill($request->all());
        $newProject->save();
        return redirect()->route('projects.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(project $project)
    {
        return view("admin.show", compact("project"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreprojectRequest $request, project $project)
    {
        $request->validated();
        $project->fill($request->all());
        $project->save();

        return redirect()->route("projects.show", $project->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(project $project)
    {
        //
    }
}
