<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Models\PlanLocation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function showProfile()
    {
        $user = Auth::user();
        $plans = Plan::where('user_id', '=', $user->id)->get();
        foreach ($plans as $plan)
            $locations = PlanLocation::where('plan_id', '=', $plan->id)->get();

        return view('pages.user.profile', compact('user', 'plans', 'locations'));
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::user();
        $user->update($request->all());
        $user->save();

        return redirect(route('user.update', Auth::user()->id));
    }
}
