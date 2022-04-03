<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::get();
    	return view('role.index',compact('roles'));
    }

    public function create()
    {
    	return view('role.create');
    }

    public function store(Request $request)
    {
    	$input = $request->except('_token');
        $input['role_slug'] = strtolower(str_replace(' ', '-', $input['role_name']));
    	Role::create($input);
    	return redirect('admin/role');
    }

    public function edit($id)
    {
        $role = Role::find($id);
        return view('role.edit',compact('role'));
    }

    public function update(Request $request,$id)
    {
        $input = $request->except('_token');
        $input['role_slug'] = strtolower(str_replace(' ', '-', $input['role_name']));
        Role::find($id)->update($input);
        return redirect('admin/role');
    }
    
    
}
