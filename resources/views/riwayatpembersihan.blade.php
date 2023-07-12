@extends('layouts.app') @section('title','Pembersihan') @section('content')
<div class="container">
    @php
    $user = auth()->id();
    $data = App\Models\Prosespembersihan::where('user', Auth::user()->id)->orderBy('updated_at','desc')->get();
    @endphp
    
    @foreach($data as $row)
    <div class="card mb-3">
        <div class="card-body">
            <h5 class="card-title">Tanggal : {{ $row->created_at }}</h5>
            <p class="card-text">Jenis Pembayaran : {{ $row->jenis_bayar }}</p>
            <p class="card-text">Nomor Pembayaran : {{ $row->no_bayar }}</p>
            <p class="card-text">Status Pembayaran : <span class="text-warning">{{ $row->status }}</span></p>
            <p class="card-text">
                <small class="text-body-secondary">Update : {{ $row->updated_at }}</small>
            </p>
        </div>
    </div>
    @endforeach
</div>
@endsection
