<div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-6 fade-up-2">

  <div class="stat-card bg-white rounded-3xl border border-gray-100 p-6 relative overflow-hidden"
       style="transition: box-shadow .2s, transform .2s">
    <div class="absolute top-0 right-0 w-32 h-32 rounded-full opacity-5"
         style="background:#ef4444;transform:translate(30%,-30%)"></div>
    <div class="flex items-center justify-between mb-4">
      <div class="w-10 h-10 rounded-2xl flex items-center justify-center"
           style="background:linear-gradient(135deg,#fee2e2,#fecaca)">
        <svg width="18" height="18" fill="none" stroke="#ef4444" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round"
                d="M12 20V10m0 0l-3 3m3-3l3 3M12 4v2"/>
          <circle cx="12" cy="12" r="10"/>
        </svg>
      </div>
      <span class="badge bg-red-50 text-red-500">{{ $month ?? 'Bulan Ini' }}</span>
    </div>
    <div class="text-xs text-gray-400 font-semibold mb-1">Total Pengeluaran</div>
    <div class="font-extrabold text-gray-900 tracking-tight mono" style="font-size:26px">
      Rp {{ number_format($totalExpense ?? 0, 0, ',', '.') }}
    </div>
    <div class="mt-3 flex items-center gap-1.5 text-xs text-red-500 font-semibold">
      <svg width="13" height="13" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7 7 7-7"/>
      </svg>
      +{{ $percentChange ?? 0 }}% dari bulan lalu
    </div>
  </div>

  <div class="stat-card bg-white rounded-3xl border border-gray-100 p-6 relative overflow-hidden"
       style="transition: box-shadow .2s, transform .2s">
    <div class="absolute top-0 right-0 w-32 h-32 rounded-full opacity-5"
         style="background:#16a34a;transform:translate(30%,-30%)"></div>
    <div class="flex items-center justify-between mb-4">
      <div class="w-10 h-10 rounded-2xl flex items-center justify-center"
           style="background:linear-gradient(135deg,#dcfce7,#bbf7d0)">
        <svg width="18" height="18" fill="none" stroke="#16a34a" stroke-width="2" viewBox="0 0 24 24">
          <rect x="2" y="5" width="20" height="14" rx="3"/>
          <path stroke-linecap="round" d="M2 10h20"/>
          <circle cx="7" cy="15" r="1" fill="#16a34a" stroke="none"/>
        </svg>
      </div>
      <span class="badge bg-green-50 text-green-700">Saldo Aktif</span>
    </div>
    <div class="text-xs text-gray-400 font-semibold mb-1">Total Saldo Tersisa</div>
    <div class="font-extrabold text-gray-900 tracking-tight mono" style="font-size:26px">
      Rp {{ number_format($remainingSaldo ?? 0, 0, ',', '.') }}
    </div>
    <div class="mt-3">
      <div class="flex justify-between text-xs text-gray-400 mb-1">
        <span>Terpakai {{ $budgetPercent ?? 0 }}%</span>
        <span>Budget: Rp {{ number_format(($budgetTotal ?? 0) / 1000000, 0) }}jt</span>
      </div>
      <div class="h-1.5 bg-gray-100 rounded-full overflow-hidden">
        <div class="h-full rounded-full"
             style="width:{{ $budgetPercent ?? 0 }}%;background:linear-gradient(90deg,#16a34a,#4ade80)"></div>
      </div>
    </div>
  </div>

</div>
