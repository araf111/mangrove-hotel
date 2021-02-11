<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Models\Permission;
use App\Models\Department;
use App\Models\Designation;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\ImageManagerStatic as Image;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {       

        return view('admin.settings.users.index',[
                'users' => User::all(),
                'roles' => Role::all(),
                'permissions' => Permission::all(),
                'departments' => Department::pluck('name','id'),
                'designations' => Designation::pluck('name','id'),
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.settings.users.create');
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
            ],
            'mobile' => [
                'required',
                'max:15',
                Rule::unique('users'),
            ],
            'email' => [
                'required',
                'max:50',
                Rule::unique('users'),
            ],
            'password' => [
                'required',
                'min:6',
            ],
            'role' => 'required',
            'department_id' => 'required',
            'designation_id' => 'required',
            
        ]);

        $input = $request->only(['name', 'email', 'mobile', 'department_id', 'designation_id']);

        $password = $request->input('password');

        $input['password'] = Hash::make($password);   


        if($request->hasFile('photo')) {

            $image       = $request->file('photo');
            $filename    = $image->getClientOriginalName();

            $image_resize = Image::make($image->getRealPath());              
            $image_resize->resize(160, 160);
            $image_full_name = 'uploads/users/' .$filename;
            $image_resize->save(public_path($image_full_name));

            $input['photo'] = $image_full_name;

        }

        $user = User::create($input);    

       

        $role = $request->input('role');
        if($user){
            $user->roles()->attach($role);
        }    

        return redirect()
                ->route('admin.users.index')
                ->with('status', 'User created successful!');     

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.settings.users.show',[
            'user' => User::findOrFail($id),
            'roles' => Role::all(),                
            'departments' => Department::pluck('name','id'),
            'designations' => Designation::pluck('name','id'),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.settings.users.edit',[
            'user' => User::findOrFail($id),
            'roles' => Role::all(),                
            'departments' => Department::pluck('name','id'),
            'designations' => Designation::pluck('name','id'),
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

        $user = User::findOrFail($id);

        $request->validate([
            'name' => [
                'required',
                'max:100',
            ],
            'mobile' => [
                'required',
                'max:15',
                Rule::unique('users')->ignore($id),
            ],
            'email' => [
                'required',
                'max:50',
                Rule::unique('users')->ignore($id),
            ],
            'password' => [
                'nullable',
                'min:6',
            ],
            'role' => 'required',
            'department_id' => 'required',
            'designation_id' => 'required',
            
        ]);

        $input = $request->only(['name', 'email', 'mobile', 'department_id', 'designation_id','active']);

       

        if ($request->filled('password')) {

            $password = $request->input('password');             
            $input['password'] = Hash::make($password);   
        } 

        if($request->hasFile('photo')) {

            $image       = $request->file('photo');
            $filename    = $image->getClientOriginalName();

            $image_resize = Image::make($image->getRealPath());              
            $image_resize->resize(160, 160);
            $image_full_name = 'uploads/users/' .$filename;
            $image_resize->save(public_path($image_full_name));

            $input['photo'] = $image_full_name;

        }

        $user->fill($input)->save(); 

        $role = $request->input('role');
        if($user){
            $user->roles()->sync($role);
        }    

        return redirect()
                ->route('admin.users.index')
                ->with('status', 'User updated successful!'); 
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
