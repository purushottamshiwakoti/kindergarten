<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        return view('roles.index', compact('roles'));
    }

    public function create()
    {
        return view('roles.create');
    }

    public function store(Request $request)
    {
        $role = new Role;
        $role->fill($request->all());
        $role->save();

        return redirect()->route('role.index')->with('success', 'Successfully added role');
    }
}
