@extends('admin.layout') @section('title','Pembersihan') @section('content')
<div class="card p-3">
    <a href="/admin/pembersihan/create">Create</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Gambar</th>
                <th scope="col">Nama Tempat</th>
                <th scope="col">Alamat</th>
                <th scope="col">Titik Koordinat</th>
                <th scope="col">Harga</th>
                <th scope="col" colspan="2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pembersihan as $pembersihan)    
            <tr>
                <td>{{ $pembersihan->gambar_tempat_pembersihan }}</td>
                <td>{{ $pembersihan->nama_lokasi }}</td>
                <td>{{ $pembersihan->alamat }}</td>
                <td>{{ $pembersihan->titik_koordinat }}</td>
                <td>{{ $pembersihan->harga }}</td>
                <td><a href="/admin/pembersihan/{{ $pembersihan->id }}/edit">Edit</a></td>
                <td><a href="/admin/pembersihan/{{ $pembersihan->id }}" onclick="event.preventDefault(); document.getElementById('{{ $pembersihan->id }}').submit();">Hapus</a></td>

                <form action="/admin/pembersihan/{{ $pembersihan->id }}" method="POST" id="{{ $pembersihan->id }}">
                    @method('DELETE') 
                    @csrf
                </form>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
