<div id="modal-bg"
     class="hidden fixed inset-0 z-50 flex items-center justify-center px-4"
     style="background:rgba(0,0,0,.4)"
     onclick="if(event.target===this) closeModal()">

  <div id="modal-box" class="bg-white rounded-3xl w-full max-w-md p-7 shadow-2xl">

    <div class="flex items-center justify-between mb-6">
      <div>
        <div id="modal-title-text" class="font-extrabold text-gray-900 text-lg">Tambah Pengeluaran</div>
        <div class="text-xs text-gray-400 mt-0.5">Isi detail transaksi di bawah</div>
      </div>
      <button onclick="closeModal()"
              class="w-8 h-8 rounded-xl bg-gray-100 hover:bg-gray-200 transition-colors flex items-center justify-center">
        <svg width="14" height="14" fill="none" stroke="#6b7280" stroke-width="2.5" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
        </svg>
      </button>
    </div>

    <div class="flex flex-col gap-4">
      <div>
        <label class="block text-xs font-bold text-gray-500 mb-1.5">Nama Pengeluaran</label>
        <input id="f-name" type="text" placeholder="cth: Makan siang, Bensin..."
               class="w-full px-4 py-2.5 bg-gray-50 border border-gray-100 rounded-2xl text-sm
                      text-gray-800 placeholder-gray-300 focus:outline-none focus:ring-2
                      focus:ring-green-200 focus:border-green-200 transition-all">
      </div>

      <div class="grid grid-cols-2 gap-3">
        <div>
          <label class="block text-xs font-bold text-gray-500 mb-1.5">Nominal (Rp)</label>
          <input id="f-amount" type="number" placeholder="25000"
                 class="w-full px-4 py-2.5 bg-gray-50 border border-gray-100 rounded-2xl text-sm
                        text-gray-800 placeholder-gray-300 focus:outline-none focus:ring-2
                        focus:ring-green-200 focus:border-green-200 transition-all">
        </div>
        <div>
          <label class="block text-xs font-bold text-gray-500 mb-1.5">Tanggal</label>
          <input id="f-date" type="date"
                 class="w-full px-4 py-2.5 bg-gray-50 border border-gray-100 rounded-2xl text-sm
                        text-gray-800 focus:outline-none focus:ring-2 focus:ring-green-200
                        focus:border-green-200 transition-all">
        </div>
      </div>

      <div>
        <label class="block text-xs font-bold text-gray-500 mb-1.5">Kategori</label>
        <select id="f-cat"
                class="w-full px-4 py-2.5 bg-gray-50 border border-gray-100 rounded-2xl text-sm
                       text-gray-800 focus:outline-none focus:ring-2 focus:ring-green-200 transition-all">
          <option value="">Pilih kategori...</option>
          <option value="Makan">🍜 Makan & Minum</option>
          <option value="Transport">🚗 Transport</option>
          <option value="Belanja">🛍️ Belanja</option>
          <option value="Kesehatan">💊 Kesehatan</option>
          <option value="Hiburan">🎮 Hiburan</option>
          <option value="Tagihan">⚡ Tagihan</option>
        </select>
      </div>

      <div>
        <label class="block text-xs font-bold text-gray-500 mb-1.5">
          Catatan <span class="text-gray-300">(opsional)</span>
        </label>
        <textarea id="f-note" rows="2" placeholder="Tambahkan catatan..."
                  class="w-full px-4 py-2.5 bg-gray-50 border border-gray-100 rounded-2xl text-sm
                         text-gray-800 placeholder-gray-300 focus:outline-none focus:ring-2
                         focus:ring-green-200 focus:border-green-200 transition-all resize-none"></textarea>
      </div>

      <div id="modal-error"
           class="hidden text-xs text-red-500 font-semibold bg-red-50 px-3 py-2 rounded-xl"></div>

      <button onclick="saveTransaction()"
              class="w-full py-3 text-sm font-bold text-white rounded-2xl transition-all
                     hover:-translate-y-0.5 active:scale-95"
              style="background:linear-gradient(135deg,#16a34a,#22c55e);
                     box-shadow:0 6px 20px rgba(34,197,94,.3)">
        Simpan Pengeluaran
      </button>
    </div>

  </div>
</div>
