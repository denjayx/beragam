<?php

namespace App\Http\Controllers;

use App\Models\Provinsi;
use Illuminate\Http\Request;

class ProvinsiController extends Controller
{
    public function index()
    {
        $provinsis = Provinsi::All();
        $title = 'Semua Provinsi';
        return view('admin/provinsi/index', compact('provinsis', 'title'));
    }
    public function create()
    {
        $title = 'Tambah Provinsi';
        return view('admin/provinsi/create', compact('title'));
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|min:3',
            'foto_url' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'deskripsi' => 'required|min:30',
        ]);
        $foto_url = $request->file('foto_url');
        $foto_url->storeAs('provinsi', $foto_url->hashName());
        $validated['foto_url'] = $foto_url->hashName();
        Provinsi::create($validated);
        return redirect()->route('admin/provinsi/index');
    }
}
