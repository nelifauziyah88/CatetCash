@extends('layouts.dashboard_user')

@section('title', 'Transaksi')
@section('page-title', 'Transaksi')

@section('content')

{{-- Header --}}
<div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-7 fade-up">
  <div>
    <div class="font-extrabold text-gray-900 text-2xl tracking-tight">Transaksi</div>
    <div class="text-sm text-gray-400 mt-0.5" id="tx-header-count">— entri</div>
  </div>
  <button onclick="openModal()"
          class="flex items-center gap-2 px-5 py-2.5 text-sm font-bold text-white rounded-2xl
                 transition-all hover:-translate-y-0.5"
          style="background:linear-gradient(135deg,#16a34a,#22c55e);
                 box-shadow:0 6px 20px rgba(34,197,94,.3)">
    <svg width="16" height="16" fill="none" stroke="#fff" stroke-width="2.5" viewBox="0 0 24 24">
      <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/>
    </svg>
    Add New
  </button>
</div>

{{-- Filters --}}
<div class="flex flex-col sm:flex-row gap-3 mb-5 fade-up-2">
  <div class="flex-1 relative">
    <svg class="absolute left-3.5 top-1/2 -translate-y-1/2 w-4 h-4 text-gray-400"
         fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
      <circle cx="11" cy="11" r="8"/>
      <path stroke-linecap="round" d="M21 21l-4.35-4.35"/>
    </svg>
    <input id="search-input" type="text" placeholder="Cari transaksi..."
           oninput="filterTx()"
           class="w-full pl-10 pr-4 py-2.5 bg-white border border-gray-100 rounded-2xl text-sm
                  text-gray-700 placeholder-gray-300 focus:outline-none focus:ring-2
                  focus:ring-green-200 transition-all">
  </div>

  <select id="filter-cat" onchange="filterTx()"
          class="px-4 py-2.5 bg-white border border-gray-100 rounded-2xl text-sm text-gray-600
                 focus:outline-none focus:ring-2 focus:ring-green-200">
    <option value="">Semua Kategori</option>
    <option value="Makan">🍜 Makan & Minum</option>
    <option value="Transport">🚗 Transport</option>
    <option value="Belanja">🛍️ Belanja</option>
    <option value="Kesehatan">💊 Kesehatan</option>
    <option value="Hiburan">🎮 Hiburan</option>
    <option value="Tagihan">⚡ Tagihan</option>
  </select>

  <select id="filter-sort" onchange="filterTx()"
          class="px-4 py-2.5 bg-white border border-gray-100 rounded-2xl text-sm text-gray-600
                 focus:outline-none focus:ring-2 focus:ring-green-200">
    <option value="date-desc">Terbaru dulu</option>
    <option value="date-asc">Terlama dulu</option>
    <option value="amount-desc">Terbesar dulu</option>
    <option value="amount-asc">Terkecil dulu</option>
  </select>
</div>

{{-- Table --}}
<div class="bg-white rounded-3xl border border-gray-100 overflow-hidden fade-up-3">
  <div class="overflow-x-auto">
    <table class="w-full">
      <thead>
        <tr class="border-b border-gray-50">
          <th class="text-left px-6 py-4 text-[10px] font-bold text-gray-400 uppercase tracking-[.1em]">Tanggal</th>
          <th class="text-left px-4 py-4 text-[10px] font-bold text-gray-400 uppercase tracking-[.1em]">Nama</th>
          <th class="text-left px-4 py-4 text-[10px] font-bold text-gray-400 uppercase tracking-[.1em]">Kategori</th>
          <th class="text-left px-4 py-4 text-[10px] font-bold text-gray-400 uppercase tracking-[.1em]">Catatan</th>
          <th class="text-right px-6 py-4 text-[10px] font-bold text-gray-400 uppercase tracking-[.1em]">Nominal</th>
          <th class="px-6 py-4"></th>
        </tr>
      </thead>
      <tbody id="tx-table-body"></tbody>
    </table>
  </div>

  <div id="tx-empty" class="hidden py-16 text-center">
    <div class="text-gray-300 text-sm font-medium">Tidak ada transaksi ditemukan</div>
  </div>

  {{-- Footer total --}}
  <div class="px-6 py-4 border-t border-gray-50 flex items-center justify-between">
    <div class="text-xs text-gray-400" id="tx-count"></div>
    <div class="flex items-center gap-2">
      <div class="text-xs text-gray-400 font-semibold">Total:</div>
      <div class="font-extrabold text-red-500 mono text-sm" id="tx-total"></div>
    </div>
  </div>
</div>

{{-- Modal --}}
@include('partials.transaction_modal')

@endsection

