@extends('layouts.app') @section('title','Penjualan') @section('content')
<div class="card container shadow-sm p-3 rounded-5">
    <div class="card-body">
        <h3 class="card-title fw-bold">Formulir Penjualan</h3>
        <form action="/admin/penjualan" method="post">
            @csrf
            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" class="form-control focus-ring focus-ring-warning border border-warning rounded-5" name="nama_penjual" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Alamat Lengkap</label>
                <input type="text" class="form-control focus-ring focus-ring-warning border border-warning rounded-5" name="alamat_penjual" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Nomor Telepon</label>
                <input type="tel" class="form-control focus-ring focus-ring-warning border border-warning rounded-5" name="no_hp" pattern="(\+62|62|0)8[1-9]{2}[0-9]{4}[0-9]{2,4}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Berat Sampah</label>
                <select class="form-select focus-ring focus-ring-warning border border-warning rounded-5" name="berat_sampah">
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>
                <div class="form-text">
                    Sampah harus ANORGANIK dan minimal 3 kg dan maksimal 10 kg
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Jenis Pembayaran</label>
                {{-- <input type="text" class="form-control focus-ring focus-ring-warning border border-warning" name="jenis_pembayaran"> --}}
                <select class="form-select focus-ring focus-ring-warning border border-warning rounded-5" name="jenis_pembayaran">
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
                <input type="number" class="form-control focus-ring focus-ring-warning border border-warning rounded-5" name="nomor_pembayaran" oninput="limitLength(this)" min="1" required>
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
