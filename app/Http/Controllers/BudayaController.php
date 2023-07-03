<?php

namespace App\Http\Controllers;

use App\Models\Budaya;
use App\Models\Kategori;
use App\Models\Provinsi;
use Illuminate\Http\Request;

class BudayaController extends Controller
{
    public function index()
    {
        $budayas = Budaya::all();
        $title = 'Semua Budaya';
        return view('admin/budaya/index', compact('budayas', 'title'));
    }
    public function create()
    {
        $title = 'Tambah Budaya';
        $kategoris = Kategori::all();
        $provinsis = Provinsi::all();
        return view('admin/budaya/create', compact('kategoris', 'provinsis', 'title'));
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|min:3',
            'foto_url' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'deskripsi' => 'required|min:20',
            'prov_id' => 'required|exists:provinsi,id',
            'kat_id' => 'required|exists:kategori,id'
        ]);

        $foto_url = $request->file('foto_url');
        $foto_url->storeAs('budaya', $foto_url->hashName());

        $validated['foto_url'] = $foto_url->hashName();
        Budaya::create($validated);
        return redirect()->route('admin/');
    }
}
