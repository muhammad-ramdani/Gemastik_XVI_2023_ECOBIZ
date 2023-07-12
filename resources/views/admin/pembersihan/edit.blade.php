@extends('admin.layout') @section('title','Edit Pembersihan') @section('content')
<div class="container">
	<div class="card shadow">
		<div class="card-body">
			<form action="/admin/pembersihan/{{ $pembersihan->id }}" method="post">
				@method('PUT') 
                @csrf
				<div class="mb-3">
                    <label class="form-label">gambar</label>
                    <input class="form-control" type="file" name="gambar_tempat_pembersihan" value="{{ $pembersihan->gambar_tempat_pembersihan }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Nama Tempat</label>
                    <input type="text" class="form-control" name="nama_lokasi" value="{{ $pembersihan->nama_lokasi }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Alamat</label>
                    <input type="text" class="form-control" name="alamat" value="{{ $pembersihan->alamat }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Titik Koordinat</label>
                    <input type="text" class="form-control" name="titik_koordinat" value="{{ $pembersihan->titik_koordinat }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Harga</label>
                    <input type="number" class="form-control" name="harga" value="{{ $pembersihan->harga }}">
                </div>
				<button class="btn btn-primary" type="submit">Simpan</button>
			</form>
		</div>
	</div>
</div>
@endsection