<x-admin-layout title="Kelola pelanggan setia">
    <div class="mx-auto max-w-7xl space-y-6">
        <section class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm">
            <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
                <div>
                    <p class="text-sm font-medium uppercase tracking-[0.3em] text-slate-500">Pelanggan</p>
                    <h1 class="mt-2 text-2xl font-semibold text-slate-900">Kelola pelanggan setia</h1>
                </div>
                <button class="inline-flex items-center justify-center rounded-full bg-slate-950 px-4 py-2 text-sm font-semibold text-white shadow-sm transition hover:bg-slate-800">Tambah Pelanggan</button>
            </div>

            <div class="mt-6 overflow-x-auto">
                <table class="min-w-full text-left text-sm text-slate-600">
                    <thead class="border-b border-slate-200 text-slate-900">
                        <tr>
                            <th class="px-4 py-3 font-semibold">Nama</th>
                            <th class="px-4 py-3 font-semibold">Telepon</th>
                            <th class="px-4 py-3 font-semibold">Email</th>
                            <th class="px-4 py-3 font-semibold">Total Transaksi</th>
                            <th class="px-4 py-3 font-semibold">Status</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-200">
                        <tr class="hover:bg-slate-50">
                            <td class="px-4 py-4 font-semibold text-slate-900">Rina W.</td>
                            <td class="px-4 py-4">0812-3456-7890</td>
                            <td class="px-4 py-4">rina@example.com</td>
                            <td class="px-4 py-4">34</td>
                            <td class="px-4 py-4"><span class="rounded-full bg-emerald-100 px-3 py-1 text-xs font-semibold text-emerald-700">Aktif</span></td>
                        </tr>
                        <tr class="hover:bg-slate-50">
                            <td class="px-4 py-4 font-semibold text-slate-900">Anton S.</td>
                            <td class="px-4 py-4">0813-8765-4321</td>
                            <td class="px-4 py-4">anton@example.com</td>
                            <td class="px-4 py-4">21</td>
                            <td class="px-4 py-4"><span class="rounded-full bg-amber-100 px-3 py-1 text-xs font-semibold text-amber-700">Loyal</span></td>
                        </tr>
                        <tr class="hover:bg-slate-50">
                            <td class="px-4 py-4 font-semibold text-slate-900">Maya D.</td>
                            <td class="px-4 py-4">0821-9987-1122</td>
                            <td class="px-4 py-4">maya@example.com</td>
                            <td class="px-4 py-4">12</td>
                            <td class="px-4 py-4"><span class="rounded-full bg-slate-100 px-3 py-1 text-xs font-semibold text-slate-700">Baru</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
    </div>
