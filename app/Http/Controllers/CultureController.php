<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Culture;
use App\Models\Province;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CultureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cultures = Culture::All();
        return view('admin/province/index', compact('cultures'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $provinces = Province::All();
        $categories = Category::All();
        return view('admin.culture.create', compact('provinces', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|min:3',
            'foto_url' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'deskripsi' => 'required|min:20',
            'prov_id' => 'required|exists:provinces,id',
            'cat_id' => 'required|exists:categories,id',
        ]);
        $foto_url = $request->file('foto_url');
        $foto_url->storeAs('culture', $foto_url->hashName());

        $validated['foto_url'] = $foto_url->hashName();
        Culture::create($validated);
        return redirect()->route('admin.index');
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Culture $culture)
    {
        Storage::delete('storage/culture/' . $culture->foto_url);
        $culture->delete();
        return redirect()->route('admin.index');
    }
}
