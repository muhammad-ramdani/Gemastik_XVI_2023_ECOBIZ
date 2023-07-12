@extends('layouts.app') @section('title','Proses Pembersihan') @section('content')
<div class="card container shadow-sm p-3 rounded-5">
    <div class="card-body">
        <h3 class="card-title fw-bold">Proses Pembersihan</h3>
        <form action="/admin/prosespembersihan" method="post">
            @csrf
            <input type="text" name="user" value="{{ Auth::user()->id }}" hidden>
            <input type="text" name="pembersihan" value="{{ $pembersihan->id }}" hidden>
            <input type="text" name="status" value="menunggu konfirmasi" hidden>
            <div class="mb-3">
                <label class="form-label">Alamat Lengkap Pembersihan:</label>
                <p class="fw-bold">{{ $pembersihan->alamat }}</p>
            </div>
            <div class="mb-3">
                <label class="form-label">Input Foto Lokasi Sebelum Dibersihkan</label>
                <input type="file" class="form-control focus-ring focus-ring-warning border border-warning rounded-5" name="before" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Input Foto Lokasi Sesudah Dibersihkan</label>
                <input type="file" class="form-control focus-ring focus-ring-warning border border-warning rounded-5" name="after" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Jenis Pembayaran</label>
                {{-- <input type="text" class="form-control focus-ring focus-ring-warning border border-warning" name="jenis_pembayaran"> --}}
                <select class="form-select focus-ring focus-ring-warning border border-warning rounded-5" name="jenis_bayar">
                    <option value="GOPAY">GOPAY</option>
                    <option value="OVO">OVO</option>
                    <option value="DANA">DANA</option>
                    <option value="BRI">BRI</option>
                    <option value="BNI">BNI</option>
                    <option value="BCA">BCA</option>
                    <option value="MANDIRI">MANDIRI</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Nomor Pembayaran</label>
                <input type="number" class="form-control focus-ring focus-ring-warning border border-warning rounded-5" name="no_bayar" oninput="limitLength(this)" min="1" required>
                <script>
                    function limitLength(input) {
                        if (input.value.length > 16) {
                            input.value = input.value.slice(0, 16); // Menghapus karakter ke-17 dan seterusnya
                        }
                    }
                </script>
                <div class="form-text">
                    Cantumkan nomor e-wallet atau nomor rekening sesuai jenis pembayaran yang Anda pilih
                </div>
            </div>
            <div class="d-grid">
                <button type="submit" class="btn btn-warning rounded-5">Proses Sekarang</button>
            </div>
        </form>
    </div>
</div>
@endsection