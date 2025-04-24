<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name'=> 'required',
            'email'=>'required|email',
            'phone'=> 'required',
            'user'=>'required',
            'photo'=>'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);
        

        $imagePath = $request->file('photo')->store('profiles', 'public');

        return back()->with('success', 'Profile saved successfully.');
    }
}
