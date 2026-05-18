<header class="sticky top-0 z-20 bg-white/80 backdrop-blur border-b border-gray-100">
    <div class="flex items-center gap-4 px-4 lg:px-8 h-16">

        <button onclick="toggleSidebar()"
            class="lg:hidden w-9 h-9 rounded-xl bg-gray-50 border border-gray-100
                   flex items-center justify-center">
            <svg width="18" height="18" fill="none" stroke="#374151" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>

        <div class="font-extrabold text-gray-900 text-lg tracking-tight">
            @yield('page-title', 'Dashboard')
        </div>

        <div class="ml-auto flex items-center gap-3">

            <button
                class="relative w-9 h-9 rounded-xl bg-gray-50 border border-gray-100
                     flex items-center justify-center">
                <svg width="17" height="17" fill="none" stroke="#374151" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6 6 0
                   10-12 0v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6
                   0v1a3 3 0 11-6 0v-1m6 0H9" />
                </svg>
                <span
                    class="absolute top-1.5 right-1.5 w-2 h-2 rounded-full bg-green-500
                     border-2 border-white"></span>
            </button>

            <div class="relative">
                <button data-profile-toggle onclick="toggleProfile()"
                    class="flex items-center gap-2.5 pl-1 pr-3 py-1 rounded-xl bg-gray-50 border border-gray-100">
                    <div class="w-7 h-7 rounded-lg flex items-center justify-center text-xs font-bold text-white"
                        style="background:linear-gradient(135deg,#16a34a,#22c55e)">
                        {{ strtoupper(substr(auth()->user()->name ?? 'U', 0, 1)) }}
                    </div>
                    <span class="text-sm font-semibold text-gray-700 hidden sm:block">
                        {{ explode(' ', auth()->user()->name ?? 'User')[0] }}
                    </span>
                    <svg class="w-3.5 h-3.5 text-gray-400" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>

                <div id="profile-drop"
                    class="hidden absolute right-0 top-full mt-2 w-44 bg-white border border-gray-100
                    rounded-2xl shadow-xl overflow-hidden py-1 z-50">
                    <a href="#"
                        class="w-full text-left px-4 py-2.5 text-sm text-gray-700 hover:bg-gray-50
                    font-medium flex items-center gap-2">
                        <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <circle cx="12" cy="8" r="4" />
                            <path stroke-linecap="round" d="M4 20c0-4 3.6-7 8-7s8 3 8 7" />
                        </svg>
                        Profile
                    </a>
                    <a href="#"
                        class="w-full text-left px-4 py-2.5 text-sm text-gray-700 hover:bg-gray-50
                    font-medium flex items-center gap-2">
                        <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="3" />
                        </svg>
                        Settings
                    </a>
                    <div class="h-px bg-gray-100 my-1"></div>
                    <form method="POST" action="#">
                        @csrf
                        <button type="submit"
                            class="w-full text-left px-4 py-2.5 text-sm text-red-500 hover:bg-red-50
                           font-medium flex items-center gap-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a2 2 0 01-2 2H5a2 2 0
                         01-2-2V7a2 2 0 012-2h6a2 2 0 012 2v1" />
                            </svg>
                            Logout
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</header>
