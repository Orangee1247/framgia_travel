<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller {
    public function userList(){
        $users=User::all();
        return view('admin.user_list', compact('users',$users));
    }
}