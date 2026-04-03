<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard') — CatetCash</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=DM+Mono:wght@400;500&display=swap" rel="stylesheet">
    <style>
        * { font-family: 'Plus Jakarta Sans', sans-serif; }
        .font-mono { font-family: 'DM Mono', monospace; }
        .sidebar-link { transition: all .18s; }
        .sidebar-link:hover { background: #f0fdf4; color: #16a34a; }
        .sidebar-link.active { background: linear-gradient(135deg, #dcfce7, #f0fdf4); color: #15803d; font-weight: 700; }
        .sidebar-link.active .link-dot { background: #22c55e; }
        ::-webkit-scrollbar { width: 4px; }
        ::-webkit-scrollbar-track { background: #f9fafb; }
        ::-webkit-scrollbar-thumb { background: #d1fae5; border-radius: 4px; }
    </style>
</head>
<body class="bg-gray-50 min-h-screen">

    <div class="flex min-h-screen">

        @include('components.sidebar')

        <div class="flex-1 flex flex-col min-w-0">

            <header class="bg-white border-b border-gray-100 px-8 py-4 flex items-center justify-between sticky top-0 z-10">
                <div>
                    <h1 class="font-extrabold text-gray-900 text-lg tracking-tight">@yield('page-title', 'Dashboard')</h1>
                    <p class="text-xs text-gray-400 mt-0.5">@yield('page-subtitle', 'Welcome back!')</p>
                </div>
                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 rounded-full bg-gradient-to-br from-green-400 to-green-600 flex items-center justify-center text-white text-xs font-bold">
                        {{ strtoupper(substr(auth()->user()->name ?? 'U', 0, 1)) }}
                    </div>
                    <div class="hidden sm:block">
                        <p class="text-sm font-semibold text-gray-800 leading-none">{{ auth()->user()->name ?? 'User' }}</p>
                        <p class="text-[11px] text-gray-400 mt-0.5">{{ auth()->user()->email ?? '' }}</p>
                    </div>
                </div>
            </header>

            <main class="flex-1 p-8">
                @yield('content')
            </main>

        </div>
    </div>

</body>
</html>