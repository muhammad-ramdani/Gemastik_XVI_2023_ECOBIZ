<?php

namespace App\Http\Controllers;

use App\Models\Penjualan;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $penjualan = Penjualan::all();

        return view('admin.penjualan.index', ['penjualan' => $penjualan]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'nama_penjual' => $request->nama_penjual,
            'alamat_penjual' => $request->alamat_penjual,
            'no_hp' => $request->no_hp,
            'berat_sampah' => $request->berat_sampah,
            'jenis_pembayaran' => $request->jenis_pembayaran,
            'nomor_pembayaran' => $request->nomor_pembayaran,
        ];

        Penjualan::create($data);

        return redirect('notifikasi');
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
    public function destroy(string $id)
    {
        //
    }
}
