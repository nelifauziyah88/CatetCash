<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'CatetCash') — Expense Tracker</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=DM+Mono:wght@400;500&display=swap"
        rel="stylesheet">
    <style>
        * {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        .mono {
            font-family: 'DM Mono', monospace;
        }

        body {
            background: #f8faf9;
        }

        ::-webkit-scrollbar {
            width: 4px;
        }

        ::-webkit-scrollbar-track {
            background: transparent;
        }

        ::-webkit-scrollbar-thumb {
            background: #d1fae5;
            border-radius: 99px;
        }

        #sidebar {
            transition: transform .28s cubic-bezier(.4, 0, .2, 1);
        }

        #sidebar-overlay {
            transition: opacity .28s;
        }

        .nav-item {
            transition: background .15s, color .15s;
            border-radius: 12px;
        }

        .nav-item:hover:not(.active) {
            background: #f3f4f6;
        }

        .nav-item.active {
            background: #dcfce7;
            color: #15803d;
        }

        .badge {
            font-size: 11px;
            font-weight: 700;
            padding: 2px 9px;
            border-radius: 99px;
        }

        #profile-drop {
            transition: opacity .15s, transform .15s;
        }

        #profile-drop.hidden {
            pointer-events: none;
            opacity: 0;
            transform: translateY(-6px);
        }

        #profile-drop:not(.hidden) {
            opacity: 1;
            transform: translateY(0);
        }

        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(12px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .fade-up {
            animation: fadeUp .35s ease both;
        }

        .fade-up-2 {
            animation: fadeUp .35s .08s ease both;
        }

        .fade-up-3 {
            animation: fadeUp .35s .16s ease both;
        }

        @yield('extra-styles')
    </style>
    @stack('styles')
</head>

<body class="min-h-screen">

    {{-- Sidebar overlay (mobile) --}}
    <div id="sidebar-overlay" class="fixed inset-0 bg-black/30 z-30 opacity-0 pointer-events-none lg:hidden"
        onclick="closeSidebar()"></div>

    {{-- Sidebar --}}
    @include('components.sidebar')

    {{-- Main wrapper --}}
    <div class="lg:ml-64 min-h-screen flex flex-col">

        {{-- Navbar --}}
        @include('components.navbar_user')

        {{-- Page content --}}
        <main class="flex-1 p-4 lg:p-8">
            @yield('content')
        </main>

    </div>

    {{-- Global scripts --}}
    <script>
        function toggleSidebar() {
            const sb = document.getElementById('sidebar');
            const ov = document.getElementById('sidebar-overlay');
            const isOpen = !sb.classList.contains('-translate-x-full');
            isOpen ? closeSidebar() : (sb.classList.remove('-translate-x-full'), ov.classList.remove('opacity-0',
                'pointer-events-none'));
        }

        function closeSidebar() {
            document.getElementById('sidebar').classList.add('-translate-x-full');
            const ov = document.getElementById('sidebar-overlay');
            ov.classList.add('opacity-0', 'pointer-events-none');
        }

        function toggleProfile() {
            document.getElementById('profile-drop').classList.toggle('hidden');
        }
        document.addEventListener('click', function(e) {
            const drop = document.getElementById('profile-drop');
            if (drop && !drop.classList.contains('hidden') &&
                !e.target.closest('#profile-drop') &&
                !e.target.closest('[data-profile-toggle]')) {
                drop.classList.add('hidden');
            }
        });
    </script>
    @stack('scripts')
</body>

</html>
