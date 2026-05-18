<div class="mt-4 bg-white rounded-3xl border border-gray-100 p-5 fade-up-3">
  <div class="flex items-center justify-between mb-4">
    <div class="font-bold text-gray-900 text-sm">Pengeluaran per Kategori — {{ $month ?? 'Bulan Ini' }}</div>
    <a href="{{ route('transactions.index') }}"
       class="text-xs font-semibold text-green-600 hover:text-green-700">Lihat semua →</a>
  </div>

  <div class="grid grid-cols-2 sm:grid-cols-4 gap-3">
    @foreach($categories ?? [] as $cat)
    <div class="p-3 rounded-2xl {{ $cat['color_bg'] }} border {{ $cat['color_border'] }}">
      <div class="text-lg mb-1">{{ $cat['icon'] }}</div>
      <div class="text-xs {{ $cat['color_text'] }} font-bold mb-0.5">{{ $cat['label'] }}</div>
      <div class="font-extrabold text-gray-900 mono text-sm">
        Rp {{ number_format($cat['amount'] / 1000, 0) }}k
      </div>
      <div class="mt-2 h-1 {{ $cat['color_bar_bg'] }} rounded-full">
        <div class="h-full {{ $cat['color_bar'] }} rounded-full" style="width:{{ $cat['percent'] }}%"></div>
      </div>
    </div>
    @endforeach

    @if(empty($categories))
      <div class="col-span-4 text-center py-6 text-sm text-gray-300">Belum ada data kategori</div>
    @endif
  </div>
</div>
