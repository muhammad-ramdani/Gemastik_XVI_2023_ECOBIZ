@extends('admin.layout') @section('title','Edit Produk') @section('content')
<div class="container">
	<div class="card shadow">
		<div class="card-body">
			<form action="/admin/produk/{{ $produk->id }}" method="post">
				@method('PUT') 
                @csrf
				<div class="mb-3">
                    <label class="form-label">Gambar</label>
                    <input class="form-control" type="file" name="gambar" value="{{ $produk->gambar }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" class="form-control" name="nama" value="{{ $produk->nama }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Harga</label>
                    <input type="text" class="form-control" name="harga" value="{{ $produk->harga }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Stok</label>
                    <input type="text" class="form-control" name="stok" value="{{ $produk->stok }}">
                </div>
				<button class="btn btn-primary" type="submit">Simpan</button>
			</form>
		</div>
	</div>
</div>
@endsection