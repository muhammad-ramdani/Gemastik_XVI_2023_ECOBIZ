<?php

namespace App\Http\Controllers;

use App\Models\Donatur;
use Illuminate\Http\Request;

class DonaturController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $donatur = Donatur::all();

        return view('admin.donatur.index', ['donatur' => $donatur]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.donatur.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'user' => $request->user,
            'nama' => $request->nama,
            'jumlah' => $request->jumlah,
            'pesan' => $request->pesan,
            'bank' => $request->bank,
        ];

        Donatur::create($data);

        return redirect('/pembayarandonasi');
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
        $donatur = Donatur::findOrFail($id);

        return view('admin.donatur.edit', compact('donatur'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $donatur = Donatur::findOrFail($id);

        $data = [
            'nama' => $request->nama,
            'jumlah' => $request->jumlah,
            'pesan' => $request->pesan,
            'bank' => $request->bank,
        ];

        $donatur->update($data);

        return redirect('/admin/donatur');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $donatur = Donatur::findOrFail($id);

        $donatur->delete();

        return redirect('/admin/donatur');
    }
}
