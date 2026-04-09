<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Selamat Datang | FIM Mart</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-100 text-slate-900">
    <div class="min-h-screen bg-[radial-gradient(circle_at_top,_rgba(16,185,129,0.15),_transparent_35%),radial-gradient(circle_at_top_right,_rgba(14,165,233,0.12),_transparent_28%)]">
        <header class="mx-auto max-w-7xl px-6 py-8 lg:px-8">
            <div class="flex flex-col gap-6 lg:flex-row lg:items-center lg:justify-between">
                <div>
                    <p class="text-sm uppercase tracking-[0.35em] text-emerald-600">FIM Mart</p>
                    <h1 class="mt-4 text-4xl font-semibold text-slate-950 sm:text-5xl">Selamat datang FIM Mart</h1>
                    <p class="mt-6 max-w-2xl text-lg leading-8 text-slate-700">Kelola Belanja Bualanan anda dengan mudah</p>
                </div>
                <div class="rounded-[2rem] bg-white/90 p-6 shadow-[0_25px_80px_rgba(15,23,42,0.08)] backdrop-blur-xl border border-slate-200">
                    <p class="text-sm font-medium uppercase tracking-[0.3em] text-slate-500">Mulai sekarang</p>
                    <p class="mt-4 text-2xl font-semibold text-slate-900">Admin minimarket</p>
                    <div class="mt-6 space-y-4">
                        <a href="{{ route('admin.dashboard') }}" class="block rounded-3xl bg-emerald-600 px-5 py-3 text-center text-sm font-semibold text-white transition hover:bg-emerald-500">Buka Dashboard</a>
                        <a href="{{ route('admin.products') }}" class="block rounded-3xl border border-slate-200 bg-white px-5 py-3 text-center text-sm font-semibold text-slate-700 transition hover:bg-slate-50">Lihat Produk</a>
                    </div>
                </div>
            </div>
        </header>

        <main class="mx-auto max-w-7xl px-6 pb-16 lg:px-8">
            <section class="grid gap-6 md:grid-cols-2 xl:grid-cols-3">
                <article class="rounded-[2rem] border border-slate-200 bg-white p-8 shadow-sm">
                    <p class="text-sm uppercase tracking-[0.3em] text-slate-500">Kelola</p>
                    <h2 class="mt-4 text-2xl font-semibold text-slate-900">Produk & Stok</h2>
                    <p class="mt-3 text-slate-600">Tambah, edit, dan pantau tingkat stok agar bisnis Anda selalu siap melayani pelanggan.</p>
                </article>
                <article class="rounded-[2rem] border border-slate-200 bg-white p-8 shadow-sm">
                    <p class="text-sm uppercase tracking-[0.3em] text-slate-500">Pantau</p>
                    <h2 class="mt-4 text-2xl font-semibold text-slate-900">Penjualan Harian</h2>
                    <p class="mt-3 text-slate-600">Lihat ringkasan transaksi real-time dan analisis tren penjualan tanpa repot.</p>
                </article>
                <article class="rounded-[2rem] border border-slate-200 bg-white p-8 shadow-sm">
                    <p class="text-sm uppercase tracking-[0.3em] text-slate-500">Analisis</p>
                    <h2 class="mt-4 text-2xl font-semibold text-slate-900">Laporan Bisnis</h2>
                    <p class="mt-3 text-slate-600">Telusuri laporan keuangan, pelanggan, dan performa toko secara jelas dan visual.</p>
                </article>
            </section>

            <section class="mt-10 rounded-[2rem] border border-slate-200 bg-white p-8 shadow-sm">
                <div class="flex flex-col gap-4 lg:flex-row lg:items-center lg:justify-between">
                    <div>
                        <p class="text-sm uppercase tracking-[0.3em] text-slate-500">Siap untuk menemani belanja anda</p>
                        <h2 class="mt-2 text-3xl font-semibold text-slate-900">Akses fitur admin lengkap</h2>
                    </div>
                    <a href="{{ route('admin.dashboard') }}" class="inline-flex items-center justify-center rounded-full bg-slate-950 px-6 py-3 text-sm font-semibold text-white transition hover:bg-slate-800">Masuk ke Admin</a>
                </div>
            </section>
        </main>
    </div>
</body>
</html>
