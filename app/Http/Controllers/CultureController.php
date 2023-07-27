<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateCultureRequest;
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
        return view('admin/culture/index', compact('cultures'));
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
        $fotoUrl = Storage::putFile('public/culture', $request->file('foto_url'));
        $validated['foto_url'] = basename($fotoUrl);
        Culture::create($validated);
        return redirect()->route('admin.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $culture = Culture::find($id);
        return view('culture.show', compact('culture'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    public function update(UpdateCultureRequest $request, Culture $culture)
    {
        if ($request->hasFile('foto_url')) {
            $validated = $request->validated();

            $fotoUrl = Storage::putFile('public/culture', $request->file('foto_url'));
            $validated['foto_url'] = basename($fotoUrl);

            Storage::delete('public/culture/' . $culture->foto_url);
            $culture->update($validated);
        } else {
            $culture->update(
                [
                    'nama' => $request->nama,
                    'deskripsi' => $request->deskripsi,
                    'prov_id' => $request->prov_id,
                    'cat_id' => $request->cat_id,
                ]
            );
        }

        return redirect()->route('admin.index');
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
