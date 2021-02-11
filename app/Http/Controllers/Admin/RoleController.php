<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\Permission;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //dd();
        return view('admin.settings.roles.index', [
            'roles_permissions' => Role::with('permissions')->get(),
            'permissions' => Permission::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.settings.roles.create');
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
                'max:50',
                Rule::unique('roles'),
            ],
            'label' => [
                'required',
                'max:50',
                Rule::unique('roles'),
            ],
            'permission' => 'required'
            
        ]);
        

        
        $input = $request->only(['name', 'label']);       

        $role = Role::create($input);       
        $permission = $request->input('permission');
        if($role){
            $role->permissions()->attach($permission);
        }    

        return redirect()
                ->route('admin.roles.index')
                ->with('status', 'Role created successful!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.settings.roles.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.settings.roles.edit',[
            'roles_permissions' => Role::with('permissions')->get(),
            'permissions' => Permission::all(),
            'role' => Role::find($id)
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

        $role = Role::findOrFail($id);

        $request->validate([
            'name' => [
                'required',
                'max:50',
                Rule::unique('roles')->ignore($id),
            ],
            'label' => [
                'required',
                'max:50',
                Rule::unique('roles')->ignore($id),
            ],
            'permission' => 'required'
            
        ]);
        

        
        $input = $request->only(['name', 'label']);       

        $role->fill($input)->save();       
        $permission = $request->input('permission');
        if($role){
            $role->permissions()->sync($permission);
            //$role->permissions()->attach($permission);
        }  

        return redirect()
                ->route('admin.roles.index')
                ->with('status', 'Role updated successful!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
