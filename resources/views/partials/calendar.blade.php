<div class="grid grid-cols-1 lg:grid-cols-5 gap-4 fade-up-3">

  <div class="lg:col-span-3 bg-white rounded-3xl border border-gray-100 p-6">
    <div class="flex items-center justify-between mb-5">
      <div id="cal-month-label" class="font-extrabold text-gray-900 text-base"></div>
      <div class="flex items-center gap-1">
        <button id="cal-prev"
                class="w-8 h-8 rounded-xl bg-gray-50 border border-gray-100
                       flex items-center justify-center hover:bg-gray-100 transition-colors">
          <svg width="14" height="14" fill="none" stroke="#6b7280" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/>
          </svg>
        </button>
        <button id="cal-next"
                class="w-8 h-8 rounded-xl bg-gray-50 border border-gray-100
                       flex items-center justify-center hover:bg-gray-100 transition-colors">
          <svg width="14" height="14" fill="none" stroke="#6b7280" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
          </svg>
        </button>
      </div>
    </div>

    <div class="grid grid-cols-7 mb-2">
      @foreach(['Min','Sen','Sel','Rab','Kam','Jum','Sab'] as $day)
        <div class="text-[10px] font-bold text-gray-400 text-center py-1">{{ $day }}</div>
      @endforeach
    </div>

    <div id="cal-grid" class="grid grid-cols-7 gap-0.5"></div>
  </div>

  <div class="lg:col-span-2 bg-white rounded-3xl border border-gray-100 p-6 flex flex-col">
    <div id="day-detail-title" class="font-extrabold text-gray-900 text-base mb-1">
      Pilih Tanggal
    </div>
    <div id="day-detail-sub" class="text-xs text-gray-400 mb-4">
      Klik tanggal di kalender untuk melihat pengeluaran
    </div>

    <div id="day-detail-list" class="flex-1 flex flex-col gap-2">
      @include('partials.calendar_empty')
    </div>

    <div id="day-detail-total" class="hidden mt-4 pt-4 border-t border-gray-50">
      <div class="flex justify-between items-center">
        <div class="text-xs text-gray-400 font-semibold">Total Hari Ini</div>
        <div id="day-total-val" class="font-extrabold text-red-500 mono text-base"></div>
      </div>
    </div>
  </div>

</div>

@push('scripts')
<script>
const TX_DATA = @json($transactions ?? []);

const CAT_META = {
  'Makan':     { icon:'🍜', bg:'bg-orange-50', text:'text-orange-600', border:'border-orange-100' },
  'Transport': { icon:'🚗', bg:'bg-blue-50',   text:'text-blue-600',   border:'border-blue-100'   },
  'Belanja':   { icon:'🛍️', bg:'bg-purple-50', text:'text-purple-600', border:'border-purple-100' },
  'Kesehatan': { icon:'💊', bg:'bg-green-50',  text:'text-green-700',  border:'border-green-100'  },
  'Hiburan':   { icon:'🎮', bg:'bg-pink-50',   text:'text-pink-600',   border:'border-pink-100'   },
  'Tagihan':   { icon:'⚡', bg:'bg-yellow-50', text:'text-yellow-700', border:'border-yellow-100' },
};

const MONTH_NAMES = ['Januari','Februari','Maret','April','Mei','Juni',
                     'Juli','Agustus','September','Oktober','November','Desember'];

let calYear = new Date().getFullYear();
let calMonth = new Date().getMonth();
let selectedDay = null;

function fmtRp(n) {
  return 'Rp ' + parseInt(n).toLocaleString('id-ID');
}

function getDaysWithTx() {
  return new Set(TX_DATA.filter(t => {
    const d = new Date(t.date);
    return d.getFullYear() === calYear && d.getMonth() === calMonth;
  }).map(t => new Date(t.date).getDate()));
}

