<?php

namespace App\Http\Controllers;

use App\RolePermission;
use Illuminate\Http\Request;
use App\Role;
use App\Permission;

class RolePermissionController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        $permissions = Permission::all();
        return view('role_permission', ["roles" => $roles, "permissions" => $permissions]);
    }

    public function store(Request $request) {
    	$keys = array_keys($request->all());
    	unset($keys[0]);
    	$rp_save = [];
    	if (count($keys) > 0) {
	    	foreach ($keys as $value) {
	    		$data = explode("-", $value);
	    		$rp = new RolePermission();
	    		$rp->permission = $data[0];
	    		$rp->role_id = $data[1];
	    		$rp->permission_id = $data[2];
	    		$rp_save[] = $rp->save();
	    	}
	    	if ((count(array_unique($rp_save)) == 1) && ($rp_save[0] == 1)) {
		    	$response['status'] = "Success";
	    		return $response;
	    	}
	    	$response['status'] = "Fail";
    	}
    $response['status'] = "Data Empty";
    return $response;
    }
}
