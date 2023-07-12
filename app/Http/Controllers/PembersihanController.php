<?php

namespace App\Http\Controllers;

use App\Models\Pembersihan;
use Illuminate\Http\Request;

class PembersihanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pembersihan = Pembersihan::all();

        return view('admin.pembersihan.index', ['pembersihan' => $pembersihan]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pembersihan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'gambar_tempat_pembersihan' => $request->gambar_tempat_pembersihan,
            'nama_lokasi' => $request->nama_lokasi,
            'alamat' => $request->alamat,
            'titik_koordinat' => $request->titik_koordinat,
            'harga' => $request->harga,
        ];

        Pembersihan::create($data);

        return redirect('/admin/pembersihan');
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
        $pembersihan = Pembersihan::findOrFail($id);

        return view('admin.pembersihan.edit', compact('pembersihan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pembersihan = Pembersihan::findOrFail($id);

        $data = [
            'gambar_tempat_pembersihan' => $request->gambar_tempat_pembersihan,
            'nama_lokasi' => $request->nama_lokasi,
            'alamat' => $request->alamat,
            'titik_koordinat' => $request->titik_koordinat,
            'harga' => $request->harga,
        ];

        $pembersihan->update($data);

        return redirect('/admin/pembersihan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pembersihan = Pembersihan::findOrFail($id);

        $pembersihan->delete();

        return redirect('/admin/pembersihan');
    }
}
