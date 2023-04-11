<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return view('pages.profile.index',[
            'title' => 'Profile'
        ]);
    }

    public function update()
    {
        request()->validate([
            'name' => ['required'],
            'avatar' => ['image','mimes:jpg,png,jpeg']
        ]);

        $data = request()->except(['email','avatar']);
        if(request()->file('avatar'))
        {
            $data['avatar'] = request()->file('avatar')->store('user','public');
        }

        auth()->user()->update($data);
        return redirect()->back()->with('success','Profile berhasil di update');
    }
}
