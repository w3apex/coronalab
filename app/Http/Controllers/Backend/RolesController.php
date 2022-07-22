<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesController extends Controller
{   
    public $user;

    public function __construct()
    {
        $this->middleware(function($request, $next){
            $this->user = Auth::guard('admin')->user();
            return $next($request);
        });
    }

    public function index()
    {   
        // if (is_null($this->user) || !$this->user->can('roles.index')) {
        //     abort(403, "Sorry !! You are unauthorized to view any role.");
        // }

        $roles = Role::all();
        return view('backend.pages.roles.index', compact('roles'));
    }

    public function create()
    {   
        // if (is_null($this->user) || !$this->user->can('roles.create')) {
        //     abort(403, "Sorry !! You are unauthorized to create any role.");
        // }

        $all_permissions  = Permission::all();
        $permission_groups = User::getpermissionGroups();
        return view('backend.pages.roles.create', compact('all_permissions', 'permission_groups'));
    }

    public function store(Request $request)
    {   
        // if (is_null($this->user) || !$this->user->can('roles.create')) {
        //     abort(403, "Sorry !! You are unauthorized to create any role.");
        // }

        // Validation Data
        $request->validate([
            'name' => 'required|max:100|unique:roles'
        ], [
            'name.requried' => 'Please give a role name'
        ]);

        // Process Data
        $role = Role::create(['name' => $request->name, 'guard_name' => 'admin']);

        // $role = DB::table('roles')->where('name', $request->name)->first();
        $permissions = $request->input('permissions');

        if (!empty($permissions)) {
            $role->syncPermissions($permissions);
        }

        session()->flash('success', 'Role has been created !!');
        return back();
    }

    public function edit($id)
    {   
        // if (is_null($this->user) || !$this->user->can('roles.edit')) {
        //     abort(403, "Sorry !! You are unauthorized to edit any role.");
        // }

        $role = Role::findById($id,'admin');
        $all_permissions = Permission::all();
        $permission_groups = User::getpermissionGroups();
        return view('backend.pages.roles.edit', compact('role', 'all_permissions', 'permission_groups'));
    }

     public function update(Request $request, $id)
    {   
        // if (is_null($this->user) || !$this->user->can('roles.edit')) {
        //     abort(403, "Sorry !! You are unauthorized to edit any role.");
        // }

        // Validation Data
        $request->validate([
            'name' => 'required|max:100|unique:roles,name,' . $id
        ], [
            'name.requried' => 'Please give a role name'
        ]);

        $role = Role::findById($id,'admin');
        $permissions = $request->input('permissions');

        if (!empty($permissions)) {
            $role->name = $request->name;
            $role->save();
            $role->syncPermissions($permissions);
        }

        session()->flash('success', 'Role has been updated !!');
        return back();
    }

    public function destroy($id)
    {   
        // if (is_null($this->user) || !$this->user->can('roles.delete')) {
        //     abort(403, "Sorry !! You are unauthorized to delete any role.");
        // }

        $role = Role::findById($id,'admin');
        if (!is_null($role)) {
            $role->delete();
        }

        session()->flash('success', 'Role has been deleted !!');
        return back();
    }
}
