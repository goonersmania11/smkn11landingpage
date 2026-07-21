<?php

namespace App\Http\Controllers\Admin;

use App\Models\jurusan;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
   {
    $jurusan = jurusan::latest()->paginate(10);
    return view('admin.jurusan.index', compact('jurusan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    return view('admin.jurusan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
   {
    $request->validate([
        'nama' => 'required|max:255',
        'deskripsi' => 'required',
        'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
    ]);
    $gambar = null;
    if ($request->hasFile('gambar')) {
        $gambar = $request->file('gambar')->store('jurusan', 'public');
    }
    Jurusan::create([
        'nama' => $request->nama,
        'slug' => Str::slug($request->nama),
        'deskripsi' => $request->deskripsi,
        'gambar' => $gambar,
    ]);
    return redirect()->route('jurusan.index')
            ->with('success', 'Data jurusan berhasil ditambahkan');
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
    public function edit(jurusan $jurusan)
    {
    return view('admin.jurusan.edit', compact('jurusan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, jurusan $jurusan)
    {
    $request->validate([
        'nama' => 'required|max:255',
        'deskripsi' => 'required',
        'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
    ]);
    $gambar = $jurusan->gambar;
    if ($request->hasFile('gambar')) {
        if ($jurusan->gambar) {
            Storage::disk('public')->delete($jurusan->gambar);
        }
        $gambar = $request->file('gambar')->store('jurusan', 'public');
    }
    $jurusan->update([
        'nama' => $request->nama,
        'slug' => Str::slug($request->nama),
        'deskripsi' => $request->deskripsi,
        'gambar' => $gambar,
    ]);
    return redirect()->route('jurusan.index')
            ->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(jurusan $jurusan)
    {
    if ($jurusan->gambar) {
        Storage::disk('public')->delete($jurusan->gambar);
    }
    $jurusan->delete();
    return redirect()->route('jurusan.index')
            ->with('success', 'Data berhasil dihapus');
    }
}
