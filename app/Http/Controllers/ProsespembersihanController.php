<?php

namespace App\Http\Controllers;

use App\Models\Prosespembersihan;
use Illuminate\Http\Request;

class ProsespembersihanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prosespembersihan = Prosespembersihan::all();

        return view('admin.prosespembersihan.index', ['prosespembersihan' => $prosespembersihan]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.prosespembersihan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'user' => $request->user,
            'pembersihan' => $request->pembersihan,
            'before' => $request->before,
            'after' => $request->after,
            'jenis_bayar' => $request->jenis_bayar,
            'no_bayar' => $request->no_bayar,
            'status' => $request->status,
        ];
        
        Prosespembersihan::create($data);

        return redirect('riwayatpembersihan');
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
        $prosespembersihan = Prosespembersihan::findOrFail($id);

        return view('admin.prosespembersihan.edit', compact('prosespembersihan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $prosespembersihan = Prosespembersihan::findOrFail($id);

        $data = [
            'user' => $request->user,
            'pembersihan' => $request->pembersihan,
            'before' => $request->before,
            'after' => $request->after,
            'jenis_bayar' => $request->jenis_bayar,
            'no_bayar' => $request->no_bayar,
            'status' => $request->status,
        ];

        $prosespembersihan->update($data);

        return redirect('/admin/prosespembersihan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $prosespembersihan = Prosespembersihan::findOrFail($id);

        $prosespembersihan->delete();

        return redirect('/admin/prosespembersihan');
    }
}
