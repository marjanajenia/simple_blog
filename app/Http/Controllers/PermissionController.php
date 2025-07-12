<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    public function permissionstore(Request $request){
        $request->validate([
            'name' => 'required'
        ]);
        Permission::create([
            'name' => $request->name,
        ]);
        return redirect()->route('permission.list');
    }
    public function create(){
        return view('backend.content.permission.create');
    }
    public function permissionList(){
        $permissions = Permission::orderBy('id', 'desc')->get();
        return view('backend.content.permission.list', compact('permissions'));
    }
}
