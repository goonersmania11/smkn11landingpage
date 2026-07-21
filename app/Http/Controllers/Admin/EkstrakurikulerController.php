<?php

namespace App\Http\Controllers\Admin;

use App\Models\ekstrakurikuler;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EkstrakurikulerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
   {
    $ekstrakurikuler = ekstrakurikuler::latest()->paginate(10);
    return view('admin.ekstrakurikuler.index', compact('ekstrakurikuler'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    return view('admin.ekstrakurikuler.create');
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
        $gambar = $request->file('gambar')->store('ekstrakurikuler', 'public');
    }

    Ekstrakurikuler::create([
        'nama_ekstrakurikuler' => $request->input('nama'),
        'slug' => \Illuminate\Support\Str::slug($request->input('nama')),
        'deskripsi' => $request->input('deskripsi'),
        'gambar' => $gambar,
    ]);

    return redirect()
        ->route('ekstrakurikuler.index')
        ->with('success', 'Data ekstrakurikuler berhasil ditambahkan');
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
    public function edit(ekstrakurikuler $ekstrakurikuler)
    {
    return view('admin.ekstrakurikuler.edit', compact('ekstrakurikuler'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ekstrakurikuler $ekstrakurikuler)
    {
    $request->validate([
        'nama' => 'required|max:255',
        'deskripsi' => 'required',
        'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
    ]);
    $gambar = $ekstrakurikuler->gambar;
    if ($request->hasFile('gambar')) {
        if ($ekstrakurikuler->gambar) {
            Storage::disk('public')->delete($ekstrakurikuler->gambar);
        }
        $gambar = $request->file('gambar')->store('ekstrakurikuler', 'public');
    }
    $ekstrakurikuler->update([
        'nama' => $request->nama,
        'slug' => Str::slug($request->nama),
        'deskripsi' => $request->deskripsi,
        'gambar' => $gambar,
    ]);
    return redirect()->route('ekstrakurikuler.index')
            ->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ekstrakurikuler $ekstrakurikuler)
    {
    if ($ekstrakurikuler->gambar) {
        Storage::disk('public')->delete($ekstrakurikuler->gambar);
    }
    $ekstrakurikuler->delete();
    return redirect()->route('ekstrakurikuler.index')
            ->with('success', 'Data berhasil dihapus');
    }
}
