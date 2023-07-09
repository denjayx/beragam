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
        // dd();
        $provinces = Province::All();
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
        $foto_url = $request->file('foto_url');
        $foto_url->storeAs('province', $foto_url->hashName());

        $validated['foto_url'] = $foto_url->hashName();
        Province::create($validated);
        return redirect()->route('admin.province.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Culture $culture)
    {
        //
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
    public function update(Request $request, Culture $culture)
    {
        //
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
