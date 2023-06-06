<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use App\Models\PermissionRole;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use function PHPUnit\Framework\isEmpty;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function create()
    {
        $permissions = Permission::all();
        $roles = Role::all();
        return view('admin.create', compact('roles', 'permissions'));
    }

    public function store(Request $request)
    {
        dd($request->all());
        $user = new User;
        // $password = $request->input('password');
        // $user->name = $request->input('name');
        // $user->email = $request->input('email');
        // $user->password = Hash::make($password);
        // $user->role_id = $request->input('role_id');
        // $user->save();

        $permission = new PermissionRole;
        // $getPermission = $request->input('permission_id');

        $permission->role_id = $request->input('role_id');
        dd($permission);

        $permission->save();
    }
}
