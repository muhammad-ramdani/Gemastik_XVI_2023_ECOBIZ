@extends('layouts.app') @section('title','Donasi') @section('content')
<div class="card container shadow-sm p-3 rounded-5">
    <div class="card-body">
        <h3 class="card-title fw-bold">Formulir Donatur</h3>
        <form action="/admin/donatur" method="post">
            @csrf
            <input type="text" name="user" value="{{ Auth::user()->id }}" hidden>
            <div class="mb-3">
                <label class="form-label">Nama Donatur</label>
                <input type="text" class="form-control focus-ring focus-ring-warning border border-warning" name="nama">
            </div>
            <div class="mb-3">
                <label class="form-label">Jumlah Donasi</label>
                <input type="text" class="form-control focus-ring focus-ring-warning border border-warning" name="jumlah">
            </div>
            <div class="mb-3">
                <label class="form-label">Pesan / Salam</label>
                <input type="text" class="form-control focus-ring focus-ring-warning border border-warning" name="pesan">
            </div>
            <div class="mb-3">
                <label class="form-label">Bank Tujuan</label>
                <select class="form-select focus-ring focus-ring-warning border border-warning" name="bank">
                    <option value="BRI">BRI</option>
                    <option value="BNI">BNI</option>
                    <option value="BCA">BCA</option>
                    <option value="MANDIRI">MANDIRI</option>
                </select>
            </div>
            <div class="d-grid">
                <button type="submit" class="btn btn-warning">Proses Sekarang</button>
            </div>
        </form>
    </div>
</div>
@endsection