@push('scripts')
<script>
// ── Dummy data (ganti dengan @json($transactions) saat connect backend) ──────
let transactions = [
  { id:1,  name:'Kopi Susu Kekinian',    amount:28000,  date:'2025-05-01', cat:'Makan',     note:'Di Fore Coffee' },
  { id:2,  name:'Bensin Motor',          amount:50000,  date:'2025-05-01', cat:'Transport', note:'Full tank' },
  { id:3,  name:'Makan Siang Kantor',    amount:35000,  date:'2025-05-02', cat:'Makan',     note:'Warteg sebelah' },
  { id:4,  name:'Beli Baju',             amount:180000, date:'2025-05-03', cat:'Belanja',   note:'Di mall' },
  { id:5,  name:'Obat Flu',              amount:45000,  date:'2025-05-05', cat:'Kesehatan', note:'Apotek Kimia Farma' },
  { id:6,  name:'Listrik PLN',           amount:210000, date:'2025-05-06', cat:'Tagihan',   note:'Tagihan April' },
  { id:7,  name:'Makan Malam',           amount:55000,  date:'2025-05-07', cat:'Makan',     note:'Ayam geprek' },
  { id:8,  name:'Grab ke Kantor',        amount:22000,  date:'2025-05-08', cat:'Transport', note:'' },
  { id:9,  name:'Skincare Toner',        amount:120000, date:'2025-05-09', cat:'Belanja',   note:'Scarlett' },
  { id:10, name:'Nonton Bioskop',        amount:85000,  date:'2025-05-10', cat:'Hiburan',   note:'CGV, bareng teman' },
  { id:11, name:'Internet Indihome',     amount:350000, date:'2025-05-11', cat:'Tagihan',   note:'Paket 50Mbps' },
  { id:12, name:'Sarapan Nasi Uduk',     amount:18000,  date:'2025-05-12', cat:'Makan',     note:'Depan kos' },
  { id:13, name:'Parkir Mall',           amount:5000,   date:'2025-05-12', cat:'Transport', note:'' },
  { id:14, name:'Suplemen Vitamin C',    amount:75000,  date:'2025-05-13', cat:'Kesehatan', note:'' },
  { id:15, name:'Bubur Ayam',            amount:20000,  date:'2025-05-14', cat:'Makan',     note:'Sarapan' },
  { id:16, name:'Buku Design System',    amount:165000, date:'2025-05-14', cat:'Belanja',   note:'Gramedia' },
  { id:17, name:'Es Teh Manis',          amount:8000,   date:'2025-05-15', cat:'Makan',     note:'' },
  { id:18, name:'Spotify Premium',       amount:54990,  date:'2025-05-15', cat:'Hiburan',   note:'Langganan bulanan' },
  { id:19, name:'Ojek Online',           amount:18000,  date:'2025-05-16', cat:'Transport', note:'Ke minimarket' },
  { id:20, name:'Mie Goreng Warung',     amount:22000,  date:'2025-05-16', cat:'Makan',     note:'Makan malam' },
  { id:21, name:'Cuci Motor',            amount:30000,  date:'2025-05-17', cat:'Transport', note:'' },
  { id:22, name:'Indomaret Snack',       amount:42000,  date:'2025-05-17', cat:'Makan',     note:'Cemilan sore' },
  { id:23, name:'Kelas Online Design',   amount:299000, date:'2025-05-18', cat:'Belanja',   note:'Buildwith Angga' },
  { id:24, name:'Makan Siang Seafood',   amount:95000,  date:'2025-05-18', cat:'Makan',     note:'Sama keluarga' },
];
let nextId    = 25;
let editingId = null;

const CAT_META = {
  'Makan':     { icon:'🍜', bg:'bg-orange-50', text:'text-orange-600', border:'border-orange-100' },
  'Transport': { icon:'🚗', bg:'bg-blue-50',   text:'text-blue-600',   border:'border-blue-100'   },
  'Belanja':   { icon:'🛍️', bg:'bg-purple-50', text:'text-purple-600', border:'border-purple-100' },
  'Kesehatan': { icon:'💊', bg:'bg-green-50',  text:'text-green-700',  border:'border-green-100'  },
  'Hiburan':   { icon:'🎮', bg:'bg-pink-50',   text:'text-pink-600',   border:'border-pink-100'   },
  'Tagihan':   { icon:'⚡', bg:'bg-yellow-50', text:'text-yellow-700', border:'border-yellow-100' },
};

function fmtRp(n) {
  return 'Rp ' + parseInt(n).toLocaleString('id-ID');
}

