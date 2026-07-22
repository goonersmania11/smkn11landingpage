<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $profiles = Profile::all();
        return view('admin.profile.index', compact('profiles'));
    }

    public function store(Request $request)
{
    $data = $request->except('_token');

    Profile::create($data);

    return redirect()->route('profile.index');
}

    public function show(Profile $profile)
    {
        //
    }

    public function edit(Profile $profile)
    {
        return view('admin.profile.edit', compact('profile'));
    }

    public function update(Request $request, Profile $profile)
{
    $data = $request->except('_token', '_method');

    $profile->update($data);

    return redirect()->route('profile.index');
}


    public function destroy(Profile $profile)
    {
        $profile->delete();

        return redirect()->route('profile.index');
    }
}