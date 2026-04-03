@props([
    'title'   => '',
    'value'   => '',
    'sub'     => '',
    'icon'    => 'default',
    'variant' => 'default',   {{-- default | income | expense | balance --}}
])

@php
$variants = [
    'balance' => [
        'wrap'  => 'bg-gradient-to-br from-gray-900 to-gray-800 border-gray-700',
        'title' => 'text-white/60',
        'value' => 'text-white',
        'sub'   => 'text-white/40',
        'icon'  => 'bg-green-500/20 border-green-500/30',
        'svg'   => 'text-green-400',
    ],
    'income' => [
        'wrap'  => 'bg-white border-gray-100',
        'title' => 'text-gray-500',
        'value' => 'text-green-600',
        'sub'   => 'text-gray-400',
        'icon'  => 'bg-green-50 border-green-100',
        'svg'   => 'text-green-500',
    ],
    'expense' => [
        'wrap'  => 'bg-white border-gray-100',
        'title' => 'text-gray-500',
        'value' => 'text-red-500',
        'sub'   => 'text-gray-400',
        'icon'  => 'bg-red-50 border-red-100',
        'svg'   => 'text-red-400',
    ],
    'default' => [
        'wrap'  => 'bg-white border-gray-100',
        'title' => 'text-gray-500',
        'value' => 'text-gray-900',
        'sub'   => 'text-gray-400',
        'icon'  => 'bg-gray-50 border-gray-100',
        'svg'   => 'text-gray-400',
    ],
];
$v = $variants[$variant] ?? $variants['default'];
@endphp

<div class="border rounded-2xl p-6 {{ $v['wrap'] }} transition-all hover:shadow-md hover:-translate-y-0.5 duration-200">
    <div class="flex items-start justify-between mb-4">
        <p class="text-xs font-semibold uppercase tracking-[.08em] {{ $v['title'] }}">{{ $title }}</p>
        <div class="w-9 h-9 rounded-xl border flex items-center justify-center shrink-0 {{ $v['icon'] }}">
            @if ($icon === 'balance')
                <svg class="w-4 h-4 {{ $v['svg'] }}" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
                </svg>
            @elseif ($icon === 'income')
                <svg class="w-4 h-4 {{ $v['svg'] }}" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                </svg>
            @elseif ($icon === 'expense')
                <svg class="w-4 h-4 {{ $v['svg'] }}" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M20 12H4" />
                </svg>
            @else
                <svg class="w-4 h-4 {{ $v['svg'] }}" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                </svg>
            @endif
        </div>
    </div>
    <p class="font-extrabold tracking-tight font-mono {{ $v['value'] }}" style="font-size:24px">{{ $value }}</p>
    @if ($sub)
        <p class="text-xs mt-1.5 {{ $v['sub'] }}">{{ $sub }}</p>
    @endif
</div>