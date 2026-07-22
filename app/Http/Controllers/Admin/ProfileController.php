<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function index()
    {
        $profiles = Profile::all();
        return view('admin.profiles.index', compact('profiles'));
    }

    public function create()
    {
        return view('admin.profiles.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'school_name' => 'required|string|max:255',
            'welcome_message' => 'required|string',
            'description' => 'nullable|string',
            'principal_name' => 'required|string|max:255',
            'principal_message' => 'nullable|string',
            'principal_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'vision' => 'nullable|string',
            'mission' => 'nullable|string',
            'address' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
        ]);

        if ($request->hasFile('principal_photo')) {
            $validated['principal_photo'] = $request->file('principal_photo')->store('profiles', 'public');
        }

        Profile::create($validated);

        return redirect()->route('admin.profiles.index')
            ->with('success', 'Profil sekolah berhasil ditambahkan.');
    }

    public function show(Profile $profile)
    {
        return view('admin.profiles.show', compact('profile'));
    }

    public function edit(Profile $profile)
    {
        return view('admin.profiles.edit', compact('profile'));
    }

    public function update(Request $request, Profile $profile)
    {
        $validated = $request->validate([
            'school_name' => 'required|string|max:255',
            'welcome_message' => 'required|string',
            'description' => 'nullable|string',
            'principal_name' => 'required|string|max:255',
            'principal_message' => 'nullable|string',
            'principal_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'vision' => 'nullable|string',
            'mission' => 'nullable|string',
            'address' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
        ]);

        if ($request->hasFile('principal_photo')) {
            if ($profile->principal_photo) {
                Storage::disk('public')->delete($profile->principal_photo);
            }
            $validated['principal_photo'] = $request->file('principal_photo')->store('profiles', 'public');
        }

        $profile->update($validated);

        return redirect()->route('admin.profiles.index')
            ->with('success', 'Profil sekolah berhasil diperbarui.');
    }

    public function destroy(Profile $profile)
    {
        if ($profile->principal_photo) {
            Storage::disk('public')->delete($profile->principal_photo);
        }

        $profile->delete();

        return redirect()->route('admin.profiles.index')
            ->with('success', 'Profil sekolah berhasil dihapus.');
    }
}
