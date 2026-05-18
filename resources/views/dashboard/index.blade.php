@extends('layouts.dashboard_user')

@section('title', 'Dashboard')
@section('page-title', 'Dashboard')

@section('content')

    <div class="mb-7 fade-up">
        <div class="text-gray-400 text-sm">Selamat pagi,</div>
        <div class="font-extrabold text-gray-900 text-2xl tracking-tight">
            {{ auth()->user()->name ?? 'Pengguna' }} 👋
        </div>
    </div>

    @include('partials.stat_cards', [
        'totalExpense' => $totalExpense ?? 2847500,
        'remainingSaldo' => $remainingSaldo ?? 4152500,
        'budgetTotal' => $budgetTotal ?? 7000000,
        'budgetPercent' => $budgetPercent ?? 41,
        'percentChange' => $percentChange ?? 12,
        'month' => $month ?? 'Mei 2025',
    ])

    @include('partials.calendar')

    @include('partials.category_summary', [
        'month' => $month ?? 'Mei 2025',
        'categories' => $categories ?? [
            [
                'icon' => '🍜',
                'label' => 'Makan & Minum',
                'amount' => 890000,
                'percent' => 62,
                'color_bg' => 'bg-orange-50',
                'color_text' => 'text-orange-600',
                'color_border' => 'border-orange-100',
                'color_bar_bg' => 'bg-orange-100',
                'color_bar' => 'bg-orange-400',
            ],
            [
                'icon' => '🚗',
                'label' => 'Transport',
                'amount' => 540000,
                'percent' => 38,
                'color_bg' => 'bg-blue-50',
                'color_text' => 'text-blue-600',
                'color_border' => 'border-blue-100',
                'color_bar_bg' => 'bg-blue-100',
                'color_bar' => 'bg-blue-400',
            ],
            [
                'icon' => '🛍️',
                'label' => 'Belanja',
                'amount' => 720000,
                'percent' => 50,
                'color_bg' => 'bg-purple-50',
                'color_text' => 'text-purple-600',
                'color_border' => 'border-purple-100',
                'color_bar_bg' => 'bg-purple-100',
                'color_bar' => 'bg-purple-400',
            ],
            [
                'icon' => '💊',
                'label' => 'Kesehatan',
                'amount' => 200000,
                'percent' => 14,
                'color_bg' => 'bg-green-50',
                'color_text' => 'text-green-700',
                'color_border' => 'border-green-100',
                'color_bar_bg' => 'bg-green-100',
                'color_bar' => 'bg-green-500',
            ],
        ],
    ])

@endsection
