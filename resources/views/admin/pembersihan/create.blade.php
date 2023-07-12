@extends('admin.layout') @section('title','Tambah Pembersihan') @section('content')
<div class="container">
	<div class="card shadow">
		<div class="card-body">
			<form action="/admin/pembersihan" method="post">
				@csrf
				<div class="mb-3">
                    <label for="formFile" class="form-label">gambar</label>
                    <input class="form-control" type="file" id="formFile" name="gambar_tempat_pembersihan">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nama Tempat</label>
                    <input type="text" class="form-control" name="nama_lokasi">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Alamat</label>
                    <input type="text" class="form-control" name="alamat">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Titik Koordinat</label>
                    <input type="text" class="form-control" name="titik_koordinat">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Harga</label>
                    <input type="number" class="form-control" name="harga">
                </div>
				<button class="btn btn-primary" type="submit">Simpan</button>
			</form>
		</div>
	</div>
</div>
@endsection