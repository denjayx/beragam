<?php

namespace App\Http\Controllers;

use App\Models\Culture;
use App\Models\Province;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProvinceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $provinces = Province::orderBy('nama', 'asc')->paginate(5);
        return view('admin/province/index', compact('provinces'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.province.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|min:3',
            'foto_url' => 'required|image|mimes:jpeg,jpg,png,gif,svg|max:2048',
            'deskripsi' => 'required|min:30',
        ]);
        $fotoUrl = Storage::putFile('public/province', $request->file('foto_url'));
        $validated['foto_url'] = basename($fotoUrl);
        Province::create($validated);
        return redirect()->route('admin.province.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $province = Province::find($id);
        return view('province.show', compact('province'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Culture $culture)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Province $province)
    {
        if ($request->hasFile('foto_url')) {
            $validated = $request->validated();

            $fotoUrl = Storage::putFile('public/province', $request->file('foto_url'));
            $validated['foto_url'] = basename($fotoUrl);

            Storage::delete('public/province/' . $province->foto_url);
            $province->update($validated);
        } else {
            $province->update(
                [
                    'nama' => $request->nama,
                    'deskripsi' => $request->deskripsi,
                ]
            );
        }
        return redirect()->route('admin.province.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Province $province)
    {
        Storage::delete('storage/province/' . $province->foto_url);
        $province->delete();
        return redirect()->route('admin.province.index');
    }
}
