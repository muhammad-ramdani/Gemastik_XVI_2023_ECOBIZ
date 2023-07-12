@extends('admin.layout') @section('title','Penjualan') @section('content')
<div class="card p-3">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nama</th>
                <th scope="col">Alamat</th>
                <th scope="col">Telephon</th>
                <th scope="col">Berat Sampah</th>
                <th scope="col">Jenis Pembayaran</th>
                <th scope="col">Nomor Pembayaran</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($penjualan as $penjualan)    
            <tr>
                <td>{{ $penjualan->nama_penjual }}</td>
                <td>{{ $penjualan->alamat_penjual }}</td>
                <td>{{ $penjualan->no_hp }}</td>
                <td>{{ $penjualan->berat_sampah }} kg</td>
                <td>{{ $penjualan->jenis_pembayaran }}</td>
                <td>{{ $penjualan->nomor_pembayaran }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection