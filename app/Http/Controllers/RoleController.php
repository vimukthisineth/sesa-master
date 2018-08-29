<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;

class RoleController extends Controller
{
    public function validate_user($id,$stu_id){
        $user=User::findorfail($id);
        $user->is_confirmed=1;
        $user->save();

        return redirect('/');
    }



}