// ── Table render ─────────────────────────────────────────────────────────────
function renderTxTable(data) {
  const body  = document.getElementById('tx-table-body');
  const empty = document.getElementById('tx-empty');
  const count = document.getElementById('tx-count');
  const total = document.getElementById('tx-total');
  const hdr   = document.getElementById('tx-header-count');

  hdr.textContent = data.length + ' entri — Mei 2025';

  if (!data.length) {
    body.innerHTML = '';
    empty.classList.remove('hidden');
    count.textContent = '0 transaksi';
    total.textContent = 'Rp 0';
    return;
  }
  empty.classList.add('hidden');

  let sum  = 0;
  let html = '';
  data.forEach(t => {
    sum += parseInt(t.amount);
    const m       = CAT_META[t.cat] || { icon:'💰', bg:'bg-gray-50', text:'text-gray-600', border:'border-gray-100' };
    const d       = new Date(t.date);
    const dateStr = d.toLocaleDateString('id-ID', { day:'2-digit', month:'short', year:'numeric' });
    html += `
      <tr class="border-b border-gray-50 last:border-0 hover:bg-green-50/40 transition-colors">
        <td class="px-6 py-4 text-xs text-gray-500 font-medium whitespace-nowrap mono">${dateStr}</td>
        <td class="px-4 py-4 text-sm font-bold text-gray-800">${t.name}</td>
        <td class="px-4 py-4">
          <span class="badge ${m.bg} ${m.text} border ${m.border}">${m.icon} ${t.cat}</span>
        </td>
        <td class="px-4 py-4 text-xs text-gray-400 max-w-[140px] truncate">${t.note || '—'}</td>
        <td class="px-6 py-4 text-right font-bold text-red-500 mono text-sm whitespace-nowrap">
          ${fmtRp(t.amount)}
        </td>
        <td class="px-6 py-4">
          <div class="flex items-center gap-1 justify-end">
            <button onclick="editTx(${t.id})"
                    class="w-7 h-7 rounded-lg bg-blue-50 hover:bg-blue-100 flex items-center
                           justify-center transition-colors" title="Edit">
              <svg width="13" height="13" fill="none" stroke="#3b82f6" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5
                         m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
              </svg>
            </button>
            <button onclick="deleteTx(${t.id})"
                    class="w-7 h-7 rounded-lg bg-red-50 hover:bg-red-100 flex items-center
                           justify-center transition-colors" title="Hapus">
              <svg width="13" height="13" fill="none" stroke="#ef4444" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0
                         01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1
                         1 0 00-1 1v3M4 7h16"/>
              </svg>
            </button>
          </div>
        </td>
      </tr>`;
  });
  body.innerHTML    = html;
  count.textContent = data.length + ' transaksi';
  total.textContent = fmtRp(sum);
}

// ── Filter & sort ─────────────────────────────────────────────────────────────
function filterTx() {
  const q    = document.getElementById('search-input').value.toLowerCase();
  const cat  = document.getElementById('filter-cat').value;
  const sort = document.getElementById('filter-sort').value;

  let data = transactions.filter(t => {
    const matchQ   = !q   || t.name.toLowerCase().includes(q) || (t.note && t.note.toLowerCase().includes(q));
    const matchCat = !cat || t.cat === cat;
    return matchQ && matchCat;
  });

  data.sort((a, b) => {
    if (sort === 'date-desc')   return new Date(b.date) - new Date(a.date);
    if (sort === 'date-asc')    return new Date(a.date) - new Date(b.date);
    if (sort === 'amount-desc') return b.amount - a.amount;
    if (sort === 'amount-asc')  return a.amount - b.amount;
  });
  renderTxTable(data);
}

// ── CRUD ──────────────────────────────────────────────────────────────────────
function deleteTx(id) {
  if (!confirm('Hapus transaksi ini?')) return;
  transactions = transactions.filter(t => t.id !== id);
  filterTx();
}

function editTx(id) {
  const t = transactions.find(t => t.id === id);
  if (!t) return;
  editingId = id;
  document.getElementById('modal-title-text').textContent = 'Edit Pengeluaran';
  document.getElementById('f-name').value   = t.name;
  document.getElementById('f-amount').value = t.amount;
  document.getElementById('f-date').value   = t.date;
  document.getElementById('f-cat').value    = t.cat;
  document.getElementById('f-note').value   = t.note;
  openModal();
}

// ── Modal ─────────────────────────────────────────────────────────────────────
function openModal() {
  document.getElementById('modal-bg').classList.remove('hidden');
  if (!document.getElementById('f-date').value)
    document.getElementById('f-date').value = new Date().toISOString().split('T')[0];
  document.getElementById('modal-error').classList.add('hidden');
}
function closeModal() {
  document.getElementById('modal-bg').classList.add('hidden');
  ['f-name','f-amount','f-note'].forEach(id => document.getElementById(id).value = '');
  document.getElementById('f-cat').value  = '';
  document.getElementById('f-date').value = '';
  document.getElementById('modal-title-text').textContent = 'Tambah Pengeluaran';
  editingId = null;
}
function saveTransaction() {
  const name   = document.getElementById('f-name').value.trim();
  const amount = parseInt(document.getElementById('f-amount').value);
  const date   = document.getElementById('f-date').value;
  const cat    = document.getElementById('f-cat').value;
  const note   = document.getElementById('f-note').value.trim();
  const err    = document.getElementById('modal-error');

  if (!name || !amount || !date || !cat) {
    err.textContent = 'Nama, nominal, tanggal, dan kategori wajib diisi.';
    err.classList.remove('hidden');
    return;
  }
  err.classList.add('hidden');

  if (editingId) {
    const idx = transactions.findIndex(t => t.id === editingId);
    transactions[idx] = { id: editingId, name, amount, date, cat, note };
  } else {
    transactions.unshift({ id: nextId++, name, amount, date, cat, note });
  }
  closeModal();
  filterTx();
}

// ── Init ──────────────────────────────────────────────────────────────────────
filterTx();
</script>
@endpush
