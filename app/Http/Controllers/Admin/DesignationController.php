<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\Designation;
use Illuminate\Validation\Rule;

class DesignationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.settings.designations.index', ['designations' => Designation::all(), 'departments' => Department::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.settings.designations.create');
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
                Rule::unique('designations'),
            ],
            'department_id'=>'required'
        ]);

        $input = $request->all();
  
        Designation::create($input);

        return redirect()
                ->route('admin.designations.index')
                ->with('status', 'Designation created successful!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.settings.designations.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $designation = Designation::findOrFail($id);

        return view('admin.settings.designations.edit', [
            'designations' => Designation::all(), 
            'departments' => Department::all(),
            'designationObj' => $designation,
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

        $designation = Designation::findOrFail($id);

        $request->validate([
            'name' => [
                'required',
                'max:100',
                Rule::unique('designations')->ignore($id),
            ],
            'department_id'=>'required'
        ]);

        $input = $request->all();
  
        $designation->fill($input)->save();

        return redirect()
                ->route('admin.designations.index')
                ->with('status', 'Designation "'.$designation->name.'" updated successful!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $designation = Designation::findOrFail($id);
        $name = $designation->name;
        $designation->delete();

        return redirect()
                ->route('admin.designations.index')
                ->with('status', 'Designation "'.$name.'" deleted successful!');
    }

    public function get_by_department(Request $request)
    {
        if (!$request->department_id) {
            $html = '<option value="">please Select</option>';
        } else {
            $html = '';
            $designations = Designation::where('department_id', $request->department_id)->get();
            foreach ($designations as $designation) {
                $html .= '<option value="'.$designation->id.'">'.$designation->name.'</option>';
            }
        }

        return response()->json(['html' => $html]);
    }
}
