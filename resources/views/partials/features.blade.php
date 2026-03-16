<style>
.feature-card {
    background: #fff;
    border: 1px solid #f3f4f6;
    border-radius: 20px;
    padding: 28px;
    transition: all .22s cubic-bezier(.4,0,.2,1);
}
.feature-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 16px 40px rgba(0,0,0,.08);
    border-color: #d1fae5;
}
.feature-icon {
    width: 44px; height: 44px;
    background: #f0fdf4;
    border-radius: 12px;
    display: flex; align-items: center; justify-content: center;
    margin-bottom: 18px;
}
</style>


<section class="py-24 bg-white">
    <div class="max-w-6xl mx-auto px-6">

        <div class="text-center mb-14">
            <span class="inline-block font-display text-[11px] font-bold text-green-600 tracking-[.1em] uppercase
                         bg-green-50 border border-green-200 px-4 py-1.5 rounded-full mb-5">
                What We Offer
            </span>
            <h2 class="font-display font-extrabold text-gray-900 tracking-tight"
                style="font-size: clamp(32px, 4vw, 44px); line-height: 1.1">
                Everything you need,<br>
                <span class="text-green-600">nothing you don't.</span>
            </h2>
        </div>

        <div class="grid md:grid-cols-3 gap-4">

            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="22" height="22" fill="none" stroke="#16a34a" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/>
                    </svg>
                </div>
                <h3 class="font-display font-bold text-gray-900 mb-2" style="font-size: 17px">Quick Record</h3>
                <p class="text-gray-500 text-sm leading-relaxed">
                    Log any expense in seconds. No forms, no friction — just type and done.
                </p>
            </div>

            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="22" height="22" fill="none" stroke="#16a34a" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                    </svg>
                </div>
                <h3 class="font-display font-bold text-gray-900 mb-2" style="font-size: 17px">Edit Anytime</h3>
                <p class="text-gray-500 text-sm leading-relaxed">
                    Made a mistake? Edit or delete any record at any time, hassle-free.
                </p>
            </div>

            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="22" height="22" fill="none" stroke="#16a34a" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                    </svg>
                </div>
                <h3 class="font-display font-bold text-gray-900 mb-2" style="font-size: 17px">Export to Excel</h3>
                <p class="text-gray-500 text-sm leading-relaxed">
                    Download your monthly report as an Excel file, ready to share or save.
                </p>
            </div>

        </div>

        <div class="flex items-center justify-between gap-6 mt-12 p-8 bg-gray-50 border border-gray-100 rounded-2xl flex-wrap">
            <div>
                <div class="font-display font-extrabold text-gray-900 mb-1" style="font-size: 18px">
                    Ready to take control of your spending?
                </div>
                <div class="text-sm text-gray-400">Free forever. No credit card required.</div>
            </div>
            <a href="{{ route('register') }}"
               class="inline-flex items-center gap-2 px-6 py-3 text-sm font-bold text-white font-display rounded-full transition-all hover:-translate-y-0.5 whitespace-nowrap"
               style="background: linear-gradient(135deg,#16a34a,#22c55e); box-shadow: 0 6px 20px rgba(34,197,94,.28)">
                Get Started Free
                <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                </svg>
            </a>
        </div>

    </div>
</section>