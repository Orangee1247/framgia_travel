<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

//    public function showProfile()
//    {
//        $user = Auth::user();
//        $plans = Plan::where('user_id', '=', $user->id)->get();
//        foreach ($plans as $plan)
//            $locations = PlanLocation::where('plan_id', '=', $plan->id)->get();
//
//        return view('pages.user.profile', compact('user', 'plans', 'locations'));
//    }
    public function showProfile()
    {
        $user = Auth::user();
        $plans = Plan::with('plan_location.province')
            ->where('user_id', $user->id)
            ->orderBy('id', 'desc')->get();
//        $plans = DB::table('plans')->join('plan_locations', 'plans.id', '=', 'plan_locations.plan_id')
//            ->join('provinces', 'provinces.id', '=', 'plan_locations.province_id')->where('plans.user_id', '=', $user->id)
//            ->orderBy('plan_id', 'DESC')
//            ->get();

        return view('pages.user.profile', compact('user', 'plans'));
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::user();
        $user->update($request->all());
        $user->save();

        return redirect(route('user.update', Auth::user()->id));
    }
}
