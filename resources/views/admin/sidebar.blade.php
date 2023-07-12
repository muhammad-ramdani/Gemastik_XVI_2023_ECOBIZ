<nav class="nav flex-column sticky-top">
    <a
        class="nav-link {{ request()->is('admin') ? 'active':''}}"
        aria-current="page"
        href="/admin"
        >Dashboard</a
    >
    <a
        class="nav-link {{ request()->is('admin/pembersihan') ? 'active':''}}"
        aria-current="page"
        href="/admin/pembersihan"
        >Pembersihan</a
    >
    <a
        class="nav-link {{ request()->is('admin/penjualan') ? 'active':''}}"
        aria-current="page"
        href="/admin/penjualan"
        >Penjualan</a
    >
    <a
        class="nav-link {{ request()->is('admin/produk') ? 'active':''}}"
        aria-current="page"
        href="/admin/produk"
        >Produk</a
    >
    <a
        class="nav-link {{ request()->is('admin/donatur') ? 'active':''}}"
        aria-current="page"
        href="/admin/donatur"
        >Donatur</a
    >
    <a
        class="nav-link {{ request()->is('admin/user') ? 'active':''}}"
        aria-current="page"
        href="/admin/user"
        >User</a
    >
    <div class="mt-auto">
        <a class="nav-link link-dark" href="#">User</a>
    </div>
</nav>
