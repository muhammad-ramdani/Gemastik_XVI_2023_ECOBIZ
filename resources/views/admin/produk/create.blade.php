@extends('admin.layout') @section('title','Tambah Produk') @section('content')
<div class="container">
	<div class="card shadow">
		<div class="card-body">
			<form action="/admin/produk" method="post">
				@csrf
				<div class="mb-3">
                    <label for="formFile" class="form-label">Gambar</label>
                    <input class="form-control" type="file" id="formFile" name="gambar">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nama</label>
                    <input type="text" class="form-control" name="nama">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">harga</label>
                    <input type="text" class="form-control" name="harga">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Stok</label>
                    <input type="text" class="form-control" name="stok">
                </div>
				<button class="btn btn-primary" type="submit">Simpan</button>
			</form>
		</div>
	</div>
</div>
@endsection