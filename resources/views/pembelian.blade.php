@extends('layouts.app') @section('title','Pembelian') @section('content')
<div class="container">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @php
        $data = App\Models\Produk::orderBy('id','asc')->get();
        @endphp
        
        @foreach($data as $row)
        <div class="col">
            <div class="card rounded-5 p-3 shadow-sm">
                <img src="{{url('images/'.$row->gambar)}}" class="card-img-top rounded-5 p-3" alt="...">
                <div class="card-body">
                    <p class="card-title">{{ $row->nama }}</p>
                    <h5 class="card-title fw-bold">Rp {{ number_format($row->harga,0,',','.') }}</h5>
                    <div class="d-grid">
                        <button class="btn btn-outline-warning rounded-pill" type="button">KERANJANG</button>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection