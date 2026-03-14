<style>
    .gradient-text {
        background: linear-gradient(135deg, #15803d, #22c55e);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .hero-section {
        background: radial-gradient(ellipse 100% 70% at 60% 0%, #bbf7d0, #f0fdf4 55%);
        position: relative;
        overflow: hidden;
    }

    .hero-section::before {
        content: '';
        position: absolute;
        inset: 0;
        background-image: radial-gradient(circle, #86efac 1px, transparent 1px);
        background-size: 40px 40px;
        opacity: .18;
        mask-image: radial-gradient(ellipse 65% 60% at 60% 40%, black, transparent);
        pointer-events: none;
    }

    .hero-blob {
        position: absolute;
        border-radius: 50%;
        filter: blur(80px);
        pointer-events: none;
        background: radial-gradient(circle, rgba(134, 239, 172, .4), transparent 70%);
        width: 480px;
        height: 480px;
        top: -100px;
        right: -60px;
        animation: blobAnim 10s ease-in-out infinite;
    }

    @keyframes blobAnim {

        0%,
        100% {
            transform: translate(0, 0);
        }

        50% {
            transform: translate(12px, -18px);
        }
    }

    .hero-app-card {
        background: #fff;
        border-radius: 20px;
        border: 1px solid #e5e7eb;
        box-shadow: 0 8px 40px rgba(0, 0, 0, .08);
        overflow: hidden;
        animation: cardUp .7s .15s cubic-bezier(.4, 0, .2, 1) both;
    }

    @keyframes cardUp {
        from {
            opacity: 0;
            transform: translateY(24px);
        }

        to {
            opacity: 1;
            transform: none;
        }
    }

    .progress-track {
        background: #f3f4f6;
        border-radius: 100px;
        height: 8px;
        overflow: hidden;
    }

    .progress-fill {
        height: 100%;
        border-radius: 100px;
        background: linear-gradient(90deg, #16a34a, #4ade80);
    }

    .txn-row {
        display: flex;
        align-items: center;
        padding: 10px 0;
        border-bottom: 1px solid #f9fafb;
    }

    .txn-row:last-child {
        border-bottom: none;
    }

    .txn-icon {
        width: 32px;
        height: 32px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 14px;
        flex-shrink: 0;
    }

    .btn-edit {
        width: 26px;
        height: 26px;
        background: #f9fafb;
        border: 1px solid #f3f4f6;
        border-radius: 7px;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all .15s;
    }

    .btn-edit:hover {
        background: #f0fdf4;
        border-color: #bbf7d0;
    }
</style>


<section class="hero-section min-h-screen flex items-center pt-28 pb-16">
    <div class="hero-blob"></div>

    <div class="max-w-6xl mx-auto px-6 w-full relative z-10">
        <div class="grid lg:grid-cols-2 gap-20 items-center">


            <div>
                <div
                    class="inline-flex items-center gap-2 px-4 py-1.5 bg-green-100 border border-green-200 rounded-full mb-7">
                    <span class="w-1.5 h-1.5 bg-green-500 rounded-full"></span>
                    <span class="font-display text-[11px] font-bold text-green-700 tracking-widest">SIMPLE & FREE</span>
                </div>

                <h5 class="font-display font-extrabold leading-[1.08] tracking-tight text-gray-900 mb-5"
                    style="font-size: clamp(28px, 3.5vw, 42px)">
                    Track your daily<br>expenses,<br>
                    <span class="gradient-text">without hassle.</span>
                </h5>

                <p class="text-gray-500 leading-relaxed mb-8 max-w-[380px]" style="font-size: 16px">
                    Set your monthly budget, then record every expense.
                    See your remaining budget in real-time. Export reports to Excel anytime.
                </p>

                <div class="flex flex-col gap-2.5 mb-9">
                    @foreach ([['icon' => 'M12 4v16m8-8H4', 'label' => 'Record daily expenses quickly'], ['icon' => 'M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z', 'label' => 'Edit or delete records anytime'], ['icon' => 'M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z', 'label' => 'Export monthly reports to Excel']] as $item)
                        <div class="flex items-center gap-3 text-sm text-gray-700">
                            <div class="w-6 h-6 bg-green-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                <svg class="w-3 h-3 text-green-600" fill="none" stroke="currentColor"
                                    stroke-width="2.5" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="{{ $item['icon'] }}" />
                                </svg>
                            </div>
                            {{ $item['label'] }}
                        </div>
                    @endforeach
                </div>

                <div class="flex flex-wrap items-center gap-3">
                    <a href="{{ route('register') }}"
                        class="inline-flex items-center gap-2 px-7 py-3.5 text-sm font-bold text-white font-display rounded-full transition-all hover:-translate-y-0.5"
                        style="background:linear-gradient(135deg,#16a34a,#22c55e);box-shadow:0 8px 28px rgba(34,197,94,.32)">
                        Start for Free
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2.5"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                        </svg>
                    </a>
                </div>
            </div>


            <div class="hero-app-card">

                <div class="flex items-center justify-between px-5 py-4 border-b border-gray-100">
                    <div>
                        <div class="font-display font-bold text-sm text-gray-900">March 2026</div>
                        <div class="text-[11px] text-gray-400 mt-0.5">Expenses this month</div>
                    </div>
                    <button
                        class="inline-flex items-center gap-1.5 px-4 py-2 text-xs font-bold text-white font-display rounded-full"
                        style="background:linear-gradient(135deg,#16a34a,#22c55e);box-shadow:0 4px 14px rgba(34,197,94,.28)">
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2.5"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                        </svg>
                        Add
                    </button>
                </div>

                <div class="px-5 py-4 border-b border-gray-50">
                    <div class="flex justify-between items-baseline mb-2.5">
                        <span class="text-xs font-semibold text-gray-500">Monthly Budget</span>
                        <div>
                            <span class="text-[11px] text-gray-400">Remaining </span>
                            <span class="font-display font-extrabold text-green-600" style="font-size:17px">Rp
                                3.500.000</span>
                        </div>
                    </div>
                    <div class="progress-track">
                        <div class="progress-fill" style="width: 65%"></div>
                    </div>
                    <div class="flex justify-between mt-1.5">
                        <span class="text-[10px] text-gray-400">Spent: Rp 650.000</span>
                        <span class="text-[10px] text-gray-400">Budget: Rp 1.000.000</span>
                    </div>
                </div>

                <div class="px-5 py-4">

                    <div class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-3">
                        Today — March 14
                    </div>

                    <div class="txn-row">
                        <div class="txn-icon bg-orange-50 flex items-center justify-center">
                            <svg class="w-4 h-4 text-orange-500" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3 3v6a4 4 0 004 4h1v8h2v-8h1a4 4 0 004-4V3" />
                            </svg>
                        </div>

                        <div class="flex-1 ml-3">
                            <div class="text-sm font-semibold text-gray-900">Lunch</div>
                            <div class="text-[11px] text-gray-400">12:30</div>
                        </div>

                        <span class="text-sm font-bold text-red-500">Rp 25.000</span>
                    </div>

                    <div class="txn-row">
                        <div class="txn-icon bg-blue-50 flex items-center justify-center">
                            <svg class="w-4 h-4 text-blue-500" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3 6h13l3 3v9a2 2 0 01-2 2H5a2 2 0 01-2-2V6z" />
                            </svg>
                        </div>

                        <div class="flex-1 ml-3">
                            <div class="text-sm font-semibold text-gray-900">Gasoline</div>
                            <div class="text-[11px] text-gray-400">09:15</div>
                        </div>

                        <span class="text-sm font-bold text-red-500">Rp 50.000</span>
                    </div>

                    <div class="txn-row">
                        <div class="txn-icon bg-green-50 flex items-center justify-center">
                            <svg class="w-4 h-4 text-green-600" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l2 12h10l2-8H6" />
                            </svg>
                        </div>

                        <div class="flex-1 ml-3">
                            <div class="text-sm font-semibold text-gray-900">Grocery Shopping</div>
                            <div class="text-[11px] text-gray-400">18:00</div>
                        </div>

                        <span class="text-sm font-bold text-red-500">Rp 75.000</span>
                    </div>

                </div>

                <div class="flex items-center justify-between px-5 py-3 bg-gray-50 border-t border-gray-100">
                    <span class="text-[11px] text-gray-400">
                        Total: <strong class="text-gray-700">Rp 150.000</strong>
                    </span>

                    <button
                        class="inline-flex items-center gap-1.5 px-3 py-1.5 text-[11px] font-semibold text-green-700 bg-green-50 border border-green-200 rounded-lg">
                        Export Excel
                    </button>
                </div>
            </div>

        </div>

    </div>
    </div>
</section>
