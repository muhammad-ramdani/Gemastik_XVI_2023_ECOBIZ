@extends('admin.layout') @section('title','Produk') @section('content')
<div class="card p-3">
    <a href="/admin/produk/create">Create</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Gambar</th>
                <th scope="col">Nama</th>
                <th scope="col">Harga</th>
                <th scope="col">Stok</th>
                <th scope="col" colspan="2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($produk as $produk)
            <tr>
                <td>{{ $produk->gambar }}</td>
                <td>{{ $produk->nama }}</td>
                <td>{{ $produk->harga }}</td>
                <td>{{ $produk->stok }}</td>
                <td><a href="/admin/produk/{{ $produk->id }}/edit">Edit</a></td>
                <td><a href="/admin/produk/{{ $produk->id }}" onclick="event.preventDefault(); document.getElementById('{{ $produk->id }}').submit();">Hapus</a></td>

                <form action="/admin/produk/{{ $produk->id }}" method="POST" id="{{ $produk->id }}">
                    @method('DELETE') 
                    @csrf
                </form>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
