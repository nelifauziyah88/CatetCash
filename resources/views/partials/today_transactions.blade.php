@php
    $todayTransactions = collect([
        (object)['description' => 'Nasi Padang',  'category' => 'Makanan',   'amount' => 22000, 'type' => 'expense', 'date' => '2025-05-18 08:30:00'],
        (object)['description' => 'Grab',         'category' => 'Transport', 'amount' => 15000, 'type' => 'expense', 'date' => '2025-05-18 09:10:00'],
        (object)['description' => 'Shopee',       'category' => 'Belanja',   'amount' => 48000, 'type' => 'expense', 'date' => '2025-05-18 11:45:00'],
    ]);
    $todayExpense = $todayTransactions->where('type','expense')->sum('amount');
    $todayIncome  = $todayTransactions->where('type','income')->sum('amount');
@endphp

<div class="bg-gray-900 border border-white/5 rounded-2xl overflow-hidden flex flex-col h-full">

    <div class="p-5 border-b border-white/5">
        <div class="flex items-center justify-between">
            <div>
                <h2 class="text-base font-bold text-white">Transaksi Hari Ini</h2>
                <p class="text-xs text-gray-500 mt-0.5">
                    18 Mei 2025
                </p>
            </div>
                class="flex items-center gap-1.5 bg-emerald-500 hover:bg-emerald-400 active:scale-95 text-white text-xs font-bold px-3 py-2 rounded-xl transition-all shadow-lg shadow-emerald-900/40">
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 4v16m8-8H4"/>
                </svg>
                Tambah
            </a>
        </div>
    </div>

    <div class="flex-1 overflow-y-auto custom-scroll divide-y divide-white/[0.04]">

        @forelse($todayTransactions as $tx)
        <div class="flex items-center gap-3 px-5 py-3.5 hover:bg-white/[0.025] transition-all">

            <div class="w-9 h-9 rounded-xl flex-shrink-0 flex items-center justify-center
                {{ $tx->type === 'expense' ? 'bg-red-500/15 border border-red-500/20' : 'bg-emerald-500/15 border border-emerald-500/20' }}">
                @if($tx->type === 'expense')
                    <svg class="w-4 h-4 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 13l-5 5m0 0l-5-5m5 5V6"/>
                    </svg>
                @else
                    <svg class="w-4 h-4 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 11l5-5m0 0l5 5m-5-5v12"/>
                    </svg>
                @endif
            </div>

            <div class="flex-1 min-w-0">
                <p class="text-sm font-semibold text-white truncate">{{ $tx->description }}</p>
                <p class="text-xs text-gray-500 mt-0.5">
                    {{ $tx->category ?? 'Lainnya' }}
                    · {{ \Carbon\Carbon::parse($tx->date)->format('H:i') }}
                </p>
            </div>

            <p class="text-sm font-bold flex-shrink-0
                {{ $tx->type === 'expense' ? 'text-red-400' : 'text-emerald-400' }}">
                {{ $tx->type === 'expense' ? '-' : '+' }}Rp {{ number_format($tx->amount, 0, ',', '.') }}
            </p>
        </div>

        @empty
        <div class="flex flex-col items-center justify-center py-14 px-6 text-center">
            <div class="w-12 h-12 rounded-2xl bg-white/5 border border-white/10 flex items-center justify-center mb-3">
                <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                        d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                </svg>
            </div>
            <p class="text-sm font-semibold text-gray-400">Belum ada transaksi</p>
            <p class="text-xs text-gray-600 mt-1">Yuk catat pengeluaran kamu hari ini!</p>
        </div>
        @endforelse

    </div>

    @if(count($todayTransactions) > 0)
    <div class="p-5 border-t border-white/5">
        <div class="flex justify-between items-center">
            <span class="text-xs text-gray-500">Pengeluaran</span>
            <span class="text-sm font-extrabold text-red-400">
                - Rp {{ number_format($todayExpense, 0, ',', '.') }}
            </span>
        </div>
        @if($todayIncome > 0)
        <div class="flex justify-between items-center mt-1.5">
            <span class="text-xs text-gray-500">Pemasukan</span>
            <span class="text-sm font-extrabold text-emerald-400">
                + Rp {{ number_format($todayIncome, 0, ',', '.') }}
            </span>
        </div>
        @endif
    </div>
    @endif

</div>