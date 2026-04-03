@extends('layouts.app')

@section('title', 'About — CatetCash')

@section('content')

    <style>
        .about-block {
            background: #fff;
            border: 1px solid #f3f4f6;
            border-radius: 24px;
            overflow: hidden;
            transition: all .22s;
        }

        .about-block:hover {
            box-shadow: 0 12px 40px rgba(0, 0, 0, .07);
            border-color: #d1fae5;
        }

        .about-icon {
            width: 46px;
            height: 46px;
            background: #f0fdf4;
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 18px;
        }
    </style>


    <section class="pt-28 pb-20 text-center"
        style="background: radial-gradient(ellipse 100% 70% at 50% 0%, #bbf7d0, #f9fafb 55%)">

        <div class="max-w-2xl mx-auto px-6">

            <span
                class="inline-block font-display text-[11px] font-bold text-green-600 tracking-[.1em] uppercase bg-green-50 border border-green-200 px-4 py-1.5 rounded-full mb-6">
                About CatetCash
            </span>

            <h1 class="font-display font-extrabold text-gray-900 tracking-tight mb-6"
                style="font-size: clamp(36px,5vw,52px); line-height:1.08">
                A simple way to<br>
                <span
                    style="background:linear-gradient(135deg,#15803d,#22c55e);-webkit-background-clip:text;-webkit-text-fill-color:transparent">
                    understand your spending.
                </span>
            </h1>

            <p class="text-gray-500 leading-relaxed text-[17px]">
                CatetCash was built with a very simple idea in mind
                tracking personal finances should not be complicated.
            </p>

        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="max-w-6xl mx-auto px-6">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="font-display font-extrabold text-gray-900 mb-5" style="font-size:32px; line-height:1.15">
                        Why CatetCash exists
                    </h2>
                    <p class="text-gray-500 text-sm leading-relaxed mb-4">
                        Most budgeting tools try to do everything at once complex dashboards,
                        dozens of features, and a steep learning curve.
                    </p>
                    <p class="text-gray-500 text-sm leading-relaxed mb-4">
                        But the truth is, many people simply want to know one thing:
                        <strong>where their money actually goes every day.</strong>
                    </p>
                    <p class="text-gray-500 text-sm leading-relaxed">
                        CatetCash focuses on the essentials recording expenses,
                        tracking budgets, and exporting simple reports.
                        Nothing more, nothing less.
                    </p>
                </div>

                <div class="bg-gray-50 border border-gray-100 rounded-2xl p-10">
                    <div class="font-display font-bold text-sm text-gray-900 mb-4">
                        What CatetCash helps you do
                    </div>
                    <div class="flex flex-col gap-3 text-sm text-gray-600">
                        <div class="flex items-center gap-2">
                            <span class="w-2 h-2 bg-green-500 rounded-full"></span>
                            Track daily expenses instantly
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="w-2 h-2 bg-green-500 rounded-full"></span>
                            Stay aware of your monthly budget
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="w-2 h-2 bg-green-500 rounded-full"></span>
                            Understand spending habits
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="w-2 h-2 bg-green-500 rounded-full"></span>
                            Export clean financial reports
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-gray-50">
        <div class="max-w-6xl mx-auto px-6">
            <div class="max-w-2xl mb-16">
                <span
                    class="inline-block font-display text-[11px] font-bold text-green-600 uppercase tracking-[.1em] bg-green-50 border border-green-200 px-4 py-1.5 rounded-full mb-5">
                    Our Principles
                </span>
                <h2 class="font-display font-extrabold text-gray-900 tracking-tight mb-5"
                    style="font-size: clamp(30px,4vw,44px); line-height:1.1">

                    A product built on
                    <span class="text-green-600">clarity and simplicity.</span>

                </h2>
                <p class="text-gray-500 leading-relaxed text-sm">
                    Every design decision in CatetCash follows a few core principles.
                    If a feature does not make managing money easier,
                    it simply does not belong in the product.
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-5">

                @foreach ([
            [
                'title' => 'Simplicity',
                'desc' => 'Financial tools should feel effortless. If something becomes complicated, we redesign it until it feels natural.',
            ],
            [
                'title' => 'Transparency',
                'desc' => 'No hidden fees, no selling personal financial data, and no confusing pricing models.',
            ],
            [
                'title' => 'Accessibility',
                'desc' => 'Managing personal finances should not require expertise. Anyone should be able to use it.',
            ],
            [
                'title' => 'Focus',
                'desc' => 'Instead of adding endless features, we focus on doing a few things extremely well.',
            ],
            [
                'title' => 'Privacy',
                'desc' => 'Your financial data belongs to you. CatetCash treats user data with strict respect.',
            ],
            [
                'title' => 'Clarity',
                'desc' => 'Numbers should be easy to read and understand no confusing dashboards.',
            ],
        ] as $item)
                    <div class="about-block p-7">
                        <div class="about-icon">
                            <svg width="20" height="20" fill="none" stroke="#16a34a" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <div class="font-display font-bold text-gray-900 text-sm mb-2">
                            {{ $item['title'] }}
                        </div>
                        <p class="text-gray-500 text-sm leading-relaxed">
                            {{ $item['desc'] }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="pb-24">
        <div class="max-w-6xl mx-auto px-6">
            <div class="rounded-3xl p-16 text-center relative overflow-hidden"
                style="background: linear-gradient(135deg, #14532d, #16a34a, #4ade80)">
                <div class="absolute inset-0 pointer-events-none"
                    style="background: radial-gradient(circle at 80% 50%, rgba(255,255,255,.1), transparent 60%)"></div>
                <div class="relative">
                    <h2 class="font-display font-extrabold text-white mb-4" style="font-size:34px">
                        Start tracking your spending today.
                    </h2>
                    <p class="text-white/80 text-sm mb-8">
                        It takes less than a minute to start using CatetCash.
                    </p>
                    <a href="{{ route('register') }}"
                        class="inline-flex items-center gap-2 px-8 py-4 bg-white text-green-700 font-display font-extrabold text-sm rounded-full hover:bg-green-50 transition-all"
                        style="box-shadow:0 8px 28px rgba(0,0,0,.15)">
                        Create Free Account
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2.5"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
