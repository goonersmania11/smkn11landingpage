<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\guru;
use Illuminate\Support\Facades\Storage;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    $guru = Guru::latest()->paginate(10);
    return view('admin.guru.index', compact('guru'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    return view('admin.guru.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'nama' => 'required|string|max:255',
        'nip' => 'required|string|max:30',
        'jabatan' => 'required|string|max:100',
        'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
    ]);

    $foto = null;

    if ($request->hasFile('foto')) {
        $foto = $request->file('foto')->store('guru', 'public');
    }

    Guru::create([
        'nama_guru' => $request->input('nama'),
        'nip'        => $request->input('nip'),
        'jabatan'    => $request->input('jabatan'),
        'foto'       => $foto,
    ]);

    return redirect()->route('guru.index')
        ->with('success', 'Data guru berhasil ditambahkan');
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Guru $guru)
    {
    return view('admin.guru.edit', compact('guru'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Guru $guru)
    {
    $request->validate([
        'nama' => 'required|max:255',
        'nip' => 'required|max:30',
        'jabatan' => 'required|max:100',
        'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
    ]);
    $foto = $guru->foto;
    if ($request->hasFile('foto')) {
        if ($guru->foto) {
            Storage::disk('public')->delete($guru->foto);
        }
        $foto = $request->file('foto')->store('guru', 'public');
    }
    $guru->update([
        'nama_guru' => $request->nama,
        'nip' => $request->nip,
        'jabatan' => $request->jabatan,
        'foto' => $foto,
    ]);
    return redirect()->route('guru.index')
        ->with('success', 'Data guru berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Guru $guru)
    {
    if ($guru->foto) {
        Storage::disk('public')->delete($guru->foto);
    }
    $guru->delete();
    return redirect()->route('guru.index')
        ->with('success', 'Data guru berhasil dihapus');
    }
}