function renderCalendar() {
  document.getElementById('cal-month-label').textContent =
    MONTH_NAMES[calMonth] + ' ' + calYear;

  const firstDay     = new Date(calYear, calMonth, 1).getDay();
  const daysInMonth  = new Date(calYear, calMonth + 1, 0).getDate();
  const today        = new Date();
  const daysWithTx   = getDaysWithTx();

  let html = '';
  for (let i = 0; i < firstDay; i++) html += '<div></div>';

  for (let d = 1; d <= daysInMonth; d++) {
    const isToday    = today.getDate()===d && today.getMonth()===calMonth && today.getFullYear()===calYear;
    const isSelected = selectedDay === d;
    const hasTx      = daysWithTx.has(d);

    let cls = 'cal-day relative text-xs font-semibold text-gray-600 flex items-center justify-center h-9 cursor-pointer rounded-[10px] transition-all hover:bg-green-100 hover:text-green-800';
    if (isToday)    cls += ' font-bold text-green-600';
    if (hasTx)      cls += ' has-tx';
    if (isSelected) cls += ' !bg-green-600 !text-white';

    html += `<div class="${cls}" onclick="selectDay(${d})">${d}</div>`;
  }

  document.getElementById('cal-grid').innerHTML = html;

  document.querySelectorAll('.cal-day.has-tx').forEach(el => {
    if (!el.querySelector('.tx-dot')) {
      const dot = document.createElement('span');
      dot.className = 'tx-dot absolute bottom-1 left-1/2 -translate-x-1/2 w-1 h-1 rounded-full ' +
                      (el.classList.contains('!bg-green-600') ? 'bg-white' : 'bg-green-500');
      el.appendChild(dot);
    }
  });
}

function selectDay(d) {
  selectedDay = d;
  renderCalendar();

  const dateStr = `${calYear}-${String(calMonth+1).padStart(2,'0')}-${String(d).padStart(2,'0')}`;
  const dayTx   = TX_DATA.filter(t => t.date === dateStr);

  document.getElementById('day-detail-title').textContent =
    `${d} ${MONTH_NAMES[calMonth]} ${calYear}`;
  document.getElementById('day-detail-sub').textContent =
    dayTx.length ? `${dayTx.length} pengeluaran tercatat` : 'Tidak ada pengeluaran';

  const list     = document.getElementById('day-detail-list');
  const totalEl  = document.getElementById('day-detail-total');
  const totalVal = document.getElementById('day-total-val');

  if (!dayTx.length) {
    list.innerHTML = `
      <div class="flex-1 flex flex-col items-center justify-center py-8">
        <div class="text-sm text-gray-300 font-medium">Tidak ada pengeluaran</div>
      </div>`;
    totalEl.classList.add('hidden');
    return;
  }

  let html = '';
  let total = 0;
  dayTx.forEach(t => {
    const m = CAT_META[t.cat] || { icon:'💰', bg:'bg-gray-50', text:'text-gray-600', border:'border-gray-100' };
    total += parseInt(t.amount);
    html += `
      <div class="flex items-center gap-3 p-2.5 rounded-2xl border ${m.border} ${m.bg}">
        <div class="w-8 h-8 rounded-xl ${m.bg} flex items-center justify-center text-base flex-shrink-0">${m.icon}</div>
        <div class="flex-1 min-w-0">
          <div class="text-xs font-bold text-gray-800 truncate">${t.name}</div>
          <div class="text-[10px] ${m.text} font-semibold">${t.cat}</div>
        </div>
        <div class="text-xs font-bold text-red-500 mono flex-shrink-0">${fmtRp(t.amount)}</div>
      </div>`;
  });

  list.innerHTML = html;
  totalVal.textContent = fmtRp(total);
  totalEl.classList.remove('hidden');
}

document.getElementById('cal-prev').onclick = () => {
  calMonth--; if (calMonth < 0) { calMonth = 11; calYear--; }
  selectedDay = null; renderCalendar(); clearDayDetail();
};
document.getElementById('cal-next').onclick = () => {
  calMonth++; if (calMonth > 11) { calMonth = 0; calYear++; }
  selectedDay = null; renderCalendar(); clearDayDetail();
};

function clearDayDetail() {
  document.getElementById('day-detail-title').textContent = 'Pilih Tanggal';
  document.getElementById('day-detail-sub').textContent   = 'Klik tanggal di kalender untuk melihat pengeluaran';
  document.getElementById('day-detail-list').innerHTML    = `
    <div class="flex-1 flex flex-col items-center justify-center text-center py-8">
      <div class="text-sm text-gray-300 font-medium">Belum ada data</div>
    </div>`;
  document.getElementById('day-detail-total').classList.add('hidden');
}

renderCalendar();
</script>
@endpush
