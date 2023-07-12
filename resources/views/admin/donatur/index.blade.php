@extends('admin.layout') @section('title','Donatur') @section('content')
<div class="card p-3">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nama</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Pesan</th>
                <th scope="col">Bank</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($donatur as $donatur)    
            <tr>
                <td>{{ $donatur->nama }}</td>
                <td>Rp {{ $donatur->jumlah }}</td>
                <td>{{ $donatur->pesan }}</td>
                <td>{{ $donatur->bank }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection