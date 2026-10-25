<?php

namespace App\Http\Controllers;

use App\Models\Pakaian;
use Illuminate\Http\Request;
use App\Http\Resources\PakaianResource;

class PakaianController extends Controller
{
    public function index()
    {
        $pakaian = Pakaian::all();
        return new PakaianResource('Daftar pakaian berhasil diambil', $pakaian);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string',
            'brand' => 'required|string',
            'harga' => 'required|integer',
            'kategori' => 'required|string',
            'ukuran' => 'required|string',
            'kondisi' => 'required|string',
            'status' => 'required|in:tersedia,terjual',
            'foto' => 'required|url',
        ]);

        $pakaian = Pakaian::create($validated);
        return (new PakaianResource('Data pakaian berhasil ditambahkan', $pakaian))
                    ->response()->setStatusCode(201);
    }

    public function show($id)
    {
        $pakaian = Pakaian::findOrFail($id);
        return new PakaianResource('Detail pakaian berhasil diambil', $pakaian);
    }

    public function update(Request $request, $id)
    {
        $pakaian = Pakaian::findOrFail($id);

        $validated = $request->validate([
            'nama' => 'sometimes|required|string',
            'brand' => 'sometimes|required|string',
            'harga' => 'sometimes|required|integer',
            'kategori' => 'sometimes|required|string',
            'ukuran' => 'sometimes|required|string',
            'kondisi' => 'sometimes|required|string',
            'status' => 'sometimes|required|in:tersedia,terjual',
            'foto' => 'sometimes|required|url',
        ]);

        $pakaian->update($validated);
        return new PakaianResource('Data pakaian berhasil diperbarui', $pakaian);
    }

    public function destroy($id)
    {
        $pakaian = Pakaian::findOrFail($id);
        $pakaian->delete();
        return new PakaianResource('Data pakaian berhasil dihapus', null);
    }
}