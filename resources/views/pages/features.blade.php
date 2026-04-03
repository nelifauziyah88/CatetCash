@extends('layouts.app')

@section('title', 'Features — CatetCash')

@section('content')

    <style>
        .feature-block {
            background: #fff;
            border: 1px solid #f3f4f6;
            border-radius: 24px;
            overflow: hidden;
            transition: all .22s;
        }

        .feature-block:hover {
            box-shadow: 0 12px 40px rgba(0, 0, 0, .07);
            border-color: #d1fae5;
        }

        .feat-icon {
            width: 48px;
            height: 48px;
            background: #f0fdf4;
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }

        .feat-check {
            display: flex;
            align-items: flex-start;
            gap: 10px;
            font-size: 13.5px;
            color: #374151;
            line-height: 1.6;
        }

        .feat-check-dot {
            width: 18px;
            height: 18px;
            background: #dcfce7;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            margin-top: 1px;
        }

        .mock-row {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 8px 0;
            border-bottom: 1px solid #f3f4f6;
            font-size: 12px;
        }

        .mock-row:last-child {
            border-bottom: none;
        }

        .mock-cat {
            width: 28px;
            height: 28px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 13px;
            flex-shrink: 0;
        }
    </style>


    <section class="pt-28 pb-16 text-center"
        style="background: radial-gradient(ellipse 100% 70% at 50% 0%, #bbf7d0, #f9fafb 55%)">
        <div class="max-w-2xl mx-auto px-6">
            <span
                class="inline-block font-display text-[11px] font-bold text-green-600 tracking-[.1em] uppercase bg-green-50 border border-green-200 px-4 py-1.5 rounded-full mb-6">
                Features
            </span>
            <h1 class="font-display font-extrabold text-gray-900 tracking-tight mb-5"
                style="font-size: clamp(36px, 5vw, 52px); line-height: 1.08">
                Simple tools,<br>
                <span
                    style="background:linear-gradient(135deg,#15803d,#22c55e);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text">real
                    results.</span>
            </h1>
            <p class="text-gray-500 leading-relaxed mb-10" style="font-size: 17px">
                CatetCash keeps it lean on purpose. Three core features, done right.
            </p>
            <a href="{{ route('register') }}"
                class="inline-flex items-center gap-2 px-7 py-3.5 text-sm font-bold text-white font-display rounded-full transition-all hover:-translate-y-0.5"
                style="background:linear-gradient(135deg,#16a34a,#22c55e);box-shadow:0 8px 28px rgba(34,197,94,.32)">
                Get Started Free
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                </svg>
            </a>
        </div>
    </section>


    <div class="max-w-6xl mx-auto px-6 py-16 flex flex-col gap-6">


        <div class="feature-block">
            <div class="grid md:grid-cols-2">

                <div class="p-12">
                    <div class="feat-icon">
                        <svg width="24" height="24" fill="none" stroke="#16a34a" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                        </svg>
                    </div>
                    <div class="font-display text-[11px] font-bold text-green-600 uppercase tracking-[.1em] mb-3">Feature 01
                    </div>
                    <h2 class="font-display font-extrabold text-gray-900 tracking-tight mb-4"
                        style="font-size:30px;line-height:1.1">Quick Record</h2>
                    <p class="text-gray-500 text-sm leading-relaxed mb-6">
                        Log any expense the moment it happens. No lengthy forms, no categories to configure first
                        just enter what you spent and move on with your day.
                    </p>
                    <div class="flex flex-col gap-3">
                        @foreach (['Enter name, amount, and date', 'Instantly updates your remaining budget', 'Entries grouped automatically by date', 'Optional note for each entry'] as $point)
                            <div class="feat-check">
                                <div class="feat-check-dot">
                                    <svg width="9" height="9" fill="none" stroke="#16a34a" stroke-width="2.5"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                    </svg>
                                </div>
                                {{ $point }}
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="bg-gray-50 border-l border-gray-100 p-10 flex items-center">
                    <div class="w-full">
                        <div class="bg-white border border-gray-100 rounded-2xl overflow-hidden mb-3">
                            <div class="flex justify-between items-center px-4 py-3 border-b border-gray-50">
                                <span class="font-display font-bold text-sm text-gray-900">Add Expense</span>
                                <span class="text-[10px] text-gray-400">Today, 14 Mar</span>
                            </div>
                            <div class="p-4 flex flex-col gap-2.5">
                                <div
                                    class="bg-gray-50 border border-gray-100 rounded-xl px-3 py-2.5 text-xs text-gray-600 flex items-center gap-2">

                                    <svg class="w-4 h-4 text-orange-500" fill="none" stroke="currentColor"
                                        stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M3 4h18M4 8h16M6 12h12M8 16h8M10 20h4" />
                                    </svg>
                                    <span>Lunch at warung</span>
                                </div>
                                <div class="bg-gray-50 border border-gray-100 rounded-xl px-3 py-2.5 text-xs text-gray-600">
                                    Rp 25.000
                                </div>
                                <button class="w-full py-2.5 text-white font-display font-bold text-xs rounded-xl"
                                    style="background:linear-gradient(135deg,#16a34a,#22c55e)">Save Expense</button>
                            </div>
                        </div>
                        <div class="flex flex-col">
                            <div class="mock-row">
                                <div class="mock-cat bg-orange-50 flex items-center justify-center">
                                    <svg class="w-4 h-4 text-orange-500" fill="none" stroke="currentColor"
                                        stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M3 4h18M4 8h16M6 12h12M8 16h8M10 20h4" />
                                    </svg>
                                </div>
                                <span class="flex-1 font-medium text-gray-700">Lunch</span>
                                <span class="font-bold text-red-500">-Rp 25k</span>
                            </div>
                            <div class="mock-row">
                                <div class="mock-cat bg-blue-50 flex items-center justify-center">
                                    <svg class="w-4 h-4 text-blue-500" fill="none" stroke="currentColor" stroke-width="2"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M3 13l2-5a2 2 0 012-1h10a2 2 0 012 1l2 5M5 13h14M6 18a2 2 0 100-4 2 2 0 000 4zm12 0a2 2 0 100-4 2 2 0 000 4z" />
                                    </svg>
                                </div>
                                <span class="flex-1 font-medium text-gray-700">Fuel</span>
                                <span class="font-bold text-red-500">-Rp 50k</span>
                            </div>
                            <div class="mock-row">
                                <div class="mock-cat bg-green-50 flex items-center justify-center">
                                    <svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor"
                                        stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M3 3h2l.4 2M7 13h10l3-8H6.4M7 13L5.4 5M7 13l-1.5 6h11M10 21a1 1 0 100-2 1 1 0 000 2zm8 0a1 1 0 100-2 1 1 0 000 2z" />
                                    </svg>
                                </div>
                                <span class="flex-1 font-medium text-gray-700">Groceries</span>
                                <span class="font-bold text-red-500">-Rp 75k</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="feature-block">
            <div class="grid md:grid-cols-2">

                <div class="bg-gray-50 border-r border-gray-100 p-10 flex items-center">
                    <div class="w-full">
                        <div class="bg-white border border-gray-100 rounded-2xl overflow-hidden mb-3">
                            <div class="px-4 py-3 border-b border-gray-50">
                                <span class="font-display font-bold text-sm text-gray-900">Edit Expense</span>
                            </div>
                            <div class="p-4 flex flex-col gap-2.5">
                                <div
                                    class="bg-yellow-50 border border-yellow-100 rounded-xl px-3 py-2.5 text-xs text-gray-600 flex items-center gap-2">
                                    <svg class="w-4 h-4 text-orange-500" fill="none" stroke="currentColor"
                                        stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M3 4h18M4 8h16M6 12h12M8 16h8M10 20h4" />
                                    </svg>
                                    <span>Lunch at warung</span>
                                </div>
                                <div
                                    class="bg-yellow-50 border border-yellow-100 rounded-xl px-3 py-2.5 text-xs text-gray-600">
                                    Rp <span class="line-through text-gray-400">25.000</span> &nbsp;30.000
                                </div>
                                <div class="grid grid-cols-2 gap-2">
                                    <button
                                        class="py-2 text-xs font-medium text-gray-500 bg-white border border-gray-100 rounded-xl">Cancel</button>
                                    <button class="py-2 text-xs font-bold text-white font-display rounded-xl"
                                        style="background:linear-gradient(135deg,#16a34a,#22c55e)">Save</button>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white border border-red-100 rounded-xl p-3 flex items-center gap-2.5">
                            <svg class="w-4 h-4 text-blue-500" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3 13l2-5a2 2 0 012-1h10a2 2 0 012 1l2 5M5 13h14M6 18a2 2 0 100-4 2 2 0 000 4zm12 0a2 2 0 100-4 2 2 0 000 4z" />
                            </svg>
                            <span class="flex-1 text-xs font-medium text-gray-700">Fuel</span>
                            <span class="text-xs font-bold text-red-500">-Rp 50k</span>
                            <button
                                class="w-6 h-6 bg-red-50 border border-red-100 rounded-lg flex items-center justify-center">
                                <svg class="w-2.5 h-2.5 text-red-400" fill="none" stroke="currentColor"
                                    stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="p-12">
                    <div class="feat-icon">
                        <svg width="24" height="24" fill="none" stroke="#16a34a" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                        </svg>
                    </div>
                    <div class="font-display text-[11px] font-bold text-green-600 uppercase tracking-[.1em] mb-3">Feature
                        02</div>
                    <h2 class="font-display font-extrabold text-gray-900 tracking-tight mb-4"
                        style="font-size:30px;line-height:1.1">Edit Anytime</h2>
                    <p class="text-gray-500 text-sm leading-relaxed mb-6">
                        Typos happen. Amounts change. Edit or delete any expense record at any time — no restrictions,
                        no confirmation emails, just fix it and continue.
                    </p>
                    <div class="flex flex-col gap-3">
                        @foreach (['Edit name, amount, or date anytime', 'Delete entries with one click', 'Budget balance updates automatically', 'Full edit history stays in your report'] as $point)
                            <div class="feat-check">
                                <div class="feat-check-dot">
                                    <svg width="9" height="9" fill="none" stroke="#16a34a"
                                        stroke-width="2.5" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                    </svg>
                                </div>
                                {{ $point }}
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>


        <div class="feature-block">
            <div class="grid md:grid-cols-2">

                <div class="p-12">
                    <div class="feat-icon">
                        <svg width="24" height="24" fill="none" stroke="#16a34a" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                    </div>
                    <div class="font-display text-[11px] font-bold text-green-600 uppercase tracking-[.1em] mb-3">Feature
                        03</div>
                    <h2 class="font-display font-extrabold text-gray-900 tracking-tight mb-4"
                        style="font-size:30px;line-height:1.1">Export to Excel</h2>
                    <p class="text-gray-500 text-sm leading-relaxed mb-6">
                        At the end of any month, download a clean, structured Excel file of all your recorded expenses.
                        Share it, archive it, or hand it to your accountant.
                    </p>
                    <div class="flex flex-col gap-3">
                        @foreach (['Export per month, any month', 'Includes date, name, amount, and total', 'Clean format, ready to open in Excel or Sheets', 'One click, instant download'] as $point)
                            <div class="feat-check">
                                <div class="feat-check-dot">
                                    <svg width="9" height="9" fill="none" stroke="#16a34a"
                                        stroke-width="2.5" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                    </svg>
                                </div>
                                {{ $point }}
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="bg-gray-50 border-l border-gray-100 p-10 flex items-center">
                    <div class="w-full">
                        <div class="bg-white border border-green-100 rounded-2xl p-4 flex items-center gap-3 mb-4">
                            <div class="w-10 h-10 bg-green-50 rounded-xl flex items-center justify-center flex-shrink-0">
                                <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor"
                                    stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                </svg>
                            </div>
                            <div class="flex-1 min-w-0">
                                <div class="font-display font-bold text-sm text-gray-900 truncate">
                                    catetcash_maret_2025.xlsx</div>
                                <div class="text-[11px] text-gray-400">23 entries · 48 KB</div>
                            </div>
                            <button
                                class="flex items-center gap-1.5 px-3 py-2 text-[11px] font-bold text-white font-display rounded-lg flex-shrink-0"
                                style="background:linear-gradient(135deg,#16a34a,#22c55e)">
                                <svg class="w-2.5 h-2.5" fill="none" stroke="currentColor" stroke-width="2.5"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 10v6m0 0l-3-3m3 3l3-3" />
                                </svg>
                                Download
                            </button>
                        </div>
                        <div class="bg-white border border-gray-100 rounded-xl overflow-hidden text-xs">
                            <div class="grid bg-gray-50 border-b border-gray-100 px-3 py-2 font-display font-bold text-gray-400 uppercase tracking-[.06em]"
                                style="grid-template-columns:70px 1fr 80px;font-size:9px">
                                <span>Date</span><span>Description</span><span class="text-right">Amount</span>
                            </div>
                            @foreach ([['14 Mar', 'Lunch', '25.000'], ['14 Mar', 'Fuel', '50.000'], ['13 Mar', 'Groceries', '75.000']] as $row)
                                <div class="grid px-3 py-2 border-b border-gray-50 text-gray-600"
                                    style="grid-template-columns:70px 1fr 80px">
                                    <span>{{ $row[0] }}</span><span>{{ $row[1] }}</span>
                                    <span class="text-right text-red-500 font-semibold">{{ $row[2] }}</span>
                                </div>
                            @endforeach
                            <div class="grid px-3 py-2 bg-gray-50 font-bold text-gray-900"
                                style="grid-template-columns:70px 1fr 80px">
                                <span class="col-span-2">Total</span>
                                <span class="text-right text-green-600">650.000</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>


    </div>


    <div class="max-w-6xl mx-auto px-6 pb-20">
        <div class="rounded-3xl p-16 text-center relative overflow-hidden"
            style="background: linear-gradient(135deg, #14532d, #16a34a, #4ade80)">
            <div class="absolute inset-0 pointer-events-none"
                style="background: radial-gradient(circle at 80% 50%, rgba(255,255,255,.1), transparent 60%)"></div>
            <div class="relative">
                <h2 class="font-display font-extrabold text-white tracking-tight mb-3" style="font-size:36px">
                    Start tracking today.
                </h2>
                <p class="text-white/75 mb-8" style="font-size:15px">
                    Free forever. No setup required. Just sign up and go.
                </p>
                <a href="{{ route('register') }}"
                    class="inline-flex items-center gap-2 px-8 py-4 bg-white text-green-700 font-display font-extrabold text-sm rounded-full hover:bg-green-50 transition-all"
                    style="box-shadow: 0 8px 28px rgba(0,0,0,.15)">
                    Get Started Free
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2.5"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                    </svg>
                </a>
            </div>
        </div>
    </div>

@endsection
