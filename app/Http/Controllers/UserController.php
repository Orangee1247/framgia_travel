<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function updateProfile(Request $request)
    {
        $user = Auth::user();
        $user->name = $request->inputName;
        $user->date_of_birth = $request->inputDob;
        $user->gender = $request->gender;
        $user->address = $request->inputAddress;
        $user->phone = $request->inputPhone;
        $user->self_describe = $request->inputBio;
        $user->save();

        return redirect(route('user.update', Auth::user()->id));
    }
}
