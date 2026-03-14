<section class="py-24 bg-white">
    <div class="max-w-6xl mx-auto px-6">

        <div class="max-w-2xl mb-16">
            <span class="inline-block font-display text-[11px] font-bold text-green-600 tracking-[.1em] uppercase bg-green-50 border border-green-200 px-4 py-1.5 rounded-full mb-5">
                About CatetCash
            </span>
            <h2 class="font-display font-extrabold text-gray-900 tracking-tight mb-5"
                style="font-size: clamp(30px, 4vw, 44px); line-height: 1.1">
                Built for people who just want to
                <span class="text-green-600">know where their money goes.</span>
            </h2>
            <p class="text-gray-500 leading-relaxed">
                CatetCash started from a simple frustration — most budgeting apps are too complex and cluttered.
                We built something different: a lightweight tool to track daily spending, stay within budget,
                and export reports when needed.
            </p>
        </div>

        <div class="border-t border-gray-100 pt-12 grid md:grid-cols-3 gap-4">
            @foreach([
                ['title' => 'Simplicity',     'desc' => 'If a feature makes the app harder to use, it doesn\'t belong here.'],
                ['title' => 'Transparency',   'desc' => 'No hidden costs, no data selling, no misleading free trials.'],
                ['title' => 'Accessibility',  'desc' => 'Good financial tools should be available to everyone.'],
            ] as $item)
            <div class="p-5 border border-gray-100 rounded-2xl hover:border-green-200 hover:shadow-sm transition-all">
                <div class="font-display text-[11px] font-bold text-green-600 uppercase tracking-[.08em] mb-2">
                    {{ $item['title'] }}
                </div>
                <p class="text-sm text-gray-500 leading-relaxed">{{ $item['desc'] }}</p>
            </div>
            @endforeach
        </div>

    </div>
</section>