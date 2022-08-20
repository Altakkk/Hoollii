<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserManagementController extends Controller
{
    // index page
    public function index() {
        $user_table = User::all();
        return view ('usermanagement.usertable',compact('user_table'));
    }
}
