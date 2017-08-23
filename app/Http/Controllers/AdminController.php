<?php

namespace App\Http\Controllers;

use App\Models\Province;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function userList()
    {
        $users = User::where('level', '<>', -1)->get();

        return view('admin.users.list', compact('users'));
    }

    public function userBlock()
    {
        $users = User::where('level', -1)->get();

        return view('admin.users.blocked', compact('users'));
    }

    public function blockUser(Request $request)
    {
        $block = User::find($request->id);
        $block->level = -1;
        $block->update();

        return redirect()->route('userBlock');
    }

    public function unblockUser(Request $request)
    {
        $unblock = User::find($request->id);
        $unblock->level = 0;
        $unblock->update();

        return redirect()->route('userList');
    }

    public function provinceList()
    {
        $provinces = Province::all();

        return view('admin.provinces.list', compact('provinces'));
    }

    public function provinceGetAdd()
    {
        return view('admin.provinces.add');
    }

    public function provincePostAdd(Request $request)
    {
        $province = new Province();
        $province->fill($request->all());
        $province->save();

        return redirect(route('provinceShowList'));
    }

    public function provinceDelete(Request $request)
    {
        $province = Province::find($request->id);
        $province->delete();

        return redirect(route('provinceShowList'));
    }

    public function provinceGetEdit(Request $request)
    {
        $province = Province::find($request->id);

        return view('admin.provinces.edit', compact('province'));
    }

    public function provincePostEdit(Request $request)
    {
        $province = Province::find($request->id);
        $province->update($request->all());
        $province->save();

        return redirect(route('provinceShowList'));
    }
}
