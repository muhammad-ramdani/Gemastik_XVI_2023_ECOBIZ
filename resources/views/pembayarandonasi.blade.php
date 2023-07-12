@extends('layouts.app') @section('title','Notofikasi') @section('content')
<div class="container">
    <div class="card text-center py-4 mb-5 mx-auto w-50 shadow-sm rounded-5">
        <div class="card-body">
            <h5 class="text-warning">SEGERA LAKUKAN PEMBAYARAN ANDA</h5>
            <br>
            <h6 class="">TOTAL :</h6>
            @php
            $user = auth()->id();
            $data = App\Models\Donatur::where('user', Auth::user()->id)->orderBy('id','desc')->limit(1)->get();
            @endphp
            @foreach($data as $row)
            <h5 class="fw-bold">Rp {{ number_format($row->jumlah,0,',','.') }}</h5>
            @endforeach
        </div>
    </div>

    <div class="card text-center py-4 mb-3 mx-auto w-25 shadow-sm rounded-5">
        <div class="card-body">
            <img src="https://i0.wp.com/febi.uinsaid.ac.id/wp-content/uploads/2020/11/Logo-BRI-Bank-Rakyat-Indonesia-PNG-Terbaru.png?ssl=1" style="width: 100px" alt="">
            <br>
            <br>
            <h5 class="">ECOBIZ INDONESIA</h5>
            <h5 class="fw-bold">XXX-XXX-XXX-XXX-XXX</h5>
            
        </div>
    </div>
</div>
@endsection