<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Validation\Rule;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.settings.project.index', ['projects' => Project::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //MK 107861

        return view('admin.settings.project.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => [
                'required',
                'max:100',
                Rule::unique('projects'),
            ],
            'code' => [
                'required',
                'max:15',
                Rule::unique('projects'),
            ],
        ]);

        $input = $request->all();

        Project::create($input);

        return redirect()
                ->route('admin.projects.index')
                ->with('status', 'Project created successful!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.settings.project.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $projectObj = Project::findOrFail($id);

        return view('admin.settings.project.edit', [
            'projects' => Project::all(),
            'projectObj' => $projectObj,
        ]);
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
        $project = Project::findOrFail($id);

        $request->validate([
            'name' => [
                'required',
                'max:100',
                Rule::unique('projects')->ignore($id),
            ],
            'code' => [
                'required',
                'max:15',
                Rule::unique('projects')->ignore($id),
            ],
        ]);

        $input = $request->all();

        $project->fill($input)->save();

        return redirect()
                ->route('admin.projects.index')
                ->with('status', 'Project updated successful!');
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
        Session::flash('warning','Your Project was successfully Deleted!');
        return redirect()->back();
    }
}
