<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    public function index()
    {
        $permissions = Permission::all();
        return view('permission.index', compact('permissions'));
    }

    public function create()
    {
        return view('permission.create');
    }

    public function store(Request $request)
    {
        $permission = new Permission;
        $permission->fill($request->all());
        $permission->save();

        return redirect()->route('permission.index')->with('success', 'Successfully added permission');
    }

    public function destroy($id)
    {
        $permission = Permission::find($id);
        $permission->delete();
        return redirect()->route('permission.index')->with('success', 'Successfully deleted permission');
    }
}
