@extends('layouts.app') @section('title','Pembersihan') @section('content')

<div class="container">
    <h1 class="fw-bold mb-5 text-center">LOKASI PEMBERSIHAN TERBARU</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @php
        $data = App\Models\Pembersihan::orderBy('id','desc')->get();
        @endphp

        @foreach($data as $row)
        <div class="col">
            <div class="card rounded-5 p-3 shadow-sm">
                <img
                    src="{{url('images/'.$row->gambar_tempat_pembersihan)}}"
                    class="card-img-top"
                    alt="..."
                />
                <div class="card-body">
                    <h5 class="card-title">{{ $row->nama_lokasi }}</h5>
                    <p class="card-text">{{ $row->alamat }}</p>
                    <p class="card-text">{{ $row->titik_koordinat }}</p>
                    <h5 class="card-title fw-bold">Rp {{ number_format($row->harga,0,',','.') }}</h5>
                    <div class="d-grid">
                        <a class="btn btn-outline-warning rounded-pill" href="prosespembersihan/{{ $row->id }}">DAFTAR</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
