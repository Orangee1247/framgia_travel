<?php

namespace App\Http\Controllers;

use App\Province;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function provinces()
    {
        $provinces = Province::paginate(9);

        return view('pages.province.list', compact('provinces'));
    }

    public function hotelsList()
    {
        $provinces = Province::paginate(9);

        return view('pages.service.hotels.list', compact('provinces'));
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

        return view('pages.province.profile', compact('provinces'));
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
        dd($request);

        return redirect(route('requestGet'));
    }
}
