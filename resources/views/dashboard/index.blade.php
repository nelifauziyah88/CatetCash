@extends('layouts.dashboard_user')

@section('title', 'Dashboard')
@section('page-title', 'Dashboard')
@section('page-subtitle', 'Here\'s your financial overview for this month.')

@section('content')

    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mb-8">

        <x-card title="Current Balance" value="Rp {{ number_format($balance ?? 0, 0, ',', '.') }}" sub="Updated just now"
            icon="balance" variant="balance" />

        <x-card title="Total Income" value="Rp {{ number_format($totalIncome ?? 0, 0, ',', '.') }}" sub="This month"
            icon="income" variant="income" />

        <x-card title="Total Expenses" value="Rp {{ number_format($totalExpense ?? 0, 0, ',', '.') }}" sub="This month"
            icon="expense" variant="expense" />

    </div>

    @php
        $total = ($totalIncome ?? 0) + ($totalExpense ?? 0);
        $pct = $total > 0 ? round(($totalExpense / $total) * 100) : 0;
    @endphp
    <div class="bg-white border border-gray-100 rounded-2xl p-6 mb-8">
        <div class="flex items-center justify-between mb-3">
            <p class="text-sm font-semibold text-gray-700">Monthly Spending Ratio</p>
            <span class="text-xs font-mono font-bold text-gray-500">{{ $pct }}% spent</span>
        </div>
        <div class="w-full bg-gray-100 rounded-full h-2.5 overflow-hidden">
            <div class="h-2.5 rounded-full transition-all duration-500"
                style="width: {{ $pct }}%; background: linear-gradient(90deg, #16a34a, #4ade80)"></div>
        </div>
        <div class="flex justify-between mt-2">
            <span class="text-[11px] text-gray-400">Income: Rp {{ number_format($totalIncome ?? 0, 0, ',', '.') }}</span>
            <span class="text-[11px] text-gray-400">Expense: Rp {{ number_format($totalExpense ?? 0, 0, ',', '.') }}</span>
        </div>
    </div>

    <div class="bg-white border border-gray-100 rounded-2xl overflow-hidden">

        <div class="flex items-center justify-between px-6 py-4 border-b border-gray-50">
            <div>
                <p class="font-bold text-gray-900 text-sm">Recent Transactions</p>
                <p class="text-xs text-gray-400 mt-0.5">Latest activity on your account</p>
            </div>
            <a href="#"
                class="text-xs font-semibold text-green-600 hover:text-green-700 hover:underline transition-colors">
                View All →
            </a>
        </div>

        @forelse ($transactions ?? [] as $trx)
            @php
                $isIncome = ($trx->type ?? 'expense') === 'income';
                $catColors = [
                    'food' => ['bg' => 'bg-orange-50', 'text' => 'text-orange-500'],
                    'transport' => ['bg' => 'bg-blue-50', 'text' => 'text-blue-500'],
                    'grocery' => ['bg' => 'bg-green-50', 'text' => 'text-green-500'],
                    'salary' => ['bg' => 'bg-purple-50', 'text' => 'text-purple-500'],
                    'other' => ['bg' => 'bg-gray-50', 'text' => 'text-gray-400'],
                ];
                $cat = $catColors[$trx->category ?? 'other'] ?? $catColors['other'];
            @endphp

            <div
                class="flex items-center gap-4 px-6 py-3.5 border-b border-gray-50 last:border-0 hover:bg-gray-50/70 transition-colors">

                <div class="w-9 h-9 rounded-xl flex items-center justify-center shrink-0 {{ $cat['bg'] }}">
                    @if (($trx->category ?? '') === 'food')
                        <svg class="w-4 h-4 {{ $cat['text'] }}" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3 4h18M4 8h16M6 12h12M8 16h8M10 20h4" />
                        </svg>
                    @elseif (($trx->category ?? '') === 'transport')
                        <svg class="w-4 h-4 {{ $cat['text'] }}" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3 13l2-5a2 2 0 012-1h10a2 2 0 012 1l2 5M5 13h14M6 18a2 2 0 100-4 2 2 0 000 4zm12 0a2 2 0 100-4 2 2 0 000 4z" />
                        </svg>
                    @elseif (($trx->category ?? '') === 'salary')
                        <svg class="w-4 h-4 {{ $cat['text'] }}" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    @else
                        <svg class="w-4 h-4 {{ $cat['text'] }}" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3 3h2l.4 2M7 13h10l3-8H6.4M7 13L5.4 5M7 13l-1.5 6h11M10 21a1 1 0 100-2 1 1 0 000 2zm8 0a1 1 0 100-2 1 1 0 000 2z" />
                        </svg>
                    @endif
                </div>

                <div class="flex-1 min-w-0">
                    <p class="text-sm font-semibold text-gray-800 truncate">{{ $trx->name ?? '-' }}</p>
                    <p class="text-[11px] text-gray-400">{{ \Carbon\Carbon::parse($trx->date ?? now())->format('d M Y') }}
                    </p>
                </div>

                @if (!empty($trx->note))
                    <span
                        class="hidden sm:inline text-[11px] text-gray-400 bg-gray-50 border border-gray-100 rounded-lg px-2 py-1 max-w-[140px] truncate">
                        {{ $trx->note }}
                    </span>
                @endif

                <span class="font-mono font-bold text-sm shrink-0 {{ $isIncome ? 'text-green-600' : 'text-red-500' }}">
                    {{ $isIncome ? '+' : '-' }}Rp {{ number_format($trx->amount ?? 0, 0, ',', '.') }}
                </span>

            </div>
        @empty
            <div class="flex flex-col items-center justify-center py-16 text-center">
                <div class="w-12 h-12 rounded-2xl bg-gray-50 border border-gray-100 flex items-center justify-center mb-4">
                    <svg class="w-5 h-5 text-gray-300" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                    </svg>
                </div>
                <p class="text-sm font-semibold text-gray-500">No transactions yet</p>
                <p class="text-xs text-gray-400 mt-1">Start by recording your first expense.</p>
                <a href="#"
                    class="mt-4 inline-flex items-center gap-1.5 text-xs font-bold text-white px-4 py-2 rounded-xl"
                    style="background: linear-gradient(135deg, #16a34a, #22c55e)">
                    + Add Transaction
                </a>
            </div>
        @endforelse

    </div>

@endsection
