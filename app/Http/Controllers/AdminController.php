<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddRolesAndPermissionRequest;
use App\Http\Requests\UpdateRolesAndPermissionRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

use function PHPUnit\Framework\isEmpty;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::paginate(8);
        return view('admin.index', compact('users'));
    }

    public function create()
    {
        $permissions = Permission::get();
        $roles = Role::get();
        return view('admin.create', compact('roles', 'permissions'));
    }

    public function store(AddRolesAndPermissionRequest $request)
    {
        $request->validated();
        $input = $request->input();

        $user = new User;
        $user->name = $input['name'];
        $user->email = $input['email'];
        $user->password = Hash::make($input['password']);
        $user->role_id = $input['role_id'];
        $user->save();
        $role = Role::findById($input['role_id']);


        $roles = $user->assignRole($role->name);
        $roles->syncPermissions($input['permission_id']);

        return redirect()->route('admin.index')->with('success', 'Successfully added user');
    }

    public function view($id)
    {
        $user = User::find($id);
        // dd($user);
        // $userId = $user->id;
        $permissions = $user->getAllPermissions();
        return view('admin.view', compact('user', 'permissions'));
    }

    public function edit($id)
    {
        $user = User::find($id);
        $permissions = Permission::get();
        $allPermissions = $user->getPermissionNames();
        // dd($allPermissions);
        $roles = Role::get();
        return view('admin.edit', compact('permissions', 'roles', 'user', 'allPermissions'));
    }

    public function update(UpdateRolesAndPermissionRequest $request, $id)
    {
        $request->validated();
        $input = $request->all();
        $user = User::find($id);
        $user->name = $input['name'];
        $user->email = $input['email'];
        $user->role_id = $input['role_id'];
        $user->update();

        $role = Role::findById($input['role_id']);
        $roles = $user->syncRoles($role->name);
        $roles->syncPermissions($input['permission_id']);

        return redirect()->route('admin.index')->with('success', 'Successfully updated user');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('admin.index')->with('success', 'Successfully deleted user');
    }
}
