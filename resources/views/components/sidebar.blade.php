<aside id="sidebar"
    class="fixed top-0 left-0 h-full w-64 bg-white border-r border-gray-100 z-40 flex flex-col -translate-x-full lg:translate-x-0">

    <div class="flex items-center gap-3 px-6 py-5 border-b border-gray-50">
        <div class="w-9 h-9 rounded-xl flex items-center justify-center"
            style="background:linear-gradient(135deg,#16a34a,#22c55e)">
            <svg width="18" height="18" fill="none" stroke="#fff" stroke-width="2.2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 0v4m0 14v-4m0-6h4m-8 0h4" />
            </svg>
        </div>
        <div>
            <div class="font-extrabold text-gray-900 tracking-tight text-[15px]">
                Catet<span style="color:#16a34a">Cash</span>
            </div>
            <div class="text-[10px] text-gray-400 font-medium">Expense Tracker</div>
        </div>
    </div>

    <nav class="flex-1 px-3 py-4 flex flex-col gap-1">
        <div class="text-[10px] font-bold text-gray-400 uppercase tracking-[.1em] px-3 mb-2">Main Menu</div>

        <a href="{{ route('dashboard') }}"
            class="nav-item {{ request()->routeIs('dashboard') ? 'active' : 'text-gray-600' }}
              flex items-center gap-3 px-3 py-2.5 text-sm font-semibold">
            <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2"
                viewBox="0 0 24 24">
                <rect x="3" y="3" width="7" height="7" rx="1.5" />
                <rect x="14" y="3" width="7" height="7" rx="1.5" />
                <rect x="3" y="14" width="7" height="7" rx="1.5" />
                <rect x="14" y="14" width="7" height="7" rx="1.5" />
            </svg>
            Dashboard
        </a>

        <a href="{{ route('transactions.index') }}"
            class="nav-item {{ request()->routeIs('transactions.*') ? 'active' : 'text-gray-600' }}
              flex items-center gap-3 px-3 py-2.5 text-sm font-semibold">
            <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2
                 M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
            </svg>
            Transactions
            <span class="ml-auto badge bg-green-50 text-green-700">
                {{ $transactionCount ?? 0 }}
            </span>
        </a>

        <div class="text-[10px] font-bold text-gray-400 uppercase tracking-[.1em] px-3 mt-4 mb-2">Account</div>

        <a href="#" class="nav-item text-gray-600 flex items-center gap-3 px-3 py-2.5 text-sm font-semibold">
            <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2"
                viewBox="0 0 24 24">
                <circle cx="12" cy="8" r="4" />
                <path stroke-linecap="round" d="M4 20c0-4 3.6-7 8-7s8 3 8 7" />
            </svg>
            Profile
        </a>

        <a href="#" class="nav-item text-gray-600 flex items-center gap-3 px-3 py-2.5 text-sm font-semibold">
            <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2"
                viewBox="0 0 24 24">
                <circle cx="12" cy="12" r="3" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.4 15a1.65 1.65 0 00.33 1.82l.06.06a2 2 0 010 2.83 2 2 0 01-2.83
                 0l-.06-.06a1.65 1.65 0 00-1.82-.33 1.65 1.65 0 00-1 1.51V21a2 2 0
                 01-4 0v-.09A1.65 1.65 0 009 19.4a1.65 1.65 0 00-1.82.33l-.06.06a2 2
                 0 01-2.83-2.83l.06-.06A1.65 1.65 0 004.68 15a1.65 1.65 0 00-1.51-1H3
                 a2 2 0 010-4h.09A1.65 1.65 0 004.6 9a1.65 1.65 0 00-.33-1.82l-.06-.06
                 a2 2 0 012.83-2.83l.06.06A1.65 1.65 0 009 4.68a1.65 1.65 0 001-1.51V3
                 a2 2 0 014 0v.09a1.65 1.65 0 001 1.51 1.65 1.65 0 001.82-.33l.06-.06
                 a2 2 0 012.83 2.83l-.06.06A1.65 1.65 0 0019.4 9a1.65 1.65 0 001.51
                 1H21a2 2 0 010 4h-.09a1.65 1.65 0 00-1.51 1z" />
            </svg>
            Settings
        </a>
    </nav>

    <div class="mx-3 mb-4 p-3 rounded-2xl bg-gray-50 border border-gray-100 flex items-center gap-3">
        <div class="w-9 h-9 rounded-xl flex items-center justify-center text-sm font-bold text-white flex-shrink-0"
            style="background:linear-gradient(135deg,#16a34a,#22c55e)">
            {{ strtoupper(substr(auth()->user()->name ?? 'U', 0, 1)) }}
        </div>
        <div class="min-w-0">
            <div class="text-sm font-bold text-gray-900 truncate">{{ auth()->user()->name ?? 'User' }}</div>
            <div class="text-[11px] text-gray-400 truncate">{{ auth()->user()->email ?? '' }}</div>
        </div>
        <form method="POST" action="#">
            @csrf
            <button type="submit" title="Logout">
                <svg class="w-4 h-4 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7" />
                </svg>
            </button>
        </form>
    </div>

</aside>
