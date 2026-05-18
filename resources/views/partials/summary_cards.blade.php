@php
    $todayExpense      = 85000;
    $todayIncome       = 500000;
    $todayExpenseCount = 3;
    $todayIncomeCount  = 1;
    $monthBalance      = 1250000;
    $currentMonth      = 'Mei 2025';
@endphp

<div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mb-8">

    <div class="relative bg-gray-900 border border-white/5 rounded-2xl p-5 overflow-hidden group hover:border-red-500/20 transition-all">
        <div class="absolute -top-6 -right-6 w-24 h-24 bg-red-500/10 rounded-full blur-2xl group-hover:bg-red-500/20 transition-all"></div>
        <div class="flex items-center justify-between mb-4">
            <div class="w-9 h-9 rounded-xl bg-red-500/15 border border-red-500/20 flex items-center justify-center">
                <svg class="w-4 h-4 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 13l-5 5m0 0l-5-5m5 5V6"/>
                </svg>
            </div>
            <span class="text-xs text-gray-600 font-medium">Hari ini</span>
        </div>
        <p class="text-xs text-gray-500 mb-1 font-medium">Total Pengeluaran</p>
        <p class="text-2xl font-extrabold text-white tracking-tight">
            Rp {{ number_format($todayExpense, 0, ',', '.') }}
        </p>
        <p class="text-xs text-red-400 mt-1.5">{{ $todayExpenseCount }} transaksi hari ini</p>
    </div>

    <div class="relative bg-gray-900 border border-white/5 rounded-2xl p-5 overflow-hidden group hover:border-emerald-500/20 transition-all">
        <div class="absolute -top-6 -right-6 w-24 h-24 bg-emerald-500/10 rounded-full blur-2xl group-hover:bg-emerald-500/20 transition-all"></div>
        <div class="flex items-center justify-between mb-4">
            <div class="w-9 h-9 rounded-xl bg-emerald-500/15 border border-emerald-500/20 flex items-center justify-center">
                <svg class="w-4 h-4 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 11l5-5m0 0l5 5m-5-5v12"/>
                </svg>
            </div>
            <span class="text-xs text-gray-600 font-medium">Hari ini</span>
        </div>
        <p class="text-xs text-gray-500 mb-1 font-medium">Total Pemasukan</p>
        <p class="text-2xl font-extrabold text-white tracking-tight">
            Rp {{ number_format($todayIncome, 0, ',', '.') }}
        </p>
        <p class="text-xs text-emerald-400 mt-1.5">{{ $todayIncomeCount }} transaksi hari ini</p>
    </div>

    <div class="relative bg-gray-900 border border-white/5 rounded-2xl p-5 overflow-hidden group hover:border-sky-500/20 transition-all">
        <div class="absolute -top-6 -right-6 w-24 h-24 bg-sky-500/10 rounded-full blur-2xl group-hover:bg-sky-500/20 transition-all"></div>
        <div class="flex items-center justify-between mb-4">
            <div class="w-9 h-9 rounded-xl bg-sky-500/15 border border-sky-500/20 flex items-center justify-center">
                <svg class="w-4 h-4 text-sky-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
            </div>
            <span class="text-xs text-gray-600 font-medium">Bulan ini</span>
        </div>
        <p class="text-xs text-gray-500 mb-1 font-medium">Saldo Bersih</p>
        <p class="text-2xl font-extrabold text-white tracking-tight">
            Rp {{ number_format($monthBalance, 0, ',', '.') }}
        </p>
        <p class="text-xs text-sky-400 mt-1.5">{{ $currentMonth }}</p>
    </div>

</div>