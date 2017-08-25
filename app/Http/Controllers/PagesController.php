<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Plan;
use App\Models\PlanLocation;
use App\Models\Province;
use App\Models\ProvinceGallery;
use App\Models\Service;
use App\Models\ServiceGallery;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    public function provinces()
    {
        $provinces = Province::paginate(9);

        return view('pages.province.list', compact('provinces'));
    }

    public function hotelsList(Request $request)
    {
        $provinces = Province::where('name', '=', $request->name)->first();

        $hotels = Service::where('category_id', '=', 1)
            ->where('province_id', '=', $provinces->id)
            ->get();

        return view('pages.service.hotels.list', compact('hotels', 'provinces'));
    }

    public function hotels(Request $request)
    {
        $key = $request->inputSearch;
        $provinces = Province::where('name', 'like', "%$key%")->take(30)->paginate(5);

        return view('pages.service.hotels.search', compact('provinces', 'key'));
    }

    public function hotelPF(Request $request)
    {
        $hotel = Service::where('name', '=', $request->name1)->first();

        $images = ServiceGallery::where('service_id', '=', $hotel->id)->get();

        $comments = Comment::where('service_id', '=', $hotel->id)->get();

        $users = User::join('comments', 'users.id', '=', 'comments.user_id')
            ->where('comments.service_id', '=', $hotel->id)->get();

        $province = $request->name;

        return view('pages.service.hotels.profile', compact('hotel', 'images', 'province', 'comments', 'users'));
    }

    public function provincePF(Request $request)
    {
        $provinces = Province::where('name', '=', $request->name)->first();

        $images = ProvinceGallery::where('province_id', '=', $provinces->id)->get();

        return view('pages.province.profile', compact('provinces', 'images'));
    }

    public function showAdmin()
    {
        return view('admin.layouts.master');
    }

    public function requestGet()
    {
        $provinces = Province::all();

        return view('pages.action.request.add', compact('provinces'));
    }

    public function requestPost(Request $request)
    {
        $choices = $request->proChoice;
        $plan = new Plan();
        $plan->fill($request->all());
        $plan->user_id = Auth::user()->id;
        $plan->save();
        foreach ($choices as $choice) {
            $pl = new PlanLocation();
            $pl->province_id = $choice;
            $pl->plan_id = $plan->id;
            $pl->save();
        }

        return redirect(route('user.profile', Auth::user()->id));
    }

    public function requestEditGet(Request $request)
    {
        $plann = Plan::with('plan_location')->find($request->id);
        $choices = $plann->plan_location;
        $provinces = Province::all();
//        $choices = DB::table('plans')->join('plan_locations', 'plans.id', '=', 'plan_locations.plan_id')
//            ->join('provinces', 'provinces.id', '=', 'plan_locations.province_id')->where('plans.id', '=', $request->id)
//            ->get();

        return view('pages.action.request.edit', compact('plann', 'provinces', 'choices'));
    }

    public function requestEditPost(Request $request)
    {
        $plann = Plan::find($request->id);
        $plann->update($request->all());
        $plann->save();
        $choices = is_array($request->proChoice) ? $request->proChoice : [];
        $deletes = PlanLocation::where('plan_id', '=', $request->id)->get();
        foreach ($deletes as $delete) {
            $delete->delete();
        }
        foreach ($choices as $choice) {
            $pl = new PlanLocation();
            $pl->province_id = $choice;
            $pl->plan_id = $request->id;
            $pl->save();
        }

        return redirect(route('user.profile', Auth::user()->id));
    }

    public function requestDelete(Request $request)
    {
        $delete = Plan::find($request->id);
        $delete->delete();

        return redirect(route('user.profile', Auth::user()->id));
    }
}

