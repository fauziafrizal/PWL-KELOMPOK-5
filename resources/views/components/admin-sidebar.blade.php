<nav class="space-y-8 px-6 pb-6 pt-3">
    <div class="space-y-2">
        <p class="text-xs uppercase tracking-[0.3em] text-slate-500">Menu Utama</p>
        <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-3 rounded-3xl px-4 py-3 text-sm font-medium text-slate-300 transition hover:bg-slate-900/80 hover:text-white {{ request()->routeIs('admin.dashboard') ? 'bg-emerald-500/10 text-emerald-400' : '' }}">
            <span>🏠</span>
            Dashboard
        </a>
        <a href="{{ route('admin.products') }}" class="flex items-center gap-3 rounded-3xl px-4 py-3 text-sm font-medium text-slate-300 transition hover:bg-slate-900/80 hover:text-white {{ request()->routeIs('admin.products') ? 'bg-emerald-500/10 text-emerald-400' : '' }}">
            <span>🛒</span>
            Produk
        </a>
        <a href="{{ route('admin.stock') }}" class="flex items-center gap-3 rounded-3xl px-4 py-3 text-sm font-medium text-slate-300 transition hover:bg-slate-900/80 hover:text-white {{ request()->routeIs('admin.stock') ? 'bg-emerald-500/10 text-emerald-400' : '' }}">
            <span>📦</span>
            Stok
        </a>
        <a href="{{ route('admin.sales') }}" class="flex items-center gap-3 rounded-3xl px-4 py-3 text-sm font-medium text-slate-300 transition hover:bg-slate-900/80 hover:text-white {{ request()->routeIs('admin.sales') ? 'bg-emerald-500/10 text-emerald-400' : '' }}">
            <span>💳</span>
            Penjualan
        </a>
    </div>

    
</nav>
