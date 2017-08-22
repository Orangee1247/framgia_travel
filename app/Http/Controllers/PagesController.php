<?php

namespace App\Http\Controllers;

use App\Models\Province;
use App\Models\ProvinceGallery;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    public function provinces()
    {
        $provinces = Province::paginate(9);

        return view('pages.province.list', compact('provinces'));
    }

//    public function hotelsList()
//    {
//        $provinces = Province::paginate(9);
//
//        return view('pages.service.hotels.list', compact('provinces'));
//    }

    public function hotelsList(Request $request)
    {
        $hotels = Service::where('category_id','=',1);

        return view('pages.service.hotels.list', compact('hotels'));
    }

    public function hotels(Request $request)
    {
        $key = $request->inputSearch;
        $provinces = Province::where('name', 'like', "%$key%")->take(30)->paginate(5);

        return view('pages.service.hotels.search', compact('provinces', 'key'));
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

        return view('pages.action.request.request', compact('provinces'));
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

        return redirect(route('requestGet'));
    }
}
