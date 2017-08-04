<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    public function showProfile()
    {
        $user = Auth::user();

        return view('pages.user.profile', compact('user'));
    }

    public function city()
    {
        return view('pages.city');
    }
}
