<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function roleCreate(){
        $permissions = Permission::get();
        return view('backend.content.role.roleCreate', compact('permissions'));
    }
    public function roleStore(Request $request){

        $request->validate([
            'name' => 'required|unique:roles'
        ]);
        $role = Role::create([ 'name' => $request->name ]);

        if(!empty($request->permission)){
            foreach($request->permission as $name){
                $role->givePermissionTo($name);
            }
        }
        return redirect()->route('role.list');
    }
    public function roleList(){
        return view('backend.content.role.roleList');
    }
}